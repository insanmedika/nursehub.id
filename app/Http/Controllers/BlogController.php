<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Str;
use Image;
use Auth;
class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $blog = DB::table('blog')->paginate(20);
        return view('admin.blog.index', compact('blog'));
    }
    public function archive()
    {
        $blog = DB::table('blog')->join('users','users.id','=','blog.user_id')
                ->select('blog.*', 'users.name as author')
                ->orderBy('blog.created_at', 'DESC')
                ->paginate(10);
        return view('admin.blog.archive', compact('blog'));
    }
    public function get_all_article(){
        return response()->json(DB::table('blog')
           ->where('blog.post_type', '=', 'Publish')
           ->orderBy('blog.created_at', 'DESC')
           ->get(), 200);
   }

    public function single($id)
    {
        $dataarticle = DB::table('blog')->where('blog.slug_judul','=',$id)
                    ->join('users','users.id','=','blog.user_id')
                    ->select('blog.*', 'users.name as author')
                    ->first();
       

        return view('admin.blog.single', compact('dataarticle'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $category = DB::table('category')->get();
        return view('admin.blog.create', compact('category'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'judul' => 'required',
            'meta_desc' => 'required',
            'post_type' => 'required',
            'category' => 'required',
            'image' => 'required',
            'content' => 'required',
            
        ]);
        $slug = Str::slug($request->judul);
        if($request->hasfile('image')) 
        { 
          $file = $request->file('image');
          $extension = $file->getClientOriginalExtension(); // getting image extension
          $filename =time().'.'.$extension;
          Image::make($file)->resize(null, 500,function ($constraint) {$constraint->aspectRatio();})->save( public_path('/uploads/artikel/' . $filename) );
          
        }
        DB::table('blog')->insert([
            'judul' => $request->judul,
            'meta_desc' => $request->meta_desc,
            'post_type' => $request->post_type,
            'slug_judul' => $slug,
            'category' => $request->category,
            'image' => $filename,
            'user_id' => Auth::user()->id,
            'content' => $request->content,
           
        ]);
        return redirect('/dashboard/blog/')->withSuccess('Data sudah di buat');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $blog = DB::table('blog')->where('id',$id)
            ->first();
        return view('admin.blog.edit', compact('blog'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        if(!empty($request->image)) 
        { 
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension(); // getting image extension
            $filename =time().'.'.$extension;
            Image::make($file)->resize(null, 360,function ($constraint) {$constraint->aspectRatio();})->save( public_path('/uploads/artikel/' . $filename) );
        }else{
            $filename = $request->old_feature_image;
        }
        $a = DB::table('blog')
        ->where('id',$request->id)->first();
        if($a->post_type=="Draft"){
            if($request->post_type=="Publish"){
                $artikel = DB::table('posts')
                    ->where('id',$request->id)
                    ->update([
                            'created_at' => Carbon::today()
                        ]);
            }
        }
        $artikel = DB::table('blog')
            ->where('id',$request->id)
            ->update([
                    'image' => $filename,
                    'judul'=> $request->judul,
                    'content' => $request->content,
                    'meta_desc' => $request->meta_desc,
                    'post_type' => $request->post_type,
                    'category' => $request->category
                ]);
        return redirect('/dashboard/blog/edit/'.$request->id)->withSuccess('Data sudah di Update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id){
        DB::table('blog')->where('id',$id)->delete();
        return redirect('/dashboard/blog')->withSuccess('Artikel sudah di hapus');
    }
}

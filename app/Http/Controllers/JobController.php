<?php

namespace App\Http\Controllers;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use DB;
class JobController extends Controller
{
    public function index(){
        $lowongan = DB::table('jobs')->paginate(20);
        return view('admin.lowongan.index', compact('lowongan'));
    }
    public function store(Request $request){
        $validated = $request->validate([
            'name' => 'required',
            'deadline' => 'required',
            'job_type' => 'required',
            'location' => 'required',
            'job_position' => 'required',
            'job_desk' => 'required',
            'type_salary' => 'required',
            'salary' => 'required',
            'experience' => 'required',
            'term_condition' => 'required',
            'benefit' => 'required',
            'requirements' => 'required'
        ]);
        $slug = Str::slug($request->name);
        DB::table('jobs')->insert([
            'name' => $request->name,
            'deadline' => $request->deadline,
            'job_type' => $request->job_type,
            'job_desk' => $request->job_desk,
            'slug_judul' => $slug,
            'location' => $request->location,
            'job_position' => $request->job_position,
            'type_salary' => $request->type_salary,
            'salary' => $request->salary,
            'experience' => $request->experience,
            'term_condition' => $request->term_condition,
            'benefit' => $request->benefit,
            'requirement' => $request->requirements
        ]);
        return redirect('/dashboard/lowongan')->withSuccess('Data sudah di Tambahkan');
    }

    public function edit($id)
    {
        $edit = DB::table('jobs')->where('id',$id)
                ->first();
        return view('admin.lowongan.edit', compact('edit'));
    }

    public function update(Request $request)
    {
        
        DB::table('jobs')->where('id',$request->id)
            ->update([
            'name' => $request->name,
            'deadline' => $request->deadline,
            'job_type' => $request->job_type,
            'job_desk' => $request->job_desk,
            'location' => $request->location,
            'job_position' => $request->job_position,
            'type_salary' => $request->type_salary,
            'salary' => $request->salary,
            'experience' => $request->experience,
            'term_condition' => $request->term_condition,
            'benefit' => $request->benefit,
            'requirement' => $request->requirements
        ]);
        return redirect('/dashboard/lowongan')->withSuccess('Data sudah di Update');
    }

    public function lowongan($posts)
    {
       
        $post = DB::table('jobs')->where('slug_judul',$posts)
                ->get();
       
        if(count($post)>0){
            $lainnya = DB::table('jobs')->where('name','!=',$post[0]->name)
                ->take(5)
                ->get();
            return view('admin.lowongan.single', compact('post','lainnya'));
        }else{
            return abort(404);
        }
        
    }
    public function destroy($id){
        DB::table('jobs')->where('id',$id)->delete();
        return redirect('/dashboard/lowongan')->withSuccess('Lowongan sudah di hapus');
    }
}

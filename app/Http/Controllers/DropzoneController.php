<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class DropzoneController extends Controller
{
    public function dropzone()
    {
        return view('admin.dropzone');
    }
     
    /**
     * Image Upload Code
     *
     * @return void
     */
    public function dropzoneStore(Request $request)
    {
        $image = $request->file('file');
    
        $imageName = time().'.'.$image->extension();
        $image->move(public_path('images'),$imageName);
        DB::table('photos')->insert([
           'name' => $request->file->getClientOriginalName(),
            'path' => $imageName,
           
           
        ]);
        
    }
    public function fileDestroy(Request $request)
    {
        $filename =  $request->get('name');
        DB::table('photos')->where('path',$filename)->delete();
        $path=public_path().'/images/'.$filename;
        if (file_exists($path)) {
            unlink($path);
        }
        return $filename;  
    }
    function fetch()
    {
     $images = \File::allFiles(public_path('/images'));
     rsort($images);
     $output = '<div class="row">';
     foreach($images as $image)
     {
      $output .= '
      <div class="col-md-2" style="margin-bottom:16px;" align="center">
                <img src="'.asset('/images/' . $image->getFilename()).'" class="img-thumbnail" width="175" height="175" style="height:175px;" />
                <button type="button" class="btn btn-link remove_image" id="'.$image->getFilename().'">Remove</button>
            </div>
      ';
     }
     $output .= '</div>';
     echo $output;
    }
}

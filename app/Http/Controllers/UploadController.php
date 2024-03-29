<?php

namespace App\Http\Controllers;

use App\deletephoto;
use Illuminate\Http\Request;
use DB;
use Session;
use File; 
use App\Models\Image;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;

class UploadController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $images = DB::table('images')->get(); 
        return view('page.showfile')->with('images',$images);
    }

    public function upload()
    {
        return view('page.uploadfile');
    }

    public function save(Request $request){
       
        
        $request->validate([
          'file' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $image = new Image;

        $get_image = $request->file('file');
        if ($get_image) {
            $get_name_image = $get_image->getClientOriginalName();
            
            $name_image = current(explode('.',$get_name_image));
            $new_image =  $name_image.rand(0,99).'.'.$get_image->getClientOriginalExtension();
            $get_image->move('uploads',$new_image);
            // $path = $request->file('file')->storeAs('uploads', $imageName, 'public');
        }

        $image->name = $new_image;
        $image->path = 'uploads/'.$new_image;
        $image->save();

        return response()->json('Image uploaded successfully');
    }
}

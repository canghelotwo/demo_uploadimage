<?php

namespace App\Http\Controllers;

use App\deletephoto;
use Illuminate\Http\Request;
use DB;
use Session;
 use File; 
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
    	$image = DB::table('avatar')->get();
        return view('page.showfile')->with('image',$image);
    }

    public function upload()
    {
        return view('page.uploadfile');
    }

    public function save(Request $request)
    {
    	$data = array();
        $data['image'] = $request->image;

        $get_image = $request->file('image');
      
        if($get_image){
            $get_name_image = $get_image->getClientOriginalName();
            
            $name_image = current(explode('.',$get_name_image));
            $new_image =  $name_image.rand(0,99).'.'.$get_image->getClientOriginalExtension();
            $get_image->move('uploads',$new_image);
            $data['image'] = 'uploads/'.$new_image;
            DB::table('avatar')->insert($data);
            return Redirect::to('home');
        }
        else{    
            return Redirect::to('home'); 
            
        }
    }
}

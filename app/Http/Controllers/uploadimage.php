<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use views;

class uploadimage extends Controller
{
    public function index()
    {
      return view('register');
    }
    public function upload(Request $request)
    {
       $this->validate($request, ['select_files'=> 'required|image|mimes:jpeg,jpg,png|max:2048']);

       $image = $request->file('select_file');

       $new_name = rand(). '.' .$image->getClientOriginalExtension();
       $image->move(public_path("images"), $new_name);
       return back()->with('Success', 'Image Uploaded Successfully')->with('path', $new_name);
    }
}

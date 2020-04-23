<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostsController extends Controller
{
      public function post($id){
  
      return view('posteo');
    }
}
    // $posteo = Posteo::find($id);
// , compact('posteo')
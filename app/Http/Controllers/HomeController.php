<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Posteo;

class HomeController extends Controller
{
    public function about(){
        return view ('about');
    }
    public function posteo(){
        return view ('posteo');
    }
    public function contacto(){
        return view ('contacto');
    }
}

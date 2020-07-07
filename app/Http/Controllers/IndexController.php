<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Posteo;
use Http;
class IndexController extends Controller
{
        public function index()
    {
        // API
        $respuesta= Http::get('http://www.rtve.es/api/noticias.json');
        $posteos1 = $respuesta->json();
        $posteos2 = $posteos1['page'];
        $posteos = $posteos2['items'];
        //  dd($posteos);
        return view('welcome', compact('posteos'));
        // Base de datos ---->>>
        // $posteos= Posteo::latest('added_on')->get();
        // return view('welcome', compact('posteos'));
    }
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

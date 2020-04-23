<?php

namespace App\Http\Controllers;

use App\Posteo;
use Illuminate\Http\Request;

class NoticiasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Posteo  $posteo
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $posteo = Posteo::where('id', $id)->first();
      return view('noticia', compact('posteo'));
    }
      
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Posteo  $posteo
     * @return \Illuminate\Http\Response
     */
    public function edit(Posteo $posteo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Posteo  $posteo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Posteo $posteo)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Posteo  $posteo
     * @return \Illuminate\Http\Response
     */
    public function destroy(Posteo $posteo)
    {
        //
    }
}

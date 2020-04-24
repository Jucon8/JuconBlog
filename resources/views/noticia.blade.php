

@extends('layout')
@section('titulo')
Noticia:{{$posteo->id}}
@endsection

@section('contenido')
  <!-- Page Header -->
  <header class="masthead" style="background-image: url('{{url('img/corona.jpeg')}}')">
    <div class="overlay"></div>
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
          <div class="post-heading">
              {{-- {{dd($posteo)}} --}}
          <h1>{{$posteo->titulo}}</h1>
            <h2 class="subheading">{{$posteo->comentario}}</h2>
            <span class="meta">Publicado por:
            <a href="#">{{$posteo->usuario}}</a>
            {{$posteo->added_on->diffForHumans()}}</span>
          </div>
        </div>
      </div>
    </div>
  </header>
<hr>
  <!-- Post Content -->
  <article>
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
          <p class="text-justify">
          {{$posteo->cuerpo}}
            </p>
        </div>
      </div>
    </div>
  </article>
  <hr>
  <a href="{{url('/')}}">
  <div class="masthead" style="background-image: url('{{url('img/corona.jpeg')}}')">
    <div class="overlay"></div>
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
          <div class="post-heading">
              {{-- {{dd($posteo)}} --}}
            <h2 class="subheading"><i class="fas fa-arrow-circle-left"></i> VOLVER AL INICIO</h2>
          </div>
        </div>
      </div>
    </div>
  </div>
  </a>

  <hr>
  @endsection
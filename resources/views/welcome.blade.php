

@extends('layout')
@section('titulo')
    Inicio
@endsection
@section('contenido')
    
  <!-- Page Header -->
  <header class="masthead" style="background-image: url('img/home-bg.jpg')">
    <div class="overlay"></div>
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
          <div class="site-heading">
            <h1>NOTICIAS</h1>
            <span class="subheading">AL ALCANCE DE UN CLICK</span>
          </div>
        </div>
      </div>
    </div>
  </header>
  
  <!-- Main Content -->
  {{-- MODO API RTVE NOTICIAS--}}
<hr>
@foreach ($posteos as $post)

<div class="card mb-3">
  <div class="row no-gutters">
    <div class="col-md-4" style="overflow: hidden">
      <a href=" {{ route('noticia.show', $post['id']) }} ">
          <img class="post-image" src="{{$post['imageSEO']}}" alt="">
      </div>
          <div class="col-md-8 pl-1" id="textoNoticia">
            <div class="post-preview">
        
        
            <h2 class="post-title">
              {{$post['longTitle']}}
            </h2>
            <h4 class="post-subtitle">
                {{-- {!!$post['summary']!!} --}}
            </h4>
          </a>
          <p class="post-meta"> Etiquetas:
            <a href="#">{{$post['mainCategory']}}</a>
            <br>
            Fecha:
          {{$post['publicationDate']}}</p>
            </div>
          </div>
        </div>
    </div>
        <hr>
        @endforeach
        <div class="clearfix">
          <a class="btn btn-primary float-right" href="#">Más Noticias &rarr;</a>
        </div>





      {{-- MODO DB --}}
  
  {{-- <div class="container">
    <div class="row">
      <div class="col-lg-8 col-md-10 mx-auto">
          @foreach ($posteos as $post)
        <div class="post-preview">
        <a href=" {{ route('noticia.show', $post->id) }} ">
            <h2 class="post-title">
              {{$post->titulo}}
            </h2>
            <h3 class="post-subtitle">
                {{$post->comentario}}
            </h3>
          </a>
          <p class="post-meta">Publicado por:
            <a href="#">{{$post->usuario}}</a>
          {{$post->added_on->diffForHumans()}}</p>
        </div>
        <hr>
        @endforeach
        <div class="clearfix">
          <a class="btn btn-primary float-right" href="#">Noticias anteriores &rarr;</a>
        </div>
      </div>
    </div>
  </div>

  <hr> --}}

@endsection
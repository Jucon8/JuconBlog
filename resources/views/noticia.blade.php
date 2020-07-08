
@extends('layout')
@section('titulo')
Noticia:
@endsection

@section('contenido')
  <!-- Page Header -->
    
  <header class="masthead" style="background-image: url('{{$post['image']}}')">
    <div class="overlay">
      
    </div>
    
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
          <div class="post-heading">
              {{-- @dd($post) --}}
          <h1>{{$post['title']}}</h1>
            <h2 class="subheading">{{$post['mainCategory']}}</h2>
            <span class="meta">Publicado el:
            <a href="#">{{$post['anteTitle']}}</a>
            {{$post['publicationDate']}}</span>
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
          {!!$post['text']!!}
            </p>
        </div>
      </div>
    </div>
  </article>
  <hr>
  <a href="{{url('/')}}">
  <div class="masthead" style="background-image: url('{{$post['image']}}')">
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
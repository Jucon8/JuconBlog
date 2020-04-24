<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
$posteos=App\Posteo::latest('added_on')->get();

    return view('welcome', compact('posteos'));
});

 Route::get('/about', 'IndexController@about')->name('about');

 Route::get('/posteo', 'IndexController@posteo')->name('posteo');

Route::get('/contacto', 'IndexController@contacto')->name('contacto');

Route::get('post/{id}', 'PostsController@post')->name('post');

Route::resource('noticia', 'NoticiasController');

Route::get('noticia/{id}', 'NoticiasController@show')->name('noticia');

Route::get('admin', function(){
    return view('admin.admin');
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

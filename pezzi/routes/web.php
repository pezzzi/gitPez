<?php

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
Route::get('/peliculas', function() {
  $peliculas = [
 ['title' => 'Avatar', 'poster' => 'images/avatar.jpg' , 'genre' => 'Ciencia Ficción'],
 ['title' => 'Infinity War', 'poster' => 'images/avengers.jpg' , 'genre' => 'Acción'],
 ['title' => 'DeadPool', 'poster' => 'images/deadpool1.jpg' , 'genre' => 'Acción'],
 ['title' => 'Dragon Ball', 'poster' => 'images/dragonball.jpg' , 'genre' => 'Animé'],
 ['title' => 'Dunkerque', 'poster' => 'images/dunkirk.jpg' , 'genre' => 'Belico'],
 ['title' => 'Emoji', 'poster' => 'images/emoji.jpg' , 'genre' => 'Animada'],
 ['title' => 'Inception', 'poster' => 'images/inception1.jpg' , 'genre' => 'Drama'],
 ['title' => 'Moana', 'poster' => 'images/moana.jpg' , 'genre' => 'Animada'],
 ['title' => 'Rogue One', 'poster' => 'images/rogueone.jpg' , 'genre' => 'Acción'],
 ['title' => 'Titanic','poster' => 'images/titanic.jpg' , 'genre' => 'Drama'],
 ];
  foreach ($peliculas as $value) {
    echo $value['title'].'<br>';
  }
});

Route::get('/peliculas/{id}', 'PeliculasController@buscarPeliculaId');

Route::get('/peliculas/buscar/{nombre}', 'PeliculasController@buscarPeliculaNombre');

Route::get('/', function () {
    return view('welcome');
});

Route::get('/newActor', 'ActorsController@index');

Route::post('/newActor', 'ActorsController@save');

Route::get('/actors/search', 'ActorsController@search');

Route::get('/actors/{id}', 'ActorsController@show');

Route::get('/actors', 'ActorsController@index');

Route::get('/genres/{id}', 'GenresController@show');

Route::get('/movie/{id}', 'MoviesController@showGenre');

Route::get('/newMovie', 'GenresController@index');

Route::post('/newMovie', 'MoviesController@save');

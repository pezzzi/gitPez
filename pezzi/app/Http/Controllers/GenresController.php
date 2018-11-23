<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GenresController extends Controller
{
  public function show($id) {
    $genre = \App\Genre::find($id);
    $movies = $genre->movies;

    return view('movies.movies')->with('movies', $movies)->with('genre', $genre);
  }

  public function index() {
    $genres = \App\Genre::all();

    return view('movies.newMovie')->with('genres', $genres);
  }
}

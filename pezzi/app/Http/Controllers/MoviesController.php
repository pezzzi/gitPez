<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MoviesController extends Controller
{
    public function showGenre($id) {
      $movie = \App\Movie::find($id);
      $genre = $movie->genre;
      $actors = $movie->actors;

      return view('movies.movie')->with('movie', $movie)->with('genre', $genre)->with('actors', $actors);
    }
}

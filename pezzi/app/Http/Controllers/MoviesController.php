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

    public function save(Request $request) {

      $this->validate($request, [
        'title' => 'required|alpha_num|max:100|unique',
        'rating' => 'required|between:00.0,10.0|numeric',
        'awards' => 'required|numeric',
      ]);
    }
}

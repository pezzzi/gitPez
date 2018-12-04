<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ActorsController extends Controller
{
    public function index() {
      $actors = \App\Actor::all();
      $movies = \App\Movie::all();

      return view('actors.index')->with('actors', $actors)->with('movies', $movies);
    }

    public function show($id) {
      $actor = \App\Actor::find($id);

      return view('actors.actor')->with('actor', $actor);
    }

    public function search() {
      $actors = \App\Actor::where('first_name', 'LIKE', $_GET['name'].'%')->get();

      return view('actors.index')->with('actors', $actors);
    }

    public function save(Request $request) {

      $this->validate($request, [
        'first_name' => 'required|string|max:100',
        'last_name' => 'required|string|max:100',
        'rating' => 'between:00.0,10.0|numeric',
        'favorite_movie_id' => 'numeric',
      ]);

      $actor = \App\Actor::create([
        'first_name' => $request->input('first_name'),
        'last_name' => $request->input('last_name'),
        'rating' => $request->input('rating'),
      ]);

      return redirect('/newActor');
    }

}

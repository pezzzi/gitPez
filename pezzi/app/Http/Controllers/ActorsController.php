<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ActorsController extends Controller
{
    public function index() {
      $actors = \App\Actor::all();

      return view('actors.index')->with('actors', $actors);
    }

    public function show($id) {
      $actor = \App\Actor::find($id);

      return view('actors.actor')->with('actor', $actor);
    }

    public function search() {
      $actors = \App\Actor::where('first_name', 'LIKE', $_GET['name'].'%')->get();

      return view('actors.index')->with('actors', $actors);
    }

}

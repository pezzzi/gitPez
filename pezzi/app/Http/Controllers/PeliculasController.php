<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PeliculasController extends Controller {
    public function buscarPeliculaId($id) {
      $peliculas = [
        1 => "Toy Story",
        2 => "Buscando a Nemo",
        3 => "Avatar",
        4 => "Star Wars: Episodio V",
        5 => "Up",
        6 => "Mary and Max"
      ];
      return $peliculas[$id] ?? 'No se encontraron resultados';
    }

    public function buscarPeliculaNombre($nombre) {
      $peliculas = [
        1 => "Toy Story",
        2 => "Buscando a Nemo",
        3 => "Avatar",
        4 => "Star Wars: Episodio V",
        5 => "Up",
        6 => "Mary and Max"
      ];
      if (array_search($nombre, $peliculas) == false) {
        echo 'No se encontraron resultados';
      } else {
        return $peliculas[array_search($nombre, $peliculas)];
      }
      // $peli = 'No se encontraron resultados';
      // foreach ($peliculas as $value) {
      //   if ($value == $nombre) {
      //     $peli = $value;
      //     break;
      //   }
      // }
      // return $peli;
    }
}

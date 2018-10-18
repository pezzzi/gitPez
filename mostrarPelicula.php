<?php

include('peliculas.php');

// var_dump($_GET)

$movie = $_GET['title'];
// var_dump($peliculas);
//La forma de abajo funciona pero no es muy práctica
// foreach ($peliculas as $value) {
//   if (in_array($movie, $value, true)) {
//     echo "<img class='poster' src=\"images/". $value['url']."\">
//     <div class='detalle'>
//       <label>". $value['title'] ."(" . $value['releaseDate']  .")</label>
//       <label>". $value['genero'] ."</label>
//       <label>Duración: ". $value['length']/60 ."hrs</label>
//       <label>Rating: ". $value['rating'] ."</label>";
//       break;
//   }
// }

foreach ($peliculas as $value) {
  if ($_GET['title'] == $value['title']) {
    echo "<img class='poster' src=\"images/". $value['url']."\">
    <div class='detalle'>
    <label>". $value['title'] ."(" . $value['releaseDate']  .")</label>
    <label>". $value['genero'] ."</label>
    <label>Duración: ". $value['length']/60 ."hrs</label>
    <label>Rating: ". $value['rating'] ."</label>";
    break;
  }
}

?>

<?php

include('autoload.php');


try {
  $db = new DB ('mysql:host=localhost;dbname=movies_db', 'root', 'root');

  $query = $db->conexion->query('SELECT movies.title, genres.name FROM movies LEFT JOIN genres ON movies.genre_id=genres.id');

  $peliculas = $query->fetchAll(PDO::FETCH_ASSOC);

  var_dump($peliculas);
} catch (PDOException $ex) {
  echo 'El error es:'. $ex->getMessage();
}

?>

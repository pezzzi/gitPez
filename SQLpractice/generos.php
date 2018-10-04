<?php

include('autoload.php');


try {
  $db = new DB ('mysql:host=localhost;dbname=movies_db', 'root', 'root');

  $query = $db->conexion->query('SELECT name FROM genres');

  $genres = $query->fetchAll(PDO::FETCH_ASSOC);
} catch (PDOException $ex) {
  echo 'El error es:'. $ex->getMessage();
}

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <ul>
      <?php

      foreach ($genres as $genero) {
        echo "<li> {$genero['name']} </li>";
      }
     ?>
    </ul>

  </body>
</html>

<?php

try {
  $db = new PDO ('mysql:host=localhost;dbname=movies_db', 'root', 'root', [ PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION ]);

  $query = $db->query('SELECT * FROM series');

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
    <ul action='serie.php' method='get'>
      <?php foreach ($query as $serie) {
        echo "<li><a href='serie.php?serieID={$serie['id']}'>{$serie['title']}<a></li>";
      }
      ?>
    </ul>


  </body>
</html>

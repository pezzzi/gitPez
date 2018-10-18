<?php

try {
  $db = new PDO ('mysql:host=localhost;dbname=movies_db', 'root', 'root', [ PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION ]);

  $query = $db->prepare('SELECT * FROM series WHERE id = ?');

} catch (PDOException $ex) {
  echo 'El error es:'. $ex->getMessage();
}

?>
<!DOCTYPE html>

<?php

if ($_GET) {
  $query->execute( [$_GET['serieID']] );
}

?>

<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
    
    $serie = $query->fetch(PDO::FETCH_ASSOC);
    var_dump($serie);
    ?>
  </body>
</html>

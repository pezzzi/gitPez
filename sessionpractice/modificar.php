<!DOCTYPE html>

<?php

session_start();

if ($_POST) {
  if (isset($_POST['inc'])) {
    $_SESSION['contador']++;
  }

  if (isset($_POST['reset'])) {
    $_SESSION['contador']=0;
  }

  header('Location:mostrar.php');
}else {
  $_SESSION['contador']=0;
}

?>

<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form class="" action="modificar.php" method="post">
      <button type="submit" name="inc">Incrementar</button>
      <button type="submit" name="reset">Reiniciar</button>

    </form>
  </body>
</html>

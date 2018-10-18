<!DOCTYPE html>

<?php

if(isset($_POST['color'])){
  setcookie('bgcolor', $_POST['color']);
}

?>

<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body style="<?php if(isset($_POST['reset'])) { echo 'background-color: initial'; } elseif(isset($_POST['color'])){ echo 'background-color: '.$_POST['color']; }
  elseif(isset($_COOKIE['bgcolor'])) { echo 'background-color: '.$_COOKIE['bgcolor']; }?>">
    <form class="" action="backgroundcolor.php" method="post">
      <input type="color" name="color" value="">
      <button type="submit" name="setcolor">Change BG color</button>
      <button type="submit" name="reset">Set BG color to default</button>
    </form>
  </body>
</html>

<?php
  $title = 'Digital Movies - Tus películas favoritas';
  $h1 = '<h1 class="centrar">Películas del mundo</h1>';
  $logo = 'images/logo.png';
  $h2 = '<h2>Películas Disponibles</h2>';
  $logueado = false;
  $generos = [['nombre' => 'Acción', 'url' => 'accion.html'], ['nombre' => 'Comedia', 'url' => 'comedia.html'], ['nombre' => 'Terror', 'url' => 'terror.html'], ['nombre' => 'Aventura', 'url' => 'aventura.html'], ['nombre' => 'Romance', 'url' => 'romance.html'], ['nombre' => 'Thriller', 'url' => 'thriller.html']];
  include('peliculas.php');
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title><?= $title ?></title>
    <link href="https://fonts.googleapis.com/css?family=Modern+Antiqua" rel="stylesheet">
    <link rel="stylesheet" href="css/styles.css">
  </head>
  <body>

  <div class="contenedor-principal">
    <?php include('header.php'); ?>

    <div class="contenedor-pelis">
      <?php foreach ($peliculas as $value) {
       echo "<div class='items'>
       ";
            $duracion = $value['length'];
            $stars = '<img class="ranking" src="images/star.png">';
            $meGusta = $value['meGusta'];
            $fechaDeEstreno = strtotime("{$value['releaseDate']}");
            $fechaActual = strtotime(date('Y-m-d'));
            $mesesDiferencia = ($fechaActual-$fechaDeEstreno)/(60*60*24*30);
        echo "<img class='poster' src=\"images/". $value['url']."\">
        <div class='detalle'>
          <label>". $value['title'] ."(" . $value['releaseDate']  .")</label>
          <label>". $value['genero'] ."</label>
          <label>Duración: ". $value['length']/60 ."hrs</label>
          <label>Rating: ". $value['rating'] ."</label>
          <label> ". str_repeat('<img class="ranking" src="images/star.png">', 3) .
            "<img class='ranking' src='images/starblack.png'>
          </label>

            <label>";
          echo "<a href='mostrarPelicula.php?title=".$value['title']."'>Ver más</a>";
            if($meGusta) {
               echo "<img class='ranking' src='images/thumb-up-icon.png'>";
             } else {
               echo "<img class='ranking' src='images/thumb-down-icon.png'>";
             };
           echo "</label>";
            if($mesesDiferencia <= 4){
             echo "<img class='estreno' src='images/estreno3.png'>";
           };
           echo "<img class='taquillera' src='images/ticket.png'>
           <img class='tresd' src='images/anteojos-3d.png'>
       </div>
     </div>";
        }
    ?>
    </div>



    <div id="piePagina">
      <ul>
        <li><a href="contacto.html">Contacto</a></li>
        <li><a href="galeria.html">Galeria</a></li>
        <?php if($logueado) {
          echo '<li><a href="perfil.html">Mi Perfil</a></li>';
        } else {
          echo '<li><a href="login.html">Login</a></li>
          <li><a href="perfil.html">Registrate</a></li>';
        } ?>
      </ul>
    </div>


  </div>
  </body>
</html>

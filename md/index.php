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
    <link rel="stylesheet" href="styles.css">
  </head>
  <body>
    <div class="contenedor-principal">
    <?php include('header.php'); ?>
    <main>
        <section>
          <h2>Películas más recientes</h2>
          <?php foreach ($peliculas as $value) {
            if ($value['new'] == true) {
              echo "<article>
                      <img class='poster' src=\"images/". $value['url']."\">";
              echo    "<h3>" . $value['title'] . "</h3>";
              echo    "<a>Ver más</a>";
              echo    "<img class='new' src='images/img-nuevo.png'>";
              echo "</article>";
            }
       }
       ?>
        </section>

        <div class="contenedor-pelis">
          <?php /*foreach ($peliculas as $value) {
           echo "<div class='items'>
            <img class='poster' src=\"images/". $value['url']."\">
            <div class='detalle'>
              <label>". $value['title'] ."</label>
                <label>";
              echo "<a href='mostrarPelicula.php?title=".$value['title']."'>Ver más</a>
           </div>
         </div>";
       }*/
        ?>
        </div>


      </div>
    </main>
  </body>
</html>

<?php
if ($_POST) {
  try {
    $db = new PDO ('mysql:host=localhost;dbname=movies_db', 'root', 'root', [ PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION ]);

    $query = $db->query('SELECT * FROM movies');
    $insert = $db->prepare('INSERT INTO movies (title, rating, awards, length, release_date) VALUES (:title, :rating, :awards, :length, :release_date)');
    $insert->bindValue(':title', $_POST['titulo']);
    $insert->bindValue(':rating', $_POST['rating']);
    $insert->bindValue(':awards', $_POST['premios']);
    $insert->bindValue(':length', $_POST['duracion']);
    $release_date = "{$_POST['releaseYear']}-{$_POST['releaseMonth']}-{$_POST['releaseDay']}";
    $insert->bindValue(':release_date', $release_date);
    $insert->execute();
  } catch (PDOException $ex) {
    echo 'El error es:'. $ex->getMessage();
  }
}

?>

<html>
    <head>
        <title>Agregar Pelicula</title>
    </head>
    <body>
        <form id="agregarPelicula" name="agregarPelicula" method="POST">
            <div>
                <label for="titulo">Titulo</label>
                <input type="text" name="titulo" id="titulo"/>
            </div>
            <div>
                <label for="rating">Rating</label>
                <input type="text" name="rating" id="rating"/>
            </div>
            <div>
                <label for="premios">Premios</label>
                <input type="text" name="premios" id="premios"/>
            </div>
            <div>
                <label for="duracion">Duracion</label>
                <input type="text" name="duracion" id="duracion"/>
            </div>
            <div>
                <label>Fecha de Estreno</label>
                <select name='releaseDay'>
                    <option value="">Dia</option>
                    <?php for ($i=1; $i < 32; $i++) { ?>
                        <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
                    <?php } ?>
                </select>
                <select name="releaseMonth">
                    <option value="">Mes</option>
                    <?php for ($i=1; $i < 13; $i++) { ?>
                        <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
                    <?php } ?>
                </select>
                <select name="releaseYear">
                    <option value="">Anio</option>
                    <?php for ($i=1900; $i < 2017; $i++) { ?>
                        <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
                    <?php } ?>
                </select>
            </div>
            <input type="submit" value="Agregar Pelicula" name="submit"/>
        </form>
    </body>
</html>

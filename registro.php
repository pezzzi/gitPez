<!DOCTYPE html>
<?php

$errorMail = "";
$errorNombre = "";
$errorEdad= "";
$errorGender = "";
$errorCountry = "";

if ($_POST) {

  if ($_FILES['userPhoto']['error'] === 0) {
    $extension = pathinfo($_FILES['userPhoto'], PATHINFO_EXTENSION);
    if ($extension == 'jpg' || $extension = 'png') {
      move_uploaded_file($_FILES['userPhoto']['tmp_name'], "avatars/{$_POST['userMail']}.{$extension}");
    }
  }

  if (!filter_var( $_POST['userMail'] , FILTER_VALIDATE_EMAIL )) {
    $errorMail = 'El Correo es inválido';
  }

  if (!preg_match("/^[a-zA-Z'-]+$/", $_POST['userName'])) {
    $errorNombre = 'El nombre debe contener únicamente caractéres alfanuméricos';
  }

  if (!is_numeric($_POST['userAge'])) {
    $errorEdad = 'La edad debe ser un número';
  }

  if (!isset($_POST['userGender'])) {
    $errorGender = 'Debe seleccionar un género';
  }

  if ($_POST['userCountry'] == "") {
    $errorCountry = 'Debe seleccionar un país de nacionalidad';
  }


}

?>
<html>
<head>
  <meta charset="utf-8">
  <link rel="stylesheet" href="css/styles.css">
  <link rel="stylesheet" href="css/registro.css">
  <title>Formularios</title>
  <style>
      .error{
        color:red;
        font-size: 10px;
      }
  </style>
</head>
<body>

  <div class="contenedor-principal">

    <p class="centrar">
      <a href="index.html">
        <img id="logo" src="images/logo.png" alt="logo Digital Movies">
      </a>
    </p>

    <h1 class="centrar">Registrate en Digital Movies</h1>
    <form action="registro.php" method="post" enctype="multipart/form-datafotos">

      <label class="etiqueta" for="nombreDelUsuario">Nombre:</label>
        <input type="text" id="nombreDelUsuario" placeholder="Ingrese su nombre" required name="userName" value="<?php echo $_POST['userName']??''; ?>"> <!-- <span> *</span>  -->
        <span class="error">
          <?php echo $errorNombre; ?>
        </span>


      <br><br>

      <label class="etiqueta" for="nombreDelUsuario">Edad:</label>
        <input  id="nombreDelUsuario" type="number" required name="userAge" min="18">
        <span class="error">
          <?php echo $errorEdad; ?>
        </span>

      <br><br>

      <label class="etiqueta">Teléfono de contacto:</label>
        <input type="tel" placeholder="011-111-1111" required name="userPhone">


      <br><br>

      <label class="etiqueta">Email:</label>
        <input type="email" required name="userMail"> <!-- <span> *</span> -->
        <span class="error">
          <?php echo $errorMail; ?>
        </span>


      <br><br>

      <label class="etiqueta" for="">Sitio web:</label>
        <input type="text" required name="userSite">


      <br><br>

      <label class="etiqueta" for="">Contraseña:</label>
        <input type="password" name="userPass" required maxlength="8"> <!-- <span> *</span> -->


      <br><br>

      <label class="etiqueta" for="avatar">Subi tu Avatar:</label>
        <input type="file" name="userPhoto">


      <br><br>

      <label class="etiqueta" required>Género</label>
        <label><input type="radio" name="userGender" value="m">Masculino</label>
        <label><input type="radio" name="userGender" value="f">Femenino</label>
        <span class="error">
          <?php echo $errorGender; ?>
        </span>


      <br><br>

      <label class="etiqueta" required>Estado Civil:</label>
        <label><input type="radio" name="userCivilStatus" value="soltero">Soltero</label>
        <label><input type="radio" name="userCivilStatus" value="casado">Casado</label>
        <label><input type="radio" name="userCivilStatus" value="viudo">Viudo</label>


      <br><br>

      <label class="etiqueta" for="" required>Pasatiempos</label>
        <label><input type="checkbox" name="userHobbies[]" value="pasear">Pasear</label>
        <label><input type="checkbox" name="userHobbies[]" value="tennis">Jugar al Tennis</label>
        <label><input type="checkbox" name="userHobbies[]" value="mate">Tomar mate</label>


      <br><br>

      <label class="etiqueta">Comentarios:</label>
        <textarea name="userComments" placeholder="Estoy comentando"></textarea>


      <br><br>

      <label class="etiqueta">Pais de Origen</label>
      <select name="userCountry">
        <option value="">Seleccione un Pais</option>
        <option value="Ar">Argentina</option>
        <option value="Br">Brasil</option>
        <option value="Bo">Bolivia</option>
        <option value="Co">Colombia</option>
        <option value="Ch">Chile</option>
        <option value="Pe">Peru</option>
      </select>
      <span class="error">
        <?php echo $errorCountry; ?>
      </span>


      <br><br>
      <div class="centrar">
        <button type="reset">Borrar</button>
        <button type="submit">Registrate</button>
      </div>


    </form>
  </div>
</body>
</html>

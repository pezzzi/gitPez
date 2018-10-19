<?php
include('auth.php');
include('bd.php');
include('usuario.php');

$juanca = new Usuario('Juan carlos', 'juanca@dh.com', 'juanca', 'juancagol1' );
$base = new BD();
$auth = new Auth();

$insert = $base->conexion->prepare('INSERT INTO usuarios (nombre, email, user, pass) VALUES (:nombre, :email, :user, :pass)');
$insert->bindValue(':nombre', 'Juan carlos');
$insert->bindValue(':user', 'juanca');
$insert->bindValue(':pass', 'juancagol1');
$insert->bindValue(':email', 'juaca@dh.com');
// $insert->execute();

$auth->loguear('juanca', 'juancagol1');



?>

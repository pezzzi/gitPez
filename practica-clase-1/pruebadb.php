<?php

$dsn = 'mysql:host=localhost;dbname=movies_db;port=3306';
$user = 'root';
$pass = 'root';

try{

    $conex = new PDO($dsn, $user, $pass);

    var_dump($conex);

}catch( PDOException $ex ){
    // echo 'Error con la BD, contacta con el administrador del sistema';
    echo 'El error es:'. $ex->getMessage();
}







?>

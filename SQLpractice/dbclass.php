<?php

class DB
{

  public $dsn;
  public $user;
  public $pass;
  public $conexion;

  function __construct($dsn, $user, $pass)
  {
    $this->conexion = new PDO ($dsn, $user, $pass, [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);
  }



}




 ?>

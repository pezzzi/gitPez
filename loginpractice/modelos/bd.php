<?php

class BD {

  private $dsn = 'mysql:host=localhost;dbname=test';
  private $userBD = 'root';
  private $passBD = 'root';
  private $conexion;


  public function __construct(){
    $this->conexion = new PDO ($this->dsn, $this->userBD, $this->passBD, [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);
  }

  public function consultaUsuario($user, $pass){

    $query=$this->conexion->prepare('SELECT * FROM usuarios WHERE user = ? AND pass = ?');
		$query->bindParam(1, $user);
		$query->bindParam(2, $pass);
		$query->execute();


    $resultados = $query->fetchAll(PDO::FETCH_ASSOC);
    var_dump($resultados);


	}



}



?>

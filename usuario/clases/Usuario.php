<?php

class Usuario{

private $id;
private $nombre;
private $email;
private $password;
private $edad;

public function __construct($id = null, $nombre, $email, $password,$edad){

if ($id === NULL){
//se esta registrando
$this->password = password_hash($password, PASSWORD_DEFAULT)
}else{
  $this->id = $id;
}
$this->nombre = $nombre;
$this->setEmail ($email);
$this->password = $password;
$this->setEdad ($edad);

}

public function getNombre(){
  return $this->nombre;
}

public function getEmail(){
  return $this->email;
}

public function getEdad(){
  return $this->edad;
}

public function getPassword(){
  return $this->password;
}

public function setNombre($nombre){
  $this->nombre = $nombre;
}

public function setEmail($email){
  $this->email = $email;
}

public function setEdad($edad){
  $this->edad = $edad;
}

public function setPassword ($password){
  $this->password = $password;
}

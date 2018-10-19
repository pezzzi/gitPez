<?php

class Usuario {

  private $id;
  private $nombre;
  private $email;
  private $usuario;
  private $password;

  public function __construct($name, $mail, $user, $pass){
    $this->nombre = $name;
    $this->email = $mail;
    $this->usuario = $user;
    $this->password = $pass;
  }

  public function setNombre($name){
    $this->nombre = $name;
  }

  public function getName(){
    $this->nombre;
  }

  public function getEmail(){
    echo $this->email;
  }

  public function getUser(){
    echo $this->usuario;
  }

  public function getPass(){
    echo $this->password;
  }

}





?>

<?php

class Auth {

  public $bd;


  public function __contstruct(){
    $this->bd = new BD();
  }

  public function loguear($usu, $pass){
    $array = $this->bd->consultaUsuario($usu, $pass);

    if(!empty($array)){
      var_dump($array);
    }
  }
}

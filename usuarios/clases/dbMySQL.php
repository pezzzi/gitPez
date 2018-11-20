<?php

require_once("db.php");
require_once("usuario.php");

class DBMySQL extends DB {
	protected $conn;

	public function __construct() {
		$dsn = 'mysql:host=localhost;dbname=reg-login;
		charset=utf8mb4;port=3306';
		$user ="root";
		$pass = "";

		try {
		  $this->conn = new PDO($dsn, $user, $pass);
		} catch (Exception $e) {
		  echo "La conexion a la base de datos falló: " . $e->getMessage();
		}
	}

	function guardarUsuario(Usuario $usuario) {
		$query = $this->conn->prepare("Insert into usuarios values(default, :email, :password,:edad,:pais,:username)");

		$query->bindValue(":email", $usuario->getEmail());
		$query->bindValue(":password", $usuario->getPassword());
		$query->bindValue(":edad", $usuario->getEdad());
		$query->bindValue(":pais", $usuario->getPais());
		$query->bindValue(":username", $usuario->getUsername());
		

		$query->execute();

		$id = $this->conn->lastInsertId();
		$usuario->setId($id);

		

		return $usuario;

	}

	function traerTodos() {
		$query = $this->conn->prepare("Select * from usuarios");
		$query->execute();

		$usuariosFormatoArray = $query->fetchAll();

		$usuariosFormatoClase = [];

		foreach ($usuariosFormatoArray as $usuario) {
			$usuariosFormatoClase[] = new Usuario($usuario["email"], $usuario["password"], $usuario["edad"], $usuario["username"], $usuario["pais"], $usuario["id"]);
		}

		return $usuariosFormatoClase;
	}

	function traerPorMail($email) {
		$query = $this->conn->prepare("Select * from usuarios where email = :email");
		$query->bindValue(":email", $email);

		$query->execute();

		$usuarioFormatoArray = $query->fetch();

		if ($usuarioFormatoArray) {
			$usuario = new Usuario($usuarioFormatoArray["email"], $usuarioFormatoArray["password"], $usuarioFormatoArray["edad"], $usuarioFormatoArray["username"], $usuarioFormatoArray["pais"], $usuarioFormatoArray["id"]);
			return $usuario;
		} else {
			return NULL;
		}
	}
}

?>
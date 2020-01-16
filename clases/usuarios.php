<?php
require_once 'conexion.php';

class Usuario {
  private $id_usuario;
  private $nombre_usuario;
  private $email;
  private $contrasenia;
  private $foto;
  private $dir_calle;
  private $nombre;
  private $apellido;
  private $fecha_nacimiento;
  private $id_barrio;

  public function getId_usuario() {
    return $this->$id_usuario;
  }
  public function getNombre_usuario() {
    return $this->nombre_usuario;
  }
  public function getEmail() {
    return $this->email;
  }
  public function setNombre_usuario() {
    $this->nombre_usuario = $nombre_usuario;
   }
  public function setEmail() {
    $this->email = $email;
  }
  public function setContrasenia(){
    $this->contrasenia = $contrasenia;
  }
  public function __construct() {
    // $this->$id_usuario = NULL;
    $this->nombre_usuario = NULL;
    $this->email = NULL;
    $this->contrasenia = NULL;
  }

  public function nuevoUsuario($nombre_usuario, $email, $contrasenia){
    global $pdo;
    $query = 'INSERT INTO usuarios (nombre_usuario, email, contrasenia) VALUES (:nombre_usuario, :email, :contrasenia)';
    $hash = password_hash($contrasenia, PASSWORD_DEFAULT);
    $values = array(':nombre_usuario' => $nombre_usuario, ':email' => $email, ':contrasenia' => $hash);

    try{
      $res = $pdo->prepare($query);
		  $res->execute($values);
	  }
    catch (PDOException $e){
      throw new Exception('Error mientras se registraba el usuario en la base de datos');
	  }
    return $pdo->lastInsertId();
  }

  public function existeUsuario($nombre_usuario){
    global $pdo;
    $query = 'SELECT * FROM usuarios WHERE (nombre_usuario = :nombre_usuario)';
    $values = array(':nombre_usuario' => $nombre_usuario);

    try{
      $res = $pdo->prepare($query);
		  $res->execute($values);
	  }
    catch (PDOException $e){
      throw new Exception('Error mientras se buscaba el usuario en la base de datos');
	  }

    $fila = $res->fetch(PDO::FETCH_ASSOC);

    if (is_array($fila))
  	{
  		return true;
  	}

  	return false;
  }
}

 ?>

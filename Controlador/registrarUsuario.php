<?php
include_once('../Modelo/Db.php');
include "../Modelo/Usuario.php";

$correo = $_REQUEST['correo'];
$usuario = $_REQUEST['usuario'];
$pass = $_REQUEST['pass'];
$nombre = $_REQUEST['nombre'];
$fecha = $_REQUEST['fechaNacimiento'];

$fechaCorregida=explode("-",$fecha);
$fecha=$fechaCorregida[2]."-".$fechaCorregida[1]."-".$fechaCorregida[0];

Usuario::registrarUsuario($correo, $usuario, $pass, $nombre, $fecha);

header('Location: ../index.php');

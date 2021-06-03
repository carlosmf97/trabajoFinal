<?php
session_start();
include '../Modelo/Usuario.php';

$correo = $_REQUEST['correo'];
$id = $_SESSION['id'];
$nuevoUsuario = $_REQUEST['usuario'];
$nuevoNombre = $_REQUEST['nombre'];
$nuevaFecha = $_REQUEST['fechaNacimiento'];

$_SESSION['usuario'] = $nuevoUsuario;

$fechaCorregida=explode("-",$nuevaFecha);
$nuevaFecha=$fechaCorregida[2]."-".$fechaCorregida[1]."-".$fechaCorregida[0];

Usuario::editarPerfil($id, $correo, $nuevoUsuario, $nuevoNombre, $nuevaFecha);

header("Location: ../Controlador/cargarPerfil.php");





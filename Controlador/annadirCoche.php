<?php
session_start();
include_once('../Modelo/Db.php');
include_once('../Modelo/Usuario.php');

$usuario = $_SESSION['id'];
$marca = $_REQUEST['marca'];
$modelo = $_REQUEST['modelo'];
$caballos = $_REQUEST['potencia'];
$descripcion = $_REQUEST['descripcion'];
$precio = $_REQUEST['precio'];
$pathImagen = $_FILES['imagen']['name'];

$directorio = "../imagenesSubidas/";
move_uploaded_file($_FILES['imagen']['tmp_name'],$directorio.$pathImagen);

Usuario::annadirCoche($usuario, $marca, $modelo, $caballos, $descripcion, $pathImagen, $precio);

header('Location: ../Controlador/cargarPerfil.php');



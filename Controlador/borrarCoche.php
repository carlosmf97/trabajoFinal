<?php
session_start();
include '../Modelo/Usuario.php';

$idCoche = $_REQUEST['idCoche'];
$idUsuario = $_SESSION['id'];

Usuario::borrarCoche($idCoche);
Usuario::quitarFavoritos($idUsuario, $idCoche);

header("Location: ../Controlador/cargarPerfil.php");

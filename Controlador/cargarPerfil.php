<?php 
session_start();
include '../Modelo/Usuario.php';
$datos = Usuario::getUsuario($_SESSION['usuario']);
$coches = Usuario::getTodosCoches($_SESSION['id']);

//var_dump($coches);die;

include '../Vista/perfil.php';

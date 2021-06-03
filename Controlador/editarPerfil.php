<?php
session_start();
include '../Modelo/Usuario.php';
$datos = Usuario::getUsuario($_SESSION['usuario']);

include '../Vista/editarPerfil.php';



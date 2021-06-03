<?php 
session_start();
include '../Modelo/Usuario.php';
$usuarios = Usuario::getDatosUsuario($_REQUEST['idCoche']);
echo json_encode($usuarios);


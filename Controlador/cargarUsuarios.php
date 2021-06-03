<?php 
session_start();
include '../Modelo/Usuario.php';
$usuarios = Usuario::getTodosUsuarios();


include '../Vista/usuarios.php';

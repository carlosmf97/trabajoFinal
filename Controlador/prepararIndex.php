<?php
session_start();
include '../Modelo/Usuario.php';

$datos = Usuario::getUsuario($_SESSION['usuario']);
$coches = Usuario::getUltimosCincoCoches();

include '../Vista/index.php';



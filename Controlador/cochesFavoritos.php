<?php
session_start();
include '../Modelo/Db.php';
include '../Modelo/Usuario.php';

$coches = Usuario::getDatosFavoritos($_SESSION['id']);

//var_dump($coches[1][0]);die;

include '../Vista/favoritos.php';



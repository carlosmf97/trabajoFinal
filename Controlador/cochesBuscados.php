<?php
session_start();
include '../Modelo/Db.php';
include '../Modelo/Usuario.php';

$datos = Usuario::getUsuario($_SESSION['usuario']);
$coches = [];
if(isset($_REQUEST['string'])){
    $string = $_REQUEST['string'];
    $coches = Db::buscarCoches($string);
}else{
    $coches = [];
}



include '../Vista/cochesBuscados.php';



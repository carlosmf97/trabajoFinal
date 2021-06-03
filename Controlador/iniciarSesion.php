<?php
session_start();
include_once('../Modelo/Db.php');
include_once('../Modelo/Usuario.php');

if(isset($_REQUEST['botonRecuerda'])){
    setcookie("sesionIniciada", $_REQUEST['usuario'], time()+(3600*7)); 
}

if(Usuario::iniciarSesion($_REQUEST['usuario'], $_REQUEST['pass'])){
    $_SESSION['usuario'] = $_REQUEST['usuario'];
    $_SESSION['id'] = Usuario::getIdUsuario($_REQUEST['usuario'])['id'];
    header('Location: ../Controlador/prepararIndex.php');
}else{
    header('Location: ../index.php');
}

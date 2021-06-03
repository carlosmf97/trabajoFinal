<?php
session_start();
include '../Modelo/Usuario.php';

$idCoche = $_REQUEST['idCoche'];

Usuario::borrarCoche($idCoche);

if(isset($_SESSION['tipo'])){
    if($_SESSION['tipo']=="1"){
        header("Location: ../Controlador/cargarPerfil.php");
    }else{
        header("Location: ../Controlador/cargarUsuarios.php");
    }
}
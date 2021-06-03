<?php
session_start();
include '../Modelo/Usuario.php';
$coches = [];
$idUsuario = $_REQUEST['idUsuario'];

if(!empty(Usuario::getTodosCoches($idUsuario))){
    echo json_encode(Usuario::getTodosCoches($idUsuario));
}else{
    echo 0;
}


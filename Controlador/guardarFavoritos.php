<?php
session_start();
include '../Modelo/Usuario.php';

$idUsuario = $_REQUEST['idUsuario'];
$idCoche = strval($_REQUEST['idCoche']);

$favoritos = Usuario::getFavoritos($idUsuario);

$cocheAsoc = ["idCoche"=>$idCoche];


if(in_array($cocheAsoc, $favoritos)){
    echo 'Ya está en favoritos';
}else{
    $ídCoche = intval($idCoche);
    Usuario::guardarFavoritos($idUsuario, $idCoche);
    echo 'Se ha añadido correctamente a favoritos!!';
}









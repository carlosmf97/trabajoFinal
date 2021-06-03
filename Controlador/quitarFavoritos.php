<?php
session_start();
include '../Modelo/Usuario.php';

$idUsuario = $_REQUEST['idUsuario'];
$idCoche = strval($_REQUEST['idCoche']);

echo Usuario::quitarFavoritos($idUsuario, $idCoche);


echo 'Se ha eliminado correctamente de favoritos.';









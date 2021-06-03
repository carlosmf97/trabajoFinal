<?php
session_start();
include '../Modelo/Admin.php';

$idUsuario = $_REQUEST['idUsuario'];

Admin::borrarUsuario($idUsuario);

header("Location: ../Controlador/cargarUsuarios.php");
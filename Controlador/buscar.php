<?php
include '../Modelo/Db.php';

$string = $_REQUEST['string'];

$coches = Db::buscarCoches($string);

$respuesta = [];

for($i=0; $i<sizeof($coches);$i++){
    array_push($respuesta,"<a class='dropdown-item' style='position:absolute; background:white;top:".(40+32*$i)."px' data-value='".$coches[$i]['id']."' href='#'>".$coches[$i]['modelo']."</a>");
}  

echo json_encode($respuesta);



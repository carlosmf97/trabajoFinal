<?php
class Db{
    public static function conexion(){
        $conexion=new mysqli("localhost", "root", "", "tareas_carlos");
        return $conexion;
    }

    public static function buscarCoches($string){
        $conexion = Db::conexion();
        $sql = "SELECT * FROM coches WHERE modelo LIKE '".$string."%'";
        $consulta = $conexion->query($sql);
        $coches = [];

        while($fila = $consulta->fetch_assoc()) {
            $coches[] = $fila;
        }

        return $coches;
    }

}

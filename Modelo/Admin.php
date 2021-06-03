<?php
include_once "Db.php";
class Admin{
    private $usuario;
    private $contraseña;

    public function __construct($usuario, $contraseña){
        $this->usuario=$usuario;
        $this->contraseña=$contraseña;
    }

    public function banearUsuario($idUsuario){
        return;
    }

    public function borrarUsuario($id){
        $conexion = Db::conexion();
        
        $sql = "DELETE FROM `usuarios-coches` WHERE idUsuario = $id";
        $consulta = $conexion->query($sql);

        $sql = "DELETE FROM usuarios WHERE id = $id";
        $consulta2 = $conexion->query($sql);

        return;
    }

}
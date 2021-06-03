<?php
include_once "Db.php";
class Usuario{
    private $usuario;
    private $contraseña;
    private $nombre;
    private $fechaNacimiento;
    private $tipo;

    public function __construct($usuario, $contraseña, $nombre, $fechaNacimiento){
        $this->usuario=$usuario;
        $this->contraseña=$contraseña;
        $this->nombre=$nombre;
        $this->fechaNacimiento=$fechaNacimiento;
        $this->$tipo=1;
    }
    //FUNCIONES DE LOS USUARIOS

    public static function iniciarSesion($usuario, $contraseña){
        $conexion = Db::conexion();
        $consulta = $conexion->query('SELECT * FROM usuarios WHERE usuario="'.$usuario.'"');

        $filas=mysqli_num_rows($consulta);

        $usuarioEncontrado;

        while($newUser = $consulta->fetch_object()){
            $usuarioEncontrado = json_decode(json_encode($newUser), true);
        }

       if ($filas == 0) {
            //Usuario mal introducido
            return false;
        } else {
            if ($contraseña == $usuarioEncontrado['contraseña']) {
                
                if($usuarioEncontrado['tipo']=='0'){
                    $_SESSION['tipo']="0";
                    return true;
                }else{
                    $_SESSION['tipo']="1";
                    return true;
                }
            } else {
                echo '<p class="error">Has introducido mal la contraseña</p>';
            }
        }
    }

    public function getIdUsuario($usuario){
        $conexion = Db::conexion();
        $sql = 'SELECT id FROM usuarios WHERE usuario="'.$usuario.'"';
        $id = json_decode(json_encode($conexion->query($sql)->fetch_object()), true);
        return $id;
    }

    public function getUsuario($usuario){
        $conexion = Db::conexion();
        $sql = 'SELECT * FROM usuarios WHERE usuario="'.$usuario.'"';
        $user = json_decode(json_encode($conexion->query($sql)->fetch_object()), true);
        return $user;
    }

    public function getTodosUsuarios(){
        $conexion = Db::conexion();
        $sql= "SELECT * FROM usuarios";
        $consulta = $conexion->query($sql);
        $usuarios = [];

        while($fila = $consulta->fetch_assoc()) {
            $usuarios[] = $fila;
        }

        return $usuarios;
    }

    public function registrarUsuario($correo, $usuario,$contraseña,$nombre,$fechaNacimiento){
        $conexion = Db::conexion();
        $sql = 'INSERT INTO `usuarios`(`id`, `correo`, `usuario`, `contraseña`, `nombre`, `fechaNacimiento`, `tipo`) VALUES (null, "'.$correo.'", "'.$usuario.'", "'.$contraseña.'", "'.$nombre.'", "'.$fechaNacimiento.'", 1)';
        $conexion->query($sql);
    }

    public function editarPerfil($id, $correo, $usuario, $nombre, $fechaNacimiento){
        $conexion = Db::conexion();
        $sql = "UPDATE `usuarios` SET `usuario`='".$usuario."',`correo`='".$correo."',`nombre`='".$nombre."',`fechaNacimiento`='".$fechaNacimiento."' WHERE id = $id";
        $conexion->query($sql);
    }

    //FUNCIONES CON COCHES

    public function annadirCoche($idUsuario, $marca, $modelo, $caballos, $descripcion, $pathImage, $precio){
        $conexion = Db::conexion();
        $sql = 'INSERT INTO `coches`(`id`, `marca`, `modelo`, `caballos`, `descripcion`, `precio`, `pathImage`, `fecha-registro`) VALUES (null,"'.$marca.'","'.$modelo.'","'.$caballos.'","'.$descripcion.'","'.$precio.'","'.$pathImage.'",null)';
        $conexion->query($sql);
        
        $sql = "SELECT id FROM coches WHERE modelo = '".$modelo."'";
        $idCoche = json_decode(json_encode($conexion->query($sql)->fetch_object()), true)['id'];
        $sql = "INSERT INTO `usuarios-coches`(`idUsuario`, `idCoche`) VALUES ('".$idUsuario."','".$idCoche."')";
        $conexion->query($sql);
    }

    public function getUltimosCincoCoches(){
        $conexion = Db::conexion();
        $sql= "SELECT * FROM (SELECT * FROM coches ORDER BY id DESC)Var1 ORDER BY id ASC";
        $consulta = $conexion->query($sql);
        //var_dump($sql);die;
        $coches = [];

        while($fila = $consulta->fetch_assoc()) {
            $coches[] = $fila;
        }

        return $coches;

    }

    public function getTodosCoches($idUsuario){
        $conexion = Db::conexion();
        $sql = "SELECT idCoche FROM `usuarios-coches` WHERE idUsuario = $idUsuario";
        $consulta = $conexion->query($sql);
        $resultado = [];
        
        while($fila = $consulta->fetch_assoc()) {
            $resultado[] = $fila;            
        }
        
        $listaCoches = [];


        for($i = 0; $i<sizeof($resultado); $i++){
            $listaCoches[$i] = Usuario::encontrarCoche($resultado[$i]['idCoche']);  
        }
        return $listaCoches;
    }

    public function encontrarCoche($id){
        $conexion = Db::conexion();
        $sql = "SELECT * FROM coches WHERE id = $id";
        $consulta = $conexion->query($sql);
        $coche = [];

        while($fila = $consulta->fetch_assoc()) {
            $coche[] = $fila;
        }

        return $coche;
    }

    public function editarCoche($idcoche){
        return;
    }

    public function borrarCoche($id){
        $conexion = Db::conexion();
        
        $sql = "DELETE FROM `usuarios-coches` WHERE idCoche = $id";
        $consulta = $conexion->query($sql);

        $sql = "DELETE FROM coches WHERE id = $id";
        $consulta2 = $conexion->query($sql);

        return;
    }

    //FUNCIONES EXTRA   

    public function getDatosUsuario($idCoche){
        $conexion = Db::conexion();
        $sql = "SELECT idUsuario FROM `usuarios-coches` WHERE idCoche = $idCoche";
        $consulta = $conexion->query($sql);
        $usuario = [];
    
        while($fila = $consulta->fetch_assoc()) {
            $usuario[] = $fila;
        }
        $idUsuario = $usuario[0]['idUsuario'];
        $sql = "SELECT correo FROM usuarios WHERE id=$idUsuario";
        $consulta = $conexion->query($sql);
        while($fila = $consulta->fetch_assoc()) {
            $usuario[] = $fila;
        }

        return $usuario;
    }

    public function getFavoritos($idUsuario){
        $conexion = Db::conexion();
        $sql = "SELECT idCoche FROM favoritos WHERE idUsuario = $idUsuario";
        $consulta = $conexion->query($sql);
        $favoritos = [];

        while($fila = $consulta->fetch_assoc()) {
            $favoritos[] = $fila;
        }

        return $favoritos;
    }

    public function getDatosFavoritos($idUsuario){
        $conexion = Db::conexion();
        $sql = "SELECT idCoche FROM `favoritos` WHERE idUsuario = $idUsuario";
        $consulta = $conexion->query($sql);
        $resultado = [];
        
        while($fila = $consulta->fetch_assoc()) {
            $resultado[] = $fila;            
        }
        
        $listaCoches = [];


        for($i = 0; $i<sizeof($resultado); $i++){
            $listaCoches[$i] = Usuario::encontrarCoche($resultado[$i]['idCoche']);  
        }
        return $listaCoches;
    }

    public function guardarFavoritos($idUsuario, $idCoche){
        $conexion = Db::conexion();        
        $sql = "INSERT INTO `favoritos`(`idUsuario`, `idCoche`) VALUES ('".$idUsuario."','".$idCoche."')";
        $conexion->query($sql);
    }

    public function quitarFavoritos($idUsuario, $idCoche){
        $conexion = Db::conexion();
        $sql = "DELETE FROM `favoritos` WHERE idCoche = $idCoche AND idUsuario = $idUsuario";
        $consulta = $conexion->query($sql);
    }
    
}
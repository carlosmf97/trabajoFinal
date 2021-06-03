<!DOCTYPE html>
<html>

<head>
</head>

<body>
    <?php
        if(isset($_COOKIE['sesionIniciada'])){
            session_start();
            $_SESSION['usuario']=$_COOKIE['sesionIniciada'];
        }
    
        if(!isset($_SESSION)){ 
            session_start(); 
        }
        if($_SESSION['usuario']){
            header('Location: Controlador/prepararIndex.php'); 
        }else{
            header('Location: Vista/login.php'); 
        }
    ?>
</body>

</html>
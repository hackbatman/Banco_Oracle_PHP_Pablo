<?php

$user = $_POST['user'];
$pass = $_POST['pass'];
require_once('conexion.php');
$conn = new Conexion();
$conexion = $conn->Conectar();  
try {
    if($user!=null and $pass!=null){
        $conexion->beginTransaction(); 
        $stmt=$conexion->prepare("select nombrecomp from usuario
        where usuario=? and contrasena=? and estado=1");
        
        $stmt->bindParam(1,$user);
        $stmt->bindParam(2,$pass);
        $stmt->execute();
        $cursor=$stmt->fetch();
        $nombreuser = $cursor['NOMBRECOMP'];
        if($nombreuser !=null){
            session_start();
            $_SESSION["Usuario"] = $nombreuser;
            $_SESSION["ingreso"] = true;

            header("location:index.php"); 
            
        }
        else{
           
            header('location: login.php');
        }

    }
} catch (Exception $ex) {
   echo "error".$ex->getMessage();
}

      

?>
<?php
//require_once('menu.php');
require_once('conexion.php');

$conn = new Conexion();
$conexion = $conn->Conectar();

      //print_r($_POST);
     $cuenta = $_POST['cuenta'];
     $monto = $_POST['monto'];
      

      $query = "insert into deposito(IDCUENTA,MONTO)
      values('$cuenta','$monto')";
      
      $comando = $conexion->prepare($query);
      
      $comando->execute();
      echo $query;
      header('location: vercuenta.php');

    
  



?>
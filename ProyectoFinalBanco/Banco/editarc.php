<?php
require_once('menu.php');
require_once('conexion.php');

$conn = new Conexion();
$conexion = $conn->Conectar();

      $id = $_POST['id'];
      $nombre = $_POST['nombre'];
      $dpi = $_POST['dpi'];
      $tel = $_POST['telefono'];
      $email = $_POST['email'];

      $query = "UPDATE clientes set NOMBRE='".$nombre."', DPI='".$dpi."', TELEFONO='".$tel."' , EMAIL='".$email."' where id=".$id;
      
      $comando = $conexion->prepare($query);
      
      $comando->execute();
      //echo $query;
      header('location: banco_Cliente.php');

    
  



?>
<?php
require_once('menu.php');
require_once('conexion.php');
$conn = new Conexion();
$conexion = $conn->Conectar();

$ID = $_GET['id'];

echo "el $ID ";
$query ="DELETE FROM clientes WHERE id='".$ID."'";
$comando = $conexion->prepare($query);
$comando->execute();
header('location: banco_Cliente.php');
//echo "Eliminado correctmente";

    
  



?>
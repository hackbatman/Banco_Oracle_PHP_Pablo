<?php
require_once('menu.php');
require_once('conexion.php');

$query = "select *from clientes";

$conn = new Conexion();
$conexion = $conn->Conectar();


$comando = $conexion->prepare($query);
$comando->execute();

$cursor = $comando->fetchAll();
//var_dump($cursor);

?> 

<!doctype html>
 <html lang="en">
  <head>
   <style type="text/css">
     h1{
     color: white;
     text-transform: uppercase;
     text-align: center;
      }
     </style>

     <!-- Required meta tags -->
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1">

     <!-- Bootstrap CSS -->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

     <title>Banco-Clientes</title>
  </head>
   <body>
      <div style= "width:60%; margin-left:auto; margin-right:auto">
      <h1>REGISTRO DE CLIENTES</h1>
      <br>
      <a href="NuevoCliente.php"><button type="button" class="btn btn-success">Agregar Nuevo Cliente</button></a>
      <br>
      <br>
      <table class="table table-dark table-striped">
      
        <thead>
           <tr>
              <th scope="col">ID</th>
              <th scope="col">NOMBRE</th>
              <th scope="col">DPI</th>
              <th scope="col">TELEFONO</th>
              <th scope="col">EMAIL</th>
              <th scope="col"> </th>
              <th scope="col"> </th>
      
           </tr>
        </thead>
     <tbody>

      <?php foreach ($cursor as $cuenta):?>
         <tr>
           <th scope="row"><?php echo $cuenta ['ID'] ?></th>
           <td><?php echo $cuenta ['NOMBRE'] ?></td>
           <td><?php echo $cuenta ['DPI'] ?></td>
           <td><?php echo $cuenta ['TELEFONO'] ?></td>
           <td><?php echo $cuenta ['EMAIL'] ?></td>
           <td> <a href="EditarCliente.php?id=<?php echo $cuenta ['ID'] ?>"> <button type="button" class="btn btn-success">Editar</button> </a></th>
           <td> <a href="Eliminar.php?id=<?php echo $cuenta ['ID'] ?>"> <button type="button" class="btn btn-danger">Eliminar</button> </a></th>
          

       </tr>
       <?php endforeach ?>

       </tr>
     </tbody>
      </table>
      



     <!-- Optional JavaScript; choose one of the two! -->

     <!-- Option 1: Bootstrap Bundle with Popper -->
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

     <!-- Option 2: Separate Popper and Bootstrap JS -->
     <!--
     <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
     -->
    </body>
</html>

<?php

include_once('conexion.php');
$id =$_GET["id"];
$query ="select *from clientes where id=".$id;

$con=new Conexion();
$conexion=$con->Conectar();

$comando=$conexion->prepare($query);
$comando->execute();
$cliente = $comando->fetch();

?>


<!doctype html>
 <html lang="en">
  <head>
     <!-- Required meta tags -->
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1">

     <!-- Bootstrap CSS -->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

     <title>ClienteNUevo</title>
  </head>
   <body>
   
   <div style= "width:60%; margin-left:auto; margin-right:auto">
    <br>
    <h1 align="center" >Editar cliente</h1>

<form method="post" class="row g-3 needs-validation" action="editarc.php">
  <div class="col-md-4">
  <input type="hidden" name="id" value="<?php echo $cliente["ID"]?>">
  
    <label for="nombre" class="form-label">Nombre</label>
    <input type="text" class="form-control" name="nombre" value="<?php echo $cliente["NOMBRE"]?>">
    
  </div>
  <div class="col-md-4">
    <label for="dpi" class="form-label">DPI</label>
    <input type="number" class="form-control" name="dpi"  value="<?php echo $cliente["DPI"]?>" required>
    <div class="valid-feedback">
      Looks good!
    </div>
  </div>
  <div class="col-md-4">
    <label for="telefono" class="form-label">Telefono</label>
    <input type="number" class="form-control" name="telefono"  value="<?php echo $cliente["TELEFONO"]?>" required>
    <div class="valid-feedback">
      Looks good!
    </div>
  </div>
  <div class="col-md-4">
    <label for="email" class="form-label">email</label>
    <input type="email" class="form-control" name="email"  value="<?php echo $cliente["EMAIL"]?>" required>
    <div class="valid-feedback">
      Looks good!
    </div>
  </div>
  
  <div class="col-12">

    <button class="btn btn-primary" id="agregar" type="submit">Agregar</button>
  </div>
  
 </form>
 



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

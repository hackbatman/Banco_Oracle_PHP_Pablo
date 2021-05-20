<?php
require_once('menu.php');
require_once('conexion.php');

$conn = new Conexion();
$conexion = $conn->Conectar();


$query = "select cuentas.id, clientes.nombre
from clientes
inner join cuentas on cuentas.idcliente = clientes.id";

$comando = $conexion->prepare($query);
$comando->execute();
$cursor = $comando->fetchAll();

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

         .forma{
	width:300px;
	padding:16px;
	border-radius:10px;
	margin:auto;
	background-color:hsla(210, 29%, 21%, .8);
       }


      </style>
       <!-- Required meta tags -->
       <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

         <title>Formulario</title>
        </head>

      <body>
   
        <div style= "width:60%; margin-left:auto; margin-right:auto">
         <h1>Agregar un deposito</h1>
         <br>

       <form  method="post" class="forma" action="deposito.php">

         <div  class="mb-3">
            <select name="cuenta" class="form-select" aria-label="Default select example">
               <option selected>Selecionar cuenta</option>
               <?php foreach ($cursor as $cuenta):?>
               <option value="<?php echo $cuenta ['ID'] ?>"><?php echo $cuenta ['ID'] ?> --- <?php echo $cuenta ['NOMBRE'] ?></option>
               <?php endforeach ?>

            </select>
         </div>

          <div  name="monto" class="mb-3">
             <label for="monto" class="form-label">Monto</label>
             <input type="number" class="form-control" name="monto" required>
          </div>




  <div class="col-12">

     <button class="btn btn-outline-light" id="agregar" type="submit">Agregar</button>
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

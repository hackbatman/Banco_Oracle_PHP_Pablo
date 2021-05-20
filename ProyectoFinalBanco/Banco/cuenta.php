<?php
require_once('menu.php');
require_once('conexion.php');

$conn = new Conexion();
$conexion = $conn->Conectar();


$query = "select id, nombre from clientes order by nombre asc";
$comando = $conexion->prepare($query);
$comando->execute();
$cursor = $comando->fetchAll();

$obtipo = "select id, nomtipo from tipocuenta ";
$comando1 = $conexion->prepare($obtipo);
$comando1->execute();
$cursor1 = $comando1->fetchAll();


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
         <h1>Agregar Nueva cuenta</h1>
         <br>

       <form method="post" class="forma" action="nuevacuenta.php">

         <div  class="mb-3">
            <select name="cliente" class="form-select" aria-label="Default select example">
               <option selected>Selecionar cliente</option>
               <?php foreach ($cursor as $cuenta):?>
               <option value="<?php echo $cuenta ['ID'] ?>"><?php echo $cuenta ['NOMBRE'] ?></option>
               <?php endforeach ?>

            </select>
         </div>

         <div class="mb-3">
            <select name="tipo" class="form-select" aria-label="Default select example">
               <option selected>Selecionar tipo de cuenta</option>
               <?php foreach ($cursor1 as $tipo):?>
               <option value="<?php echo $tipo ['ID'] ?>"><?php echo $tipo ['NOMTIPO'] ?></option>
               <?php endforeach ?>

            </select>
         </div>

          <div  name="monto" class="mb-3">
             <label for="dpi" class="form-label">Monto</label>
             <input type="number" class="form-control" name="monto" required>
          </div>

          <button style="display: block; margin: 0 auto;" class="btn btn-outline-light" id="agregar" type="submit">Agregar</button>
  

  
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

<?php
session_start();
if(!$_SESSION["ingreso"]){
 header("location:login.php");
 exit();
} 

?>
<!doctype html>
<html lang="en">
  <head>
  <style type="text/css">
  html,body{
background-image: url('https://wallpapercave.com/wp/wp5472897.jpg');
background-size: cover;
background-repeat: no-repeat;
height: 100%;
font-family: 'Numans', sans-serif;
}
nav.navbar{
  background-color: rgba(0,0,0,0.8) !important;
  font-family: 'Franklin Gothic Book';

}
.navbar-brand{
    text-decoration: none;
    padding: 40px;
    font-family: 'Franklin Gothic Book';
    text-transform: uppercase;
    padding-left: 10px;
    padding-right: 10px;
    font-weight: 800;
    font-size: 25px;
    color: white;
    background-color: transparent;
  }
  .navbar-brand:hover{
    color:  #F1C40F;
 
    text-decoration: none;
  }
  label{
    text-decoration: none;
    padding: 10px;
    font-family: 'Franklin Gothic Book';
    
    padding-left: 10px;
    padding-right: 10px;
    font-weight: 800;
    font-size: 20px;
    color: white;
    
  }


</style>



    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

    <title>Menu</title>
  </head>

  <body>
 <nav class="navbar navbar-expand-lg navbar">
  <div class="container-fluid">
    <a class="navbar-brand" href="Menu.php">Menu</a>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0"> 
       <a class="navbar-brand" href="banco_Cliente.php">Clientes</a>
         
          <div class="collapse navbar-collapse" id="navbarNavDarkDropdown">
            <ul class="navbar-nav">
             <li class="nav-item dropdown">
                <a class="navbar-brand dropdown-toggle" href="#" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Transacciones
                 </a>
                <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDarkDropdownMenuLink">
                <li><a class="dropdown-item" href="depositoint.php">Deposito</a></li>
                  <li><a class="dropdown-item" href="retiroint.php">Retiro</a></li>
                  <li><a class="dropdown-item" href="transaccion.php">Transferencia</a></li>
                </ul>
              </li>
            </ul>
          </div>

          <a class="navbar-brand" href="vercuentas.php">Ver Cuentas</a>


             
      </ul>
      <form class="d-flex" method="post" action="salir.php">
      <label> User: <?php echo $_SESSION["Usuario"]?></label>
        
        <button class="btn btn-outline-success" type="submit">Salir</button>

        
      </form>
    </div>
  </div>
</nav>




    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
    -->
  </body>
</html>
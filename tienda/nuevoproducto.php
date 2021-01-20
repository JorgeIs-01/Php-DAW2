  
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

  <header>
  
  <nav class="navbar navbar-expand-lg navbar-light bg-light navbar navbar-dark bg-dark">
<a class="navbar-brand" href="#">Tienda</a>
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
  <span class="navbar-toggler-icon"></span>
</button>
<div class="collapse navbar-collapse" id="navbarText">
  <ul class="navbar-nav mr-auto"> 
    <?php
      session_start();
        if ($_SESSION["Trabajador"]!=''){
    ?>
    <li class="nav-item active">
      <a class="nav-link" href="productos.php">Productos <span class="sr-only">(current)</span></a>
    </li>
  
    <li class="nav-item active">
      <a class="nav-link" href="carrito.php">Carrito</a>
    </li>
   
    <?php
     
        if ($_SESSION["Trabajador"]=='Admin'){
    ?>
    <html>
        <li class="nav-item active">
      <a class="nav-link " href="nuevoproducto.php"  >Nuevo producto</a>
    </li>
    </html>
    <?php
    }
    ?>
    <html>
   
     
    </html>
    <?php
    }
    ?>
    
    
  </ul>
  <span class="navbar-text">
  </html>
  
  <?php


?>
<html>
<div class="dropdown">
  <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    <?php
    echo "Bienvenido ".$_SESSION['Trabajador'];
    ?>
  </button>
  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
    <a class="dropdown-item bg-dark" href="perfil.php">Perfil</a>
    <a class="dropdown-item bg-dark" href="historialpedidos.php">Pedidos</a>
    <button type="button"class="dropdown-item active bg-dark " data-toggle="modal" data-target="#exampleModal" sty>
Logout
</button>
  </div>
</div>

</nav>
</header>

</head>
<body>
  <br><br>

<div class="container" style="background-color: gray; margin-left: 250px;">
<h1 align="center"> Datos Producto </h1>

<form action="nuevoproducto_ok.php" method="post"><br>
Nombre producto: <input type="text" name="nombre" value="" required><br><br>
Descripcion:<input type="text" name="descripcion" value="" required><br><br>
Destacar producto<input type="boolean" name="destacar" value="" required><br><br>
Categoria:<input type="text" name="categoria" value="" required><br><br>
Precio<input type="number" name="precio" value="" required><br><br>
Imagen<input type="text" name="imagen" value="" required><br><br>
<td><input class="btn-primary" type="submit" value="Crear producto" ></td><br><br>
</form>

</div>
</body>
</html>


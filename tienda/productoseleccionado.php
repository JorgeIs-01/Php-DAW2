<?php
require_once 'database.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
     <!-- <link rel="stylesheet" href="./tienda.css">  -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <title>Tienda</title>
    <header>
  
  

<nav class="navbar navbar-expand-lg navbar-light bg-light navbar navbar-dark bg-dark">
  <a class="navbar-brand" href="#">Tienda</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarText">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="productos.php">Productos <span class="sr-only">(current)</span></a>
      </li>
      
      <li class="nav-item">
        <a class="nav-link" href="carrito.php">Carrito</a>
      </li>
      <?php
        session_start();
          if ($_SESSION["Trabajador"]!=''){
      ?>
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
          <li class="nav-item active">
        <a class="nav-link " href="logout.php" >Logout</a>
      </li>
      </html>
      <?php
      }
      ?>
      
      
    </ul>
    <span class="navbar-text">
    </header>
</head>
<body>

    </html>

   
<fieldset style="width: 20px; margin-right:400px ;>
<table border="1" >
		<tr>

      
			
		</tr>

    <?php 
    $id=$_SESSION['idProducto'];
		$consulta="SELECT * from producto where idProducto='$id';";
		$result=mysqli_query($con,$consulta);
		
		while($mostrar=mysqli_fetch_array($result)){
      ?>
      <?php $mostrar['Nombre'] ?>
      <?php $mostrar['precio'] ?>
      <?php  $mostrar['descripcion'] ?>
			<tr>
    	<td><h1> <?php echo "Producto  " . $mostrar['Nombre'] ?></h1></td>
      <td><?php echo '<img src='.$mostrar['imagen'].' alt="" class="foto" width="250">' ?></td>
		</tr>
    <?php 
    
$_SESSION['Nombre']=$mostrar['Nombre'];      
$_SESSION['Precio']=$mostrar['precio'];
$_SESSION['Descripcion']=$mostrar['descripcion'];
}
		
		?>
	
    </table>
    </fieldset>
    <form action="carrito.php" method="post">
    
   <h4>Descripcion del producto:</h4> <?php echo  $_SESSION['Descripcion']?>
   Precio: <?php echo  $_SESSION['Precio']?>
   Nombre: <?php echo  $_SESSION['Nombre']?>

   <h4>cantidad</h4> <input type="number" name="cantidad" size="4px">
   <input type="submit" value="Añadir al carrito" />
  
    </form>
    <?php
    
      
?>
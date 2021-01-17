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
  <a class="navbar-brand" href="tienda.php">Tienda</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarText">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Productos <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="carrito.php">Carrito</a>
      </li>
      <?php
        session_start();
          if ($_SESSION["Trabajador"]!=''){
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
<?php 

$descripcion= $_SESSION['Descripcion'];
$nombre= $_SESSION['Nombre'];
$precio= $_SESSION['Precio'];
$user=$_SESSION["Trabajador"];
$id=$_SESSION['idProducto'];
$cantidad= $_POST["cantidad"];
$precioTotal=$precio*$cantidad;



//////////////////////


$user=$_SESSION["Trabajador"];
$sql3 = "SELECT MAX(id) FROM $user ";
$result = mysqli_query($con, $sql3);

while ($mostrar = mysqli_fetch_array($result)) {

  
    
      $mostrar['MAX(id)'] ;
      $idsolicitud= $mostrar['MAX(id)']+1;
}
echo $idsolicitud."idregistro";
$user2=$user."ok";
$sql4 = "SELECT MAX(id) FROM $user2 ";
$result = mysqli_query($con, $sql4);

while ($mostrar = mysqli_fetch_array($result)) {

  
    
      $mostrar['MAX(id)'] ;
      $idpedido= $mostrar['MAX(id)']+1;
}
echo $idpedido."idpedido";

$sql="INSERT INTO $user (`Id`,`Idpedido`,  `nombreProducto`, `cantidad`, `precio`,`PrecioTotal`) VALUES ('$idsolicitud','$idpedido', '$nombre','$cantidad','$precio','$precioTotal')";

mysqli_query($con,$sql);  



/////////////////////////


echo $cantidad;
echo "el id". $id;
echo "el trabajador".$user;
?>
<table border="1" >
		<tr>

			
			<td>Nombre</td>
      <td>cantidad</td>
      <td>precio</td>
			<td>Precio total</td>
			<td>imagen</td>
			
		</tr>

		<?php 
		$consulta="SELECT * from $user ";
		$result=mysqli_query($con,$consulta);
		
		while($mostrar=mysqli_fetch_array($result)){
			?>

			<tr>
     
			<td><?php echo $mostrar['nombreProducto'] ?></td>
      <td><?php echo $mostrar['cantidad'] ?></td>
      <td><?php echo $mostrar['precio'] ?></td>
			<td><?php echo $mostrar['PrecioTotal'] ?></td>
      <td><?php echo '<img src='.$mostrar['imagen'].' alt="" class="foto" width="200px">' ?></td>
		</tr>
    <?php 
    
    $nombre=$mostrar['Nombre'];
    
      $precio=$mostrar['precio'];
      echo "asd".$precioTotal;
      echo $user;
      
      }
      
      
		?>
    <form action="pedidos_ok.php">
	<input type="submit"value="Finalizar pedido"></form>
	</table>
<?php

?>
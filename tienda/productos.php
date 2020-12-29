<?php
require_once 'database.php';
?>

<link rel="stylesheet" href="./tienda.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
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
      <?php
       
          if ($_SESSION["Trabajador"]=='Admin'){
      ?>
      <html>
          <li class="nav-item active">
        <a class="nav-link " href="nuevoproducto.php" >Nuevo producto</a>
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
    <div class="dropdown-menu bg-dark" aria-labelledby="dropdownMenuButton">
      <a class="dropdown-item bg-dark" href="perfil.php">Perfil</a>
      <a class="dropdown-item bg-dark" href="#">Pedidos</a>
      <a class="dropdown-item bg-dark" href="#">Something else here</a>
    </div>
  </div>
</html>

    <html>
    </span>
  </div>
</nav>

<br><br>
  <div class="dropdown">
    <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
      <?php
      echo "Filtrar";
      ?>
    </button>
    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">

    
    <form action="productos.php" method="post">
    <br>  
    <input type="submit" value="filtrar" name="boton" />

    </form>
    
      <a class="dropdown-item" href="productos.php" name="boton">Precio ascendente</a>
      <a class="dropdown-item" href="#">Precio descendente</a>
      <a class="dropdown-item" href="#">Categorias</a>
      
    </div>
  </div>   
  


<!-- ///////////////////////////// -->
<?php
if (isset($_POST['boton'])) {
echo "has pulsado el boton";

?>
<table border="1" >
		<tr>
       
			<td>id</td>
			<td>Nombre</td>
            <td>Descripcion</td>
            <td>Producto destacado</td>
			<td>Precio</td>
			<td>imagen</td>
			
		</tr>

		<?php 
		$consulta="SELECT * from producto ORDER BY precio DESC";
		$result=mysqli_query($con,$consulta);
		
		while($mostrar=mysqli_fetch_array($result)){
			?>

			<tr>
      <td><?php echo $mostrar['idProducto'] ?></td>
				<td><?php echo $mostrar['Nombre'] ?></td>
                <td><?php echo $mostrar['descripcion'] ?></td>
                <td><?php echo $mostrar['destacar'] ?></td>
				<td><?php echo $mostrar['precio'] ?></td>
        <td><?php echo '<img src='.$mostrar['imagen'].' alt="" class="foto">' ?></td>

        <form action="deleteProducto.php" method="get">
        <td><button name='Borrar' type='submit' class='btn btn-danger btn-md' value='<?php $mostrar['idProducto'] ?>'>borrar</button></td>
        </form>
		</tr>
		<?php 
			}
		
		?>
	
	</table>
  <?php
  }
?>
<!-- //////////////////////////// -->

<table border="1" >
		<tr>
       
			<td>id</td>
			<td>Nombre</td>
            <td>Descripcion</td>
            <td>Producto destacado</td>
			<td>Precio</td>
			<td>imagen</td>
			
		</tr>

		<?php 
		$consulta="SELECT * from producto ";
		$result=mysqli_query($con,$consulta);
		
		while($mostrar=mysqli_fetch_array($result)){
			?>

			<tr>
      <td><?php echo $mostrar['idProducto'] ?></td>
				<td><?php echo $mostrar['Nombre'] ?></td>
                <td><?php echo $mostrar['descripcion'] ?></td>
                <td><?php echo $mostrar['destacar'] ?></td>
				<td><?php echo $mostrar['precio'] ?></td>
        <td><?php echo '<img src='.$mostrar['imagen'].' alt="" class="foto">' ?></td>

        <form action="deleteProducto.php" method="get">
        <td><button name='Borrar' type='submit' class='btn btn-danger btn-md' value='<?php $mostrar['idProducto'] ?>'>borrar</button></td>
        </form>
		</tr>
		<?php 
			}
		
		?>
	
	</table>
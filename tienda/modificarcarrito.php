<?php 
require_once 'database.php';
session_start();
              $id = $_GET['id'];
              echo $id;
              $_SESSION["id2"] = $id;
              echo  $_SESSION["id2"];
              $user=$_SESSION["Trabajador"];
              echo $user;
              $sql = "SELECT * from $user where id=$id";
              $result = mysqli_query($con, $sql);
              while ($mostrar = mysqli_fetch_array($result)) {
                ?>
             <?php $mostrar['Nombre'] ?>
            <?php $mostrar['precio'] ?>
            <?php  $mostrar['descripcion'] ?>
			<tr>
    	<td><h1> <?php echo "Producto  " . $mostrar['nombreProducto'] ?></h1></td>
     
		</tr>
              <tr>
  
                <?php $mostrar['nombreProducto'] ?>
              
                <?php echo $mostrar['cantidad'] ?>
                <?php $mostrar['precio'] ?>
                <?php $mostrar['imagen'] ?>
  
  <td><?php echo '<img src='.$mostrar['imagen'].' alt="" class="foto" width="250">' ?></td>
		
              </tr>
            <?php
                  session_start();
  //Pasamos las variables a session para poderlas utilizar en varias paginas del programa
                  $_SESSION['Nombre'] = $mostrar['nombreProducto'];
                  
                  $_SESSION['cantidad'] = $mostrar['cantidad'];
                  $_SESSION['precio'] = $mostrar['precio'];
                  $_SESSION['imagen'] = $mostrar['imagen'];
                  
                }
              
?>
<br><br><div class="container">
<form action="modificarcarrito_ok.php" method="post">
    
    Precio: <?php echo  $_SESSION['Precio']?>
   Nombre: <?php echo  $_SESSION['Nombre']?>

   <h4>cantidad</h4> <input type="number" name="cantidad" value="<?php echo  $_SESSION['cantidad']?>" required>
   <input type="submit" value="Actualizar carrito" />

 
  
    </form>

</div>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
   
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
    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
      <a class="dropdown-item" href="perfil.php">Perfil</a>
      <a class="dropdown-item" href="#">Pedidos</a>
      <a class="dropdown-item" href="#">Something else here</a>
    </div>
  </div>
</html>

    <html>
    </span>
  </div>
</nav>
<?php 
require_once 'database.php';
              $id = $_GET['id'];
              echo $id;
              $_SESSION["id2"] = $id;
              echo  $_SESSION["id2"];
              $sql = "SELECT * from producto where idProducto=$id";
              $result = mysqli_query($con, $sql);
              while ($mostrar = mysqli_fetch_array($result)) {
                ?>
  
              <tr>
  
                <?php $mostrar['Nombre'] ?>
                <?php $mostrar['descripcion'] ?>
                <?php $mostrar['destacar'] ?>
                <?php $mostrar['precio'] ?>
                <?php $mostrar['imagen'] ?>
  
  
              </tr>
            <?php
                  session_start();
  //Pasamos las variables a session para poderlas utilizar en varias paginas del programa
                  $_SESSION['Nombre'] = $mostrar['Nombre'];
                  $_SESSION['descripcion'] = $mostrar['descripcion'];
                  $_SESSION['destacar'] = $mostrar['destacar'];
                  $_SESSION['precio'] = $mostrar['precio'];
                  $_SESSION['imagen'] = $mostrar['imagen'];

                }
              
?>
<br><br><div class="container">
<form action="modificar_ok.php" method="post">
Nombre producto: <input type="text" name="nombre" value=" <?php echo  $_SESSION['Nombre']  ?>"><br>
Descripcion:<input type="text" name="descripcion" value=" <?php echo  $_SESSION['descripcion']  ?>"><br>
Destacar producto<input type="boolean" name="destacar" value="<?php echo  $_SESSION['destacar']  ?>"><br>
Precio<input type="number" name="precio" value="<?php echo  $_SESSION['precio']  ?>"><br>
Imagen<input type="text" name="imagen" value="<?php echo  $_SESSION['imagen']  ?>"><br>
<td><input type="submit" value="Actualizar Producto"></td>
</form>

</div>
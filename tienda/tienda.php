<?php
require_once 'database.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
  <link rel="stylesheet" href="tienda.css">
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
          <?php
          session_start();
          if ($_SESSION["Trabajador"] != '') {
          ?>
            <li class="nav-item active">
              <a class="nav-link" href="productos.php">Productos <span class="sr-only">(current)</span></a>
            </li>

            <li class="nav-item active">
              <a class="nav-link" href="carrito.php">Carrito</a>
            </li>

            <?php

            if ($_SESSION["Trabajador"] == 'Admin') {
            ?>
              <html>
              <li class="nav-item active">
                <a class="nav-link " href="nuevoproducto.php">Nuevo producto</a>
              </li>

              </html>
            <?php
            }
            ?>
            <html>


            </html>



        </ul>
        <span class="navbar-text">

</html>

<?php


?>
<html>
<div class="dropdown">
  <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    <?php
            echo "Bienvenido " . $_SESSION['Trabajador'];
    ?>
  </button>
  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
    <a class="dropdown-item bg-dark" href="perfil.php">Perfil</a>
    <a class="dropdown-item bg-dark" href="historialpedidos.php">Pedidos</a>
    <button type="button" class="dropdown-item active bg-dark " data-toggle="modal" data-target="#exampleModal" sty>
      Logout
    </button>
  </div>
</div>
<?php
          }
          if ($_SESSION["Trabajador"] == '') {
?><html>
  <li class="nav-item active">
    <a class="nav-link " href="index.html">Login</a>
  </li>
<?php
          }

?>

  </html>
  </nav>
  </header>

  </head>

  <body>


    <div id="carouselExampleIndicators" class="carousel slide w-70  " data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
      </ol>
      <div class="container">
        <div class="carousel-inner">
          <div class="carousel-item active">

            <img class="d-block w-100" src="https://images01.nicepage.io/page/50/97/html-template-preview-50972.jpg" height="400" alt="First slide">

          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="https://barcelona.cool/wp-content/uploads/2019/02/tienda-hip-hop.jpg" height="400" alt="Second slide">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="https://i.pinimg.com/564x/c1/e9/4d/c1e94ddcf446a073f7cc9ecc4e68b0b1.jpg" height="400" alt="Third slide">
          </div>
        </div>
      </div>
      <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>

      <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Logout</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              Seguro que quieres salir?
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              <form action="logout_ok.php">
                <button type="submit" class="btn btn-danger">Cerrar sesion</button>

              </form>

            </div>
          </div>
        </div>
      </div>
      
      <div  id="margin"><br><br>
        <h3>Productos destacados</h3>
        <!-- aqui vamos a mostrar varios productos que tengan el apartado oferta activado -->

      </div>

</html>
<?php
//si el administrador al introducir los productos quiere destacarlo se mostraran en la pagina principal
$consulta = "SELECT * from producto where destacar=1 ";
$result = mysqli_query($con, $consulta);

while ($mostrar = mysqli_fetch_array($result)) {
?>
  <tr>
  </tr>
  <div class="container">
  
  <tr>
    <td><?php $mostrar['idProducto'] ?></td>
  <tr><?php echo $mostrar['Nombre'] ?></tr>
  <td><?php $mostrar['descripcion'] ?></td>
  <td><?php $mostrar['destacar'] ?></td>
  <td><?php echo $mostrar['precio'] ?></td>
  <td><?php echo '<img src=' . $mostrar['imagen'] . ' alt="" class="foto" width="150">' ?></td>
  <?php
  if ($_SESSION["Trabajador"] != '') {

  ?>
    <td><a href="productoseleccionado.php?id=<?php echo $mostrar['idProducto']; ?>"> <img src="./fotos/carrito.png" width="50px">
      </a></td>

    </tr>
    </div>
   
  <?php
  }
  ?>
  <br><br>
<?php
}

?>
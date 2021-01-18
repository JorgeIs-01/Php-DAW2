<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>logout</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>

</head>
<header>

<nav class="navbar navbar-expand-lg navbar-light bg-light navbar navbar-dark bg-dark">
  <a class="navbar-brand" href="tienda.php">Tienda</a>
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
        <a class="nav-link " href="#" >Logout</a>
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
      <a class="dropdown-item bg-dark" href="perfil.php">Perfil</a>
      <a class="dropdown-item bg-dark" href="#">Pedidos</a>
      <a class="dropdown-item bg-dark" href="#">Something else here</a>
    </div>
  </div>

</nav>
</header>
<body>
    
</body>
</html>
<script>
const swalWithBootstrapButtons = Swal.mixin({
  customClass: {
    confirmButton: 'btn btn-success',
    cancelButton: 'btn btn-danger'
  },
  buttonsStyling: false
})

swalWithBootstrapButtons.fire({
  title: 'Are you sure?',
  text: "You won't be able to revert this!",
  icon: 'warning',
  showCancelButton: true,
  confirmButtonText: 'Yes, delete it!',
  cancelButtonText: 'No, cancel!',
  reverseButtons: true
}).then((result) => {
  if (result.isConfirmed) {
      <?php session_destroy();?>
    swalWithBootstrapButtons.fire(
      'Deleted!',
      'Your file has been deleted.',
      'success'
    )
  } else if (
    /* Read more about handling dismissals below */
    result.dismiss === Swal.DismissReason.cancel
  ) {
    swalWithBootstrapButtons.fire(
      'Cancelled',
      'Your imaginary file is safe :)',
      'error'
    )
  }
})



</script> -->


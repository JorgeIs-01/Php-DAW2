<?php
require_once 'database.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Historialpedidos</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

	<header>

		<nav class="navbar navbar-expand-lg navbar-light bg-light navbar navbar-dark bg-dark">
			<a class="navbar-brand" href="tienda.php">Tienda</a>
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

</nav>
</header>
</head>

<body>

</body>

</html>
<table border="1" style="width: 500px; margin-right:50px">
	<tr class="table-success">
	
		<td>id</td>
		<td>Nombre</td>
		<td>Cantidad</td>
		<td>Precio Total</td>

	</tr>
	<?php
	session_start();
	$user = $_SESSION["Trabajador"];
	$user2 = $user . "ok";
	echo $user2;
	$consulta = "SELECT * from $user2 ";
	$result = mysqli_query($con, $consulta);

	while ($mostrar = mysqli_fetch_array($result)) {
	?>

		<tr>
			<td><?php echo $mostrar['Id'] ?></td>
			<td><?php echo $mostrar['Usuario'] ?></td>
			<td><?php echo $mostrar['Cantidad'] ?></td>
			<td><?php echo $mostrar['PrecioTotalPedido'] ?></td>





		<?php
	}
		?>
		<html>
</table>

<body>
	<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
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

</body>

</html>
<?php	
session_start();

$logueado=0;
	
header("Content-Type: text/html;charset=utf-8");


		$nick = $_POST["nick"];
		$password = $_POST["password"];

	$con = mysqli_connect('localhost', 'root', 'usbw', 'test') or die(mysql_error());
	
	if (!$con)
	{
		die("No se ha podido realizar la corrección ERROR:" . mysqli_connect_error() . "<br>");
	}
	else
	{
		mysqli_set_charset ($con, "utf8");
		echo "Se ha conectado a la base de datos" . "<br>";
	}
	echo $nick;


	$instruccion = "select count(*) as cuantos from login where Usuario = '$nick'";
	$resultado = mysqli_query($con, $instruccion);
		while ($fila = $resultado->fetch_assoc()) {
		$numero=$fila["cuantos"];
	}
	if($numero==0){
		echo "El usuario no existe";
	}
	else{
	$instruccion = "select password as cuantos from login where Usuario = '$nick'";
	$resultado = mysqli_query($con, $instruccion);

	while ($fila = $resultado->fetch_assoc()) {
		$password2=$fila["cuantos"];
	}
		
	
	/////////////////

	if (!strcmp( $password) == 0){
			echo "Contraseña incorrecta";
	}
	
	else{
		echo "Login OK";
		session_start();
		$_SESSION["nick_logueado"]=$nick;
		?> 
		<html>
		<a href="tienda.php">Acceder al menu</a>
		</html>
		<?php
	}

		$logueado=1;
	
	?>

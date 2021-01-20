<?php
    //require_once __DIR__ . ;'/db_config.php';
$servidor="localhost";
$usuario="root";
$contraseña="usbw";
$bd="test";
header("Content-Type: text/html;charset=utf-8");
if (isset($_POST["nick"]))
{
	$nombre = $_POST["nick"];
	$password = $_POST["password"];
	$dni = $_POST["dni"];
	$gmail = $_POST["email"];
	echo "El nombre es ".$nombre;

	$con = mysqli_connect("localhost", "root", "usbw", "tienda") or die(mysqli_connect_error());
	
	if (!$con)
	{
		die("No se ha podido realizar la corrección ERROR:" . mysqli_connect_error() . "<br>");
	}
	
	else
	{
		mysqli_set_charset ($con, "utf8");
		echo "Se ha conectado a la base de datos"."<br>";
	}
	//////////////////////////////////////
	
	//Inserción de datos
	
	//Primero compruebo si el nick existe
	$instruccion = "SELECT Usuario FROM login where DNI = '$dni'";
	$res = mysqli_num_rows(mysqli_query($con, $instruccion));

	
	if ($res!= 0)
	{
		
		
		
			echo "El usuario ya existe";
		}
		else
		{
			
			$sql="INSERT INTO login (Usuario, Contrasena,DNI, gmail ) VALUES ('$nombre', '$password','$dni','$gmail')";
			mysqli_query($con,$sql);
			echo "Usuario creado";
			//me lleva al login para que pruebe mi contraseña
			// echo "<script>alert('Usuario creado correctamente');</script>";


			$sql2="CREATE TABLE $nombre (
				Id VARCHAR(5)  PRIMARY KEY,
				IdPedido VARCHAR(5) NOT NULL,
				
				nombreProducto VARCHAR(10) NOT NULL,
				cantidad int(3),
				precio int(3),
				PrecioTotal int(4),
				imagen VARCHAR(300)
				)";
				mysqli_query($con,$sql2);

				$nombre2=$nombre."ok";
				$sql3="CREATE TABLE $nombre2 (
					Id VARCHAR(5)  PRIMARY KEY,
					Usuario VARCHAR(30) NOT NULL,
					Cantidad VARCHAR(10) NOT NULL,
					PrecioTotalPedido int(4)
					)";
					mysqli_query($con,$sql3);
			include_once("index.html");
		}
	
	

}
else 
{
	echo ("ERROR: No se puede introducir un nick en blanco");
}
?>
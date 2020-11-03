<?php
$servername = "localhost";
$database = "daw2";
$username = "root";
$password = "usbw";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";
mysqli_close($conn);

$consulta=mysqli_query($con,"insert into formulario values ('$nombre','$edad','$DNI','$correo','$comentarios','$telefono')");
if(!$consulta)
	{
		die("awiki wiki");
	}
	else
	{
			echo "Datos insertados!";
	}
$con=mysqli_connect($servername,$username,$password,$database);
if(!$con)
{
	die("Con se ha podido realizar la conexión: ". mysqli_connect_error() . "<br>");
}
else
{
	mysqli_set_charset($con,"utf8");
	echo "Felicidades lerdo! te has conectado a la BD";
	$_SESSION["con"]=$con;
	include_once("formulario.html");
}
?>

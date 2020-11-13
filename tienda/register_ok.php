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

	echo "el nombre es ".$nombre;

	$con = mysqli_connect("localhost", "root", "usbw", "test") or die(mysql_error());
	
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
	$instruccion = "SELECT Usuario FROM login where Usuario = '$nombre'";
	$res = mysql_num_rows(mysqli_query($con, $instruccion));
	$datos = mysqli_fetch_assoc($res);
	
	if ($res!= 0)
	{
		echo "ya existen".$res."usuarios";
		
		
			echo "El usuario ya existe";
		}
		else
		{
			
			$sql="INSERT INTO login (Usuario, Contrasena) VALUES ('$nombre', '$password')";
			mysqli_query($con,$sql);
			echo "Usuario creado";
			//me lleva al login para que pruebe mi contraseña
			// echo "<script>alert('Usuario creado correctamente');</script>";
			include_once("index.html");
		}
	
	

}
else 
{
	echo ("ERROR: No se puede introducir un nick en blanco");
}
?>
<?php

header("Content-Type: text/html;charset=utf-8");

//Parámetros de conexión
$servidor="localhost";
$usuario="root";
$contraseña="usbw";
$bd="test";

//realizamos la conexión
$con=mysqli_connect($servidor,$usuario,$contraseña,$bd);
if(!$con)
{
	die("Con se ha podido realizar la conexión: ". mysqli_connect_error() . "<br>");
}
else
{
	mysqli_set_charset($con,"utf8");
	echo "Felicidades lerdo! te has conectado a la BD";
	
}

echo "<table>";
	$instruccion = "SELECT * FROM alumnos WHERE 1";
	$resultado = mysqli_query($con, $instruccion);
		while ($fila = $resultado->fetch_assoc()) {	
/*dni
nombre
edad
curso*/
		$dni=$fila["dni"];
		$nombre=$fila["nombre"];
		$edad=$fila["edad"];
		$curso=$fila["curso"];
		
		echo "<tr>";
		echo "<td>".$dni."</td>";
		echo "<td>".$nombre."</td>";
		echo "<td>".$edad."</td>";
		echo "<td>".$curso."</td>";
		echo "</tr>";
	
	}
echo "</table>";



?>

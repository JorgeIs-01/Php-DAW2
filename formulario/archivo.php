<?php

$nombre = $_GET['Nombre'];
$edad = $_GET['Edad'];
$DNI = $_GET['DNI'];
$correo = $_GET['Correo'];
$comentarios = $_GET['Comentarios'];
$telefono = $_GET['telefono'];

//parametros de conexión
$servername = "localhost";
$username = "root";
$password = "usbw";
$database = "daw2";
if(strlen($nombre)>"30"){
	echo 'La longitud del nombre no es correcta<br>';
} else {
	echo ' Nombre: ' .$nombre. '<br>';
}

if($edad>"99"||$edad<"18"){
	echo 'La edad no es correcta<br>';
} else {
	echo ' Edad: ' .$edad. '<br>';
}

$letra = substr($DNI, -1);
  $numeros = substr($DNI, 0, -1);
  if (substr("TRWAGMYFPDXBNJZSQVHLCKE", $numeros%23, 1) == $letra && strlen($letra) == 1 && strlen ($numeros) == 8 ){
	echo "DNI: ".$DNI."<br>";
  }else{
    $valido=false;
	echo "El DNI: ".$DNI." no es valido <br>" ;
  }

if (preg_match('/^[^0-9][a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[@][a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[.][a-zA-Z]{2,4}$/', "mi.email.correcto@gmail.com")) {   
  }

if (preg_match('/^[^0-9][a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[@][a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[.][a-zA-Z]{2,4}$/', "mi.email.incorrecto")) { 
  }
echo ' Correo: ' .$correo. '<br>';

if(strlen($comentarios)>"200"||strlen($comentarios)<"2"){
	echo 'La longitud del comentario no es correcta<br>';
} else {
	echo ' Comentarios: ' .$comentarios. '<br>';
}


	echo ' Telefono:' .$telefono. '<br>';

	// $sql = "INSERT INTO formulario ('Nombre', 'Edad', 'DNI', 'Correo', 'Comentarios', 'Telefono') VALUES ('$nombre','$edad','$DNI','$correo','$comentarios','$telefono');
	
	

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
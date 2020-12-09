<?php

require_once 'database.php';

$nombre= $_POST["nombre"];
$desc= $_POST["descripcion"];
$oferta= $_POST["oferta"];
$precio= $_POST["precio"];
$img= $_POST["imagen"];


$sql = "INSERT INTO producto (Nombre , descripcion, oferta, precio, imagen) 
    VALUES ('$nombre', '$desc', '$oferta','$precio','$img')";

    
if (mysqli_query($con, $sql)) {
    echo "Datos introducidos en la base de datos <br>";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($con);
}
?>
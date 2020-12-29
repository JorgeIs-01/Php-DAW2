<?php

require_once 'database.php';

$nombre= $_POST["nombre"];
$desc= $_POST["descripcion"];
$destacar= $_POST["destacar"];
$precio= $_POST["precio"];
$img= $_POST["imagen"];


$sql = "INSERT INTO producto (Nombre , descripcion, destacar, precio, imagen) 
    VALUES ('$nombre', '$desc', '$destacar','$precio','$img')";

    
if (mysqli_query($con, $sql)) {
    echo "Datos introducidos en la base de datos <br>";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($con);
}
?>
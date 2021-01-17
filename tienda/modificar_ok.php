<?php

require_once 'database.php';



$nombre= $_POST["nombre"];
$descripcion= $_POST["descripcion"];
$destacar= $_POST["destacar"];
$precio= $_POST["precio"];
$imagen= $_POST["imagen"];
session_start();
$id2=$_SESSION["id2"];

echo "el id".$id2;


$sql = "UPDATE producto SET Nombre= '$nombre', descripcion='$descripcion', destacar='$destacar', precio='$precio', imagen='$imagen' WHERE idProducto='$id2'";
    

    if (mysqli_query($con, $sql)) {
        echo "Datos introducidos en la base de datos <br>";
  } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($con);
  }

?>
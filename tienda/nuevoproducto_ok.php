<?php

require_once 'database.php';

$nombre= $_POST["nombre"];
$desc= $_POST["descripcion"];
$destacar= $_POST["destacar"];
$precio= $_POST["precio"];
$img= $_POST["imagen"];




$consulta="SELECT MAX(idProducto) from producto";
$result=mysqli_query($con,$consulta);

while($mostrar=mysqli_fetch_array($result)){
    
    
    

    
$mostrar['idProducto'];

$id=$mostrar['idProducto']+1;

    }
		
		



$sql = "INSERT INTO producto (idProducto, Nombre , descripcion, destacar, precio, imagen) 
    VALUES ('$id','$nombre', '$desc', '$destacar','$precio','$img')";

    
if (mysqli_query($con, $sql)) {
    echo "Datos introducidos en la base de datos <br>";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($con);
}
?>
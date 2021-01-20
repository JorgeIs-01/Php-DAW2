<?php

require_once 'database.php';

$nombre= $_POST["nombre"];
$desc= $_POST["descripcion"];
$destacar= $_POST["destacar"];
$categoria= $_POST["categoria"];
$precio= $_POST["precio"];
$img= $_POST["imagen"];




$consulta="SELECT MAX(idProducto) from producto";
$result=mysqli_query($con,$consulta);

while($mostrar=mysqli_fetch_array($result)){
    
    
    

    
$mostrar['MAX(idProducto)'];

$id=$mostrar['MAX(idProducto)']+1;

    }
		
		



$sql = "INSERT INTO producto  
    VALUES ('$id','$nombre', '$desc', '$destacar','$categoria','$precio','$img')";

    
if (mysqli_query($con, $sql)) {
    echo "Datos introducidos en la base de datos <br>";
    header("Location: productos.php");
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($con);
}
?>
<?php
require_once 'database.php';
session_start();
$descripcion= $_SESSION['Descripcion'];
$nombre= $_SESSION['Nombre'];
$precio= $_SESSION['Precio'];
$user=$_SESSION["Trabajador"];
echo $user;
$id=$_SESSION['idProducto'];
$cantidad= $_POST["cantidad"];
$precioTotal=$precio*$cantidad;
$imagen = $_SESSION["imagen"];
$user=$_SESSION["Trabajador"];
$sql3 = "SELECT MAX(id) FROM $user ";
$result = mysqli_query($con, $sql3);

while ($mostrar = mysqli_fetch_array($result)) {

  
    
      $mostrar['MAX(id)'] ;
      $idsolicitud= $mostrar['MAX(id)']+1;
}

echo $idsolicitud."idregistro";
$user2=$user."ok";
$sql4 = "SELECT MAX(id) FROM $user2 ";
$result = mysqli_query($con, $sql4);

while ($mostrar = mysqli_fetch_array($result)) {

  
    
      $mostrar['MAX(id)'] ;
      $idpedido= $mostrar['MAX(id)']+1;
}

echo $idpedido."idpedido";

$sql="INSERT INTO $user
 VALUES ('$idsolicitud','$idpedido', '$nombre','$cantidad','$precio','$precioTotal', '$imagen')";

mysqli_query($con,$sql);  
 header("Location: carrito.php");
?>
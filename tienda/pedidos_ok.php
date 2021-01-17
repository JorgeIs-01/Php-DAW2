<?php
require_once 'database.php';
session_start();
$user=$_SESSION["Trabajador"];
echo "el usuario".$user;
$sql3 = "SELECT SUM(cantidad),IdPedido, SUM(PrecioTotal) FROM $user ";
$result = mysqli_query($con, $sql3);

while ($mostrar = mysqli_fetch_array($result)) {

    echo $mostrar['SUM(cantidad)'];
    $mostrar['SUM(PrecioTotal)'];
    $mostrar['IdPedido'];
    $productos = $mostrar['SUM(cantidad)'] ;
    $PrecioTotal = $mostrar['SUM(PrecioTotal)'] ;
    $idpedido = $mostrar['IdPedido'] ;
echo $productos.$PrecioTotal.$idpedido;
}
$user2=$user."ok";

$sql = "INSERT into $user2 (`Id`,`Usuario`, `Cantidad`, `PrecioTotalPedido`) 
				VALUES ('$idpedido', '$user', '$productos',' $PrecioTotal')";
			//$sql .="TRUNCATE TABLE $user";
			if ($con->multi_query($sql)) {
			echo "<br>pedido realizado.";
			} else {
			echo "Error updating record: " . mysqli_error($con);;
			}
$borrar .="TRUNCATE TABLE $user";
if ($con->multi_query($borrar)) {
    echo "<br>Carrito actualizado";
    } else {
    echo "Error updating record: " . mysqli_error($con);;
    }

?>
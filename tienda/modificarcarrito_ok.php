<?php

require_once 'database.php';

$cantidad= $_POST["cantidad"];

session_start();
$user=$_SESSION["Trabajador"];
$id2=$_SESSION["id2"];
$preciototal=$_SESSION["precio"]*$cantidad;

echo "el id".$id2."el precio toral".$preciototal;


$sql = "UPDATE $user SET cantidad= '$cantidad', PrecioTotal='$preciototal' WHERE Id='$id2'";
    

    if (mysqli_query($con, $sql)) {
        echo "Datos introducidos en la base de datos <br>";
  } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($con);
  }

?>
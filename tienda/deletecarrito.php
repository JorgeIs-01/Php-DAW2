<?php 




require_once 'database.php';
session_start();
$id = $_GET['id'];  
  

$user=$_SESSION["Trabajador"];

echo "el registro que desea eliminar es".$id;

$sql = "DELETE FROM $user WHERE id  ='$id'";
mysqli_query($con, $sql); 

echo "se elimino correctamente";

?>
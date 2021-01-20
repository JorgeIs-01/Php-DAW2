<?php 




require_once 'database.php';

$id = $_GET['id'];  
  



echo "el registro que desea eliminar es".$id;

$sql = "DELETE FROM producto WHERE idProducto  ='$id'";
mysqli_query($con, $sql); 

echo "se elimino correctamente";
header("Location: productos.php");
?>

<?php
 
 require_once 'database.php';
 

 $newgmail=$_POST['newgmail'];

// Create connection

 // Check connection
 if ($con->connect_error) {
   die("Connection failed: " . $con->connect_error);
 }
 session_start();
 $nick= $_SESSION['Trabajador'];
 
 $sql = "UPDATE login SET gmail='$newgmail' WHERE Usuario='$nick'";

 echo $newname;

 if ($con->query($sql) === TRUE) {
   echo "<br>Nombre cambiada correctamente.";
 } else {
   echo "Error updating record: " . $con->error;
 }

echo $nick;

 
  $con->close();
  header("Location: perfil.php");
?>
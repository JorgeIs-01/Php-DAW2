
<?php
 $servername = "localhost";
 $username = "root";
 $password = "usbw";
 $dbname = "test";

 $newpassword=$_POST['newpassword'];

// Create connection
 $con = new mysqli($servername, $username, $password, $dbname);
 // Check connection
 if ($con->connect_error) {
   die("Connection failed: " . $con->connect_error);
 }
 session_start();
 $nick= $_SESSION['Trabajador'];
 echo $nick." el puto amo";
 $sql = "UPDATE login SET Contrasena='$newpassword' WHERE Usuario='$nick'";
 echo $newpassword;

 if ($con->query($sql) === TRUE) {
   echo "<br>Contraseña cambiada correctamente.";
 } else {
   echo "Error updating record: " . $con->error;
 }

 $con->close();
?>
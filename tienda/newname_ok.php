
<?php
 $servername = "localhost";
 $username = "root";
 $password = "usbw";
 $dbname = "tienda";

 $newname=$_POST['newname'];

// Create connection
 $con = new mysqli($servername, $username, $password, $dbname);
 // Check connection
 if ($con->connect_error) {
   die("Connection failed: " . $con->connect_error);
 }
 session_start();
 $nick= $_SESSION['Trabajador'];
 
 $sql = "UPDATE login SET Usuario='$newname' WHERE Usuario='$nick'";

 echo $newname;

 if ($con->query($sql) === TRUE) {
   echo "<br>Nombre cambiada correctamente.";
 } else {
   echo "Error updating record: " . $con->error;
 }

echo $nick;
 $sql2 = "ALTER TABLE $nick RENAME $newname;";
 if ($con->query($sql2) === TRUE) {
    echo "<br>Nombre base datos cambiada correctamente.";
  } else {
    echo "Error updating record: " . $con->error;
  }
  $nick2=$nick."ok";
  $newname2=$newname."ok";

  $sql3 = "ALTER TABLE $nick2 RENAME $newname2;";
 if ($con->query($sql3) === TRUE) {
    echo "<br>Nombre base datos cambiada correctamente.";
  } else {
    echo "Error updating record: " . $con->error;
  }
 
  $con->close();
 header("Location: logout_ok.php");
?>
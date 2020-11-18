<?php
    // require_once __DIR__ . '/db_config.php';
	
	$nick=$_POST["User"];
	$pass=$_POST["password"];
	
	session_start();
$_SESSION ["Trabajador"]=$nick;
	$logueado=0;

	 echo "El usuario:".$nick."<br>";
	


	

	$con = mysqli_connect('localhost', 'root', 'usbw', 'tienda') or die(mysql_error());
	if (!$con)
	{
		die("No se ha podido realizar la corrección ERROR:" . mysqli_connect_error() . "<br>");
	}
	else
	{
		mysqli_set_charset ($con, "utf8");
		echo "Se ha conectado a la base de datos" . "<br>";
	}
	
	
	header("Content-Type: text/html;charset=utf-8");


		// $nick = $_POST["nick"];
		// $password = $_POST["password"];

	
	
	$instruccion = "select count(*) as cuantos from login where Usuario = '$nick'";
	$resultado = mysqli_query($con, $instruccion);
		while ($fila = $resultado->fetch_assoc()) {
		$numero=$fila["cuantos"];
		}
	if($numero==0){
		echo "El usuario no existe";
	}
	else{
		echo "usuario correcto";
		$instruccion = "select Contrasena as cuantos from login where DNI = '$nick'";
		$resultado = mysqli_query($con, $instruccion);

		while ($fila = $resultado->fetch_assoc()) {
			$password2=$fila["cuantos"];
		}
		
		///////////////

		if (!strcmp($password2 , $pass) == 0){
				echo "Contraseña incorrecta";
				
		}
		
		else{
			echo "Login OK";
			$_SESSION["nick_logueado"]=$nick;
			?> 
			
			<a href="tienda.php">Acceder al menu</a>
			
			<?php
			
			
			$logueado=1;
		}
	}


?>
<?php
require_once 'database.php';
?>  

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Historialpedidos</title>
</head>
<body>
    
</body>
</html> 
<table border="1" >
		<tr>
       
			<td>id</td>
			<td>Nombre</td>
			<td>Cantidad</td>
			<td>Precio Total</td>
			
		</tr>
<?php
session_start();
$user=$_SESSION["Trabajador"];
$user2=$user."ok";
echo $user2;
    $consulta="SELECT * from $user2 ";
		$result=mysqli_query($con,$consulta);
		
		while($mostrar=mysqli_fetch_array($result)){
			?>

			<tr>
      <td><?php echo $mostrar['Id'] ?></td>
				<td><?php echo $mostrar['Usuario'] ?></td>
                <td><?php echo $mostrar['Cantidad'] ?></td>
                <td><?php echo $mostrar['PrecioTotalPedido'] ?></td>
			

         
       
		
		<?php 
			}
		?>
        <html>
        </table>
        </html>
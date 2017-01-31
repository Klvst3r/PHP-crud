<?php 
	
	require('sql/connection.php');
	
	$id = $_GET['id'];
	
	$query = "DELETE FROM usuarios WHERE id='$id'";
	
	$resultado = $mysqli->query($query);
	
?>

<html>
	<head>
		<title>PHP-CRUD</title>
	</head>
	
	<body>
	<h1>Eliminar Usuario</h1>
		<center>
			<?php 
				if($resultado>0){
				?>
				
				<h1>Usuario Eliminado</h1>
				
				<?php 	}else{ ?>
				
				<h1>Error al Eliminar Usuario</h1>
				
			<?php	} ?>
			<p></p>		
			
			<a href="index.php">Regresar</a>
			
		</center>
	</body>
</html>
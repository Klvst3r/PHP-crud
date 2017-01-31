<?php 
	
	require('sql/connection.php');
	
	$usuario = $_POST['usuario'];

	$password = $_POST['password'];

	$email = $_POST['email'];
	
	$query = "INSERT INTO usuarios (usuario, contrasenia, email) VALUES ('$usuario','$password','$email')";
	
	$resultado = $mysqli->query($query);
	
?>

<html>
	<head>
		<title>PHP-CRUD</title>
	</head>
	<body>
	<h1>Guardar Usuario</h1>
		<center>	
			
			<?php if($resultado>0){ ?>
				<h1>Usuario Guardado</h1>
				<?php }else{ ?>
				<h1>Error al Guardar Usuario</h1>		
			<?php	} ?>		
			
			<p></p>	
			
			<a href="index.php">Regresar</a>
			
		</center>
	</body>
	</html>	
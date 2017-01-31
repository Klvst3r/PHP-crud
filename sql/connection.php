<?php
	
	$mysqli=new mysqli("localhost","dev","desarrollo","php-crud"); 
	
	if(mysqli_connect_errno()){
		echo 'Conexion Fallida : ', mysqli_connect_error();
		exit();
	}
	
?>
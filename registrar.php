<?php 
	include 'conexion.php';
	$nombre = $_POST['nombre'];
	$email = $_POST['email'];
	$contrasena = $_POST['contrasena'];
	$repetir = $_POST['repetir'];

	if ($contrasena != $repetir) {
		echo "Las contraseñas no coinciden";
		return;
	}

	$sql = "INSERT INTO usuarios(nombre, correo, contrasena) VALUES('$nombre', '$email', '$contrasena')";

	mysqli_query($conexion, $sql);

	header('Location: '. 'http://localhost/proyecto/home.php');
 ?> 
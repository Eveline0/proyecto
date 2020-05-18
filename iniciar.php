<?php 
include 'conexion.php';

if (isset($_POST['email'])){
	$correo=$_POST['email'];
	$contrasena=$_POST['contrasena'];
	$sql="select * from usuarios where correo='$correo'";
	$usuario=mysqli_fetch_array(mysqli_query($conexion,$sql));
	if (isset($usuario)) {
		if ($usuario['contrasena']==$contrasena) {
			header('Location: '. 'http://localhost/proyecto/home.php');
		} else {
			echo "La contraseña es incorrecta";
		}
	} else {
		echo "el usuario no existe";
	}

} ?>
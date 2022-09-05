<?php 
	include 'conexion.php';
	$user = $_POST['lg_username'];
	$pass = sha1($_POST['lg_password']);

	$query = "SELECT * FROM usuario WHERE mail = '$user' AND password = '$pass'";
	$res = mysqli_query($mysqli, $query);
	while ($fila = mysqli_fetch_array($res) ) {
		session_start();
		$_SESSION['id_usuario'] = $fila[0];
		$_SESSION['nombre'] = $fila[1];
		$_SESSION['apellido'] = $fila[2];
		$_SESSION['mail'] = $fila[4];
		$_SESSION['telefono'] = $fila[5];	


		header("Location:../Paginas/home.php");
		exit();
	}
	
 ?>
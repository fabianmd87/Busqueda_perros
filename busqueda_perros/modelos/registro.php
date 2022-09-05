<?php 
	include 'conexion.php';
	$nombre = $_POST['reg_nombre'];
	$apellido = $_POST['reg_ape'];
	$mail = $_POST['reg_email'];
	$pass = sha1($_POST['reg_password']);
	$tel = $_POST['reg_tel'];

	$query = "INSERT INTO usuario(nombre,apellido,password,mail,telefono) VALUES('$nombre', '$apellido','$pass','$mail', '$tel')";
	if (mysqli_query($mysqli, $query) ) {
		header('Location: ../Paginas/login.php');
		echo '<script language="javascript">alert("Se registro correctamente");</script>'; 
	}
	else{
		header('Location: ../Paginas/Registro.php');
		echo '<script language="javascript">alert("No se pude registrar intente nuevamente");</script>'; 

	}
 ?>
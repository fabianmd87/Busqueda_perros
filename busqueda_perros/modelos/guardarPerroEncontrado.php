<?php

	include("conexion.php");

	$accion = $_POST["accion"];
	$target_dir = "../images/";
	$target_file = $target_dir . basename($_FILES["imagen_perros"]["name"]);
	move_uploaded_file($_FILES["imagen_perros"]["tmp_name"], $target_file);

	$contacto = $_REQUEST["txt_telefono"];
	$sexo = $_REQUEST["optradio"];
	$barrio = $_REQUEST["barrio"];
	$raza = $_REQUEST["raza"];
	$apodo = $_REQUEST["apodo"];
	$id_usuario = $_REQUEST["id_usuario"];
	
	if($sexo == 'hembra'){

		$sexo = 'H';
	}else{

		$sexo = 'M';
	}
	if($accion == "insertar"){

	$query = "INSERT INTO perros_encontrados(id_usuario,imagen,apodo,id_raza,sexo,id_barrio,contacto) VALUE('$id_usuario','$target_file','$apodo',$raza,'$sexo',$barrio,'$contacto')";
    }else{

	$query = "UPDATE perros_encontrados SET apodo= '$apodo' ,id_raza = $raza , sexo= '$sexo' ,id_barrio= $barrio ,contacto= $contacto WHERE id=".$_REQUEST["id_perro"];

    }
	$mysqli->query($query);

	header("Location: /busqueda_perros/Paginas/perros_encontrados.php");
	die();

?>
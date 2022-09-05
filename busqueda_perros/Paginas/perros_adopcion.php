<?php


/*Nos conectamos a la base*/
include("../modelos/conexion.php");
$query = "SELECT pa.imagen, pa.edad as edad, r.descripcion as raza, b.descripcion as barrio, pa.contacto as contacto, pa.sexo as sexo,  pa.id, u.id as id_usuario
FROM perros_adopcion pa
INNER JOIN raza r ON r.id = pa.id_raza
INNER JOIN barrio b ON b.id = pa.id_barrio
INNER JOIN usuario u ON u.id = pa.id_usuario
ORDER BY pa.id ASC";

$resultado = $mysqli->query($query);


?>


<!DOCTYPE html>
<html lang="es">  
  <head>    
    <title>PATITAS CORDOBA</title>  
		<link rel="icon" href="../images/patita.ico" />
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <meta charset="UTF-8"> <!-- No rompe los acentos -->
    <meta name="title" content="Título de la WEB">
    <meta name="description" content="Descripción de la WEB">  

<style>
   body{
   	width: 100%;
   }
	.carousel-inner img {
      height: 500px;
	  width: 100%;
  }
  
  .carousel-slide {
      height: 500px;
	  width: 100%;
  }
  li ul li{ /* no muestra el ul que esta dentro del li*/
  	display: none;
  }
  ul li:hover ul li{ /*cuando pasa el mouse sobre el li, muestra el ul que esta dentro */
  	display: block;
  	position: absolute;
  	width: 75px;
  	text-align: center;
  	text-decoration:none;
  	color: white; 
  	margin-left: -30px;
  	background-color: #212529;
  	z-index: 10;
  }
  li a{/*saca las decoraciones y le da color a la letra*/
  	color: white;
  }
  li a:hover{
  	text-decoration:none;
  	color: white; 
  }
  </style>

   <!-- <link href="http://dominio.com/hoja-de-estilos.css" rel="stylesheet" type="text/css"/> -->
  </head>  
  <body>    
    <header>
     
	  <div class="content-fluid"> <!-- Todo el contenido de la pagina va en ese DIV -->
	  
		
		<nav class="navbar navbar-expand-sm bg-dark navbar-dark"> <!-- Todo lo que va dentro del NAV -->
		
				<!-- Links -->
	
				<div class="col-xl-11">
				
					<ul class="navbar-nav"> <!-- Listas desordenadas -->
				
						<li class="nav-item">
							<a class="nav-link" href="../index.php">HOME</a>
						</li>
						<li class="nav-item">  <!-- Contenido de cada link -->
							<a class="nav-link" href="perros_perdidos.php">Perros perdidos</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="perros_encontrados.php">Perros encontrados</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="perros_adopcion.php">Perros en adopción</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="consejos_vete.php">Consejos veterinarios</a>
						</li>
					<ul>
					
				</div>

				
        	<?php 
        	session_start();
					if( isset($_SESSION['mail'])){	?> <!-- pregunta si la variable session existe, si existe muesta lo que tiene la variable session-->
						<div class="col-md-1">
							<ul class="navbar-nav">
								<li class="nav-item">
									<a href="" class="nav-link user"> <?php  echo $_SESSION['nombre']; ?></a> <!-- muestra lo que esta en la variable session -->
									<ul>
										<li>
											<a href="../modelos/cerrar.php">Cerrar sesión</a>
										</li>
									</ul>
								</li>
							</ul>
							
						</div>
					<?php  }
					else{ ?> <!--Sino muestra el boton login-->
						<div class="col-md-1 log">
    						<a href="login.php"> <button class="btn btn-primary">Login</button> </a>
      					</div>	
				<?php } ?>
      </div>
				
				<!-- <div class="col-xl-1">
					<button class="btn btn-primary">SALIR</button>
				</div> -->
			
		</nav>

	<?php 
			if( isset($_SESSION['mail'])){	?>
			<div class="container">
				<div class="row">	
					<div class="mx-auto">
						<a href="Agregar_perros_adopcion.php">
							<button type="button" style= "width: 694px;height: 38px;" class="btn btn-success ribbon">AGREGAR PERRO</button >
						</a>	
					</div>
				</div>
			</div>
			<?php  }?>
		
		<div class="row" style="margin-top:15px">
		
			<?php

				$contador = 0;
				while($fila = $resultado->fetch_object()){ 

					$id_modal = "myModal".$contador;
					$imagen = "../../busqueda_perros/images/".$fila->imagen;
					$raza = $fila->raza;
					$barrio = $fila->barrio;
					$contacto = $fila->contacto;
					$sexo = $fila->sexo;

					if($sexo == "M"){
						$sexo = "MACHO";
					}else{
						$sexo = "HEMBRA";
					}

					$contador = $contador + 1;

			?>
			<form method="POST" action="Agregar_perros_adopcion.php">
				<br>
				<div class="col-xl-4">
						<div class="card text-white bg-dark border-danger"  style="width: 400px; height: 420px;">
					  <img class="card-img-top rounded" src= <?php echo $imagen  ?>  alt="Card image">
					  <div class="card-body">
						<p> <?php echo $fila->edad ?> </p>
						<a href="#" class="btn btn-primary" data-toggle="modal" data-target=<?php echo "#".$id_modal  ?>>  <i class="fa fa-plus-square"></i> Información</a>

						<?php
						if( isset($_SESSION['id_usuario'])){	
							if($_SESSION['id_usuario'] == $fila->id_usuario){
							?>
							<input type="submit" name="btnEditar" class="btn btn-warning" value="Editar">
							<input type="submit" name="btnEliminar" class="btn btn-danger" onclick="return confirm('Desea eliminar el perro en adopción?');" value="Eliminar">
							<input type="hidden" name="id_perro" value= <?php echo $fila->id ?>>

						<?php 
							}
						} ?>
						
					  </div>
					</div>
				</div>	
			</form>

		
			<!-- Los modales -->
			<div class="modal" id=<?php echo $id_modal ?>>
				  <div class="modal-dialog">
					<div class="modal-content">

					  <!-- Modal Header -->
					  <div class="modal-header  bg-dark border-primary">
						<h4 class="modal-title text-white">RAZA: <?php echo $raza ?></h4>
						<button type="button" class="close" data-dismiss="modal">&times;</button>
					  </div>

					  <!-- Modal body -->
					  <div class="modal-body">
						Sexo: <?php echo $sexo ?> <br></br>
						Barrio: <?php echo $barrio ?> <br></br>
						Contacto: <?php echo $contacto ?>
					  </div>

					  <!-- Modal footer -->
					  <div class="modal-footer  bg-dark">
						<button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
					  </div>

					</div>
				  </div>
			</div>
	

			<?php
			
				}
			?>		 

		</div>	
	  
    </header>    
	
    <footer>
	
      <h4></h4>
	  
    </footer>
  </body>  
</html>
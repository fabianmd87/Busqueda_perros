<?php session_start(); ?> <!-- abre la session -->
<!DOCTYPE html>
<html lang="es">  
  <head>    
    <title>PATITAS CORDOBA</title>  
		<link rel="icon" href="../busqueda_perros/images/patita.ico" />
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="../Assets/js/principal.js"></script>
    <meta charset="UTF-8"> <!-- No rompe los acentos -->
    <meta name="title" content="Título de la WEB">
    <meta name="description" content="Descripción de la WEB">    
   <!-- <link href="http://dominio.com/hoja-de-estilos.css" rel="stylesheet" type="text/css"/> -->
	
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
  </head>  
  <body>    
    <header>
     
	  <div class="content-fluid"> <!-- Todo el contenido de la pagina va en ese DIV -->
	  
		
		<nav class="navbar navbar-expand-sm bg-dark navbar-dark"> <!-- Todo lo que va dentro del NAV -->
		
				<!-- Links -->
	
				<div class="col-xl-11">
				
					<ul class="navbar-nav"> <!-- Listas desordenadas -->
						<li class="nav-item">
							<a class="nav-link active" href="../index.php">HOME</a>
						</li>
						
						
						<li class="nav-item">  <!-- Contenido de cada link -->
							<a class="nav-link" href="../Paginas/perros_perdidos.php">Perros perdidos</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="../Paginas/perros_encontrados.php">Perros encontrados</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="../Paginas/perros_adopcion.php">Perros en adopción</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="../Paginas/consejos_vete.php">Consejos veterinarios</a>
						</li>
						
					<ul>
					
				</div>
				<?php 
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
				
			
		</nav>
		
		
		<div id="demo" class="carousel slide" data-ride="carousel">

		  <!-- Indicators -->
		  <ul class="carousel-indicators">
			<li data-target="#demo" data-slide-to="0" class="active"></li>
			<li data-target="#demo" data-slide-to="1"></li>
		  </ul>

		  <!-- The slideshow -->
		  <div class="carousel-inner">
			<div class="carousel-item active">
			  <img src="../images/portada-home1.jpg" width="100" height="100">
			</div>
			<div class="carousel-item">
			  <img src="../images/portada-home2.jpg"  width="100" height="100">
			</div>
		  </div>

		  <!-- Left and right controls -->
		  <a class="carousel-control-prev" href="#demo" data-slide="prev">
			<span class="carousel-control-prev-icon"></span>
		  </a>
		  <a class="carousel-control-next" href="#demo" data-slide="next">
			<span class="carousel-control-next-icon"></span>
		  </a>

		</div>
		
		
		<div id="accordion">

		  <div class="card">
			<div class="card-header bg-dark">
			  <a class="card-link" data-toggle="collapse" href="#collapseOne">
				¿QUIÉNES SOMOS?
			  </a>
			</div>
			<div id="collapseOne" class="collapse show" data-parent="#accordion">
			  <div class="card-body">
				Somos una Asociación Civil sin Fines de lucro, formada por un grupo de voluntarios de Córdoba Capital, Argentina, que rescatamos animales en situación de calle, les brindamos atención veterinaria, un hogar provisorio, comida y mucho amor, y una vez que están recuperados les damos la oportunidad de encontrar una nueva familia que los quiera y los elija para siempre.
			  </div>
			</div>
		  </div>

		  <div class="card">
			<div class="card-header bg-dark">
			  <a class="collapsed card-link" data-toggle="collapse" href="#collapseTwo">
				NUESTRA MISIÓN
			  </a>
			</div>
			<div id="collapseTwo" class="collapse" data-parent="#accordion">
			  <div class="card-body">
				Nuestra idea es ayudar a los perros de la calle, para sacarlos de situaciones de riesgo en la que se encuentran. Para ello debemos dejar en claro que nuestra tarea comienza con el rescate, continúa con los tratamientos necesarios para poder mejorarles su calidad de vida y concluye una vez que ellos son adoptados y ubicados definitivamente con una familia responsable que pueda quererlos y hacerse cargo de ellos como un integrante más de la misma.
			  </div>
			</div>
		  </div>

		  <div class="card">
			<div class="card-header bg-dark">
			  <a class="collapsed card-link" data-toggle="collapse" href="#collapseThree">
				CONTACTO
			  </a>
			</div>
			<div id="collapseThree" class="collapse" data-parent="#accordion">
			  <div class="card-body">
				<div class="media border p-3">
				 <img src="../images/patita.png" class="mr-3 mt-3 rounded-circle" style="width:60px;">
				  <div class="media-body">
					<h5>TELEFONO:  <small><i>+54(0351) 152666777</i></small></h5>
					<h5>DIRECCIÓN:  <small><i>Montevideo 63 - Nueva Córdoba - Capital</i></small></h5>
					<h5>EMAIL:  <small><i>patitas@gmail.com</i></small></h5>
					<h5>FACEBOOK:  <img src="../images/icon-face.jpg" href="www.facebook.com" class="mr-3 mt-3 rounded-circle" style="width:90px;" ></h5>
					<h5>TWITTER:  <small><i>    </i></small></h5>
					<h5>INSTAGRAM:  <small><i>  </i></small></h5>
				  </div>
				</div>
			  </div>
			</div>
		  </div>

		</div>
		
	  </div>
		
    </header>    
	
    <footer>
	
      <h4></h4>
	  
    </footer>
  </body>  
</html>
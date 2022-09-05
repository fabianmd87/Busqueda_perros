<!DOCTYPE html>
<html lang="es">  
  <head>    
    <title>PATITAS CORDOBA</title>  
		<link rel="icon" href="../images/patita.ico" />  

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="../busqueda_perros/Assets/js/principal.js"></script>
    <meta charset="UTF-8"> <!-- No rompe los acentos -->
    <meta name="title" content="Título de la WEB">
    <meta name="description" content="Descripción de la WEB">    
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
				
			
		</nav>
		
		<div id="accordion">

		  <div class="card">
			<div class="card-header">
			  <a class="card-link" data-toggle="collapse" href="#collapseOne">
				¿CUÁNDO DESPARASITAR A MI PERRO?
			  </a>
			</div>
			<div id="collapseOne" class="collapse show" data-parent="#accordion">
			  <div class="card-body">
					Si el mismo está en el campo en contacto con ganado u otros animales, o si el perro pasea y juega en parques con otros perros, se recomienda eliminar los parásitos cada mes o cada 2 meses. Para perros totalmente domésticos o con menor riesgo, se recomienda cada 3 o 4 meses.
			  </div>
			</div>
		  </div>

		  <div class="card">
			<div class="card-header">
			  <a class="collapsed card-link" data-toggle="collapse" href="#collapseTwo">
				¿ES BUENO CORTARLE EL PELO A MI PERRO EN VERANO?
			  </a>
			</div>
			<div id="collapseTwo" class="collapse" data-parent="#accordion">
			  <div class="card-body">
					No es necesario rapar a todos los perros, sobre todo si tiene la piel rosita y poco pelo, puesto que quedarán desprotegidos y pueden quemarse por no tener una capa protectora.
			  </div>
			</div>
		  </div>

			<div class="card">
				<div class="card-header">
					<a class="collapsed card-link" data-toggle="collapse" href="#collapseTwo">
					¿CADA CUANTO SE LO PUEDE BAÑAR?
					</a>
				</div>
				<div id="collapseTwo" class="collapse" data-parent="#accordion">
					<div class="card-body">
						Si tan malo fuera bañar con frecuencia a los perros, todos esos perros que vemos en las revistas y exposiciones caninas estarían ya muertos. Muchos de esos perros se bañan religiosamente cada una o dos semanas y suelen ser los que mejor y más sana tienen la piel y el pelo.
					</div>
				</div>
				</div>

		  
			<div class="card">
				<div class="card-header">
					<a class="collapsed card-link" data-toggle="collapse" href="#collapseTwo">
					MI PERRO SE RASCA MUCHO...
					</a>
				</div>
				<div id="collapseTwo" class="collapse" data-parent="#accordion">
					<div class="card-body">
						Existen muchos parásitos internos que pueden provocar picor, aunque los más comunes son los conocidos cómo “gusaneras“. Es cuando un insecto pone sus huevos en una herida de nuestro perro y las larvas crecen ahí.
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
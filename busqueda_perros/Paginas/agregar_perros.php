<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<?php

/*Nos conectamos a la base*/
include("../modelos/conexion.php");
session_start();
$id_usuario = $_SESSION["id_usuario"];

if(isset($_POST["btnEliminar"]))
  {

    $queryEliminar = "DELETE FROM perros_perdido WHERE id=".$_POST["id_perro"];
    $mysqli->query($queryEliminar);
    header("Location: /busqueda_perros/Paginas/perros_perdidos.php");
    die();

  }



$contacto = "";
$nombre = "";
$barrio = 0;
$raza = 0;
$sexo = 0;
$id_perro = "";

/*Averguar si eesta editando o agregando*/
if(isset($_POST["id_perro"])){
 
 /*Si estas editando*/
  $queryEdit = "SELECT * FROM perros_perdido WHERE id =".$_POST["id_perro"];
  $resultado_editar = $mysqli->query($queryEdit);
  $fila_editar = $resultado_editar->fetch_object();

  $nombre = $fila_editar->nombre;
  $contacto = $fila_editar->contacto;
  $barrio = $fila_editar->id_barrio;
  $raza = $fila_editar->id_raza;
  $sexo = $fila_editar->sexo;
  $id_perro = $_POST["id_perro"];

  $accion = "editar";


}else{

  $accion = "insertar";

}

$query = "SELECT * FROM barrio ORDER BY descripcion ASC";

$resultado = $mysqli->query($query);

$query = "SELECT * FROM raza ORDER BY descripcion ASC";

$resultado_raza = $mysqli->query($query);

?>


<!DOCTYPE html>
<html>
<head>   
  <title>PATITAS CORDOBA</title>  
  <link rel="icon" href="../images/patita.ico" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">

  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <meta charset="UTF-8"> <!-- No rompe los acentos -->
  <meta name="title" content="Título de la WEB">
  <meta name="description" content="Descripción de la WEB">    
 <!-- <link href="http://dominio.com/hoja-de-estilos.css" rel="stylesheet" type="text/css"/> -->

  <!-- Google Fonts -->
  <link href='https://fonts.googleapis.com/css?family=Passion+One' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Oxygen' rel='stylesheet' type='text/css'>
</head>
<body>

    
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

  <div class="container-fluid">
    
  <form method="POST" enctype="multipart/form-data" action="../modelos/guardarPerroPerdido.php">

    <div class="row">

      <div class="col-md-4"></div>
      <div class="col-md-3">
         <h3 class="text-center">PERROS PERDIDOS</h3>
      </div>

    </div>

    <div class="row">

        <div class="col-md-6">      
            <div class="form-check">

              <h5>SEXO</h5>
        
              <div class="radio">
                <label><input type="radio" id="H" name="optradio" value="hembra" checked>HEMBRA</label>
              </div>
              <div class="radio">
                <label><input type="radio" id="M" name="optradio" value="macho">MACHO</label>
              </div>

            </div>

            <?php

            echo "<script language='javascript'> 

                    if('$sexo' == 'M'){
                        $('#M').attr('checked',true);
                      }else{
                        $('#H').attr('checked',true);
                      }
                    
                           
                  </script>";

            ?>


        </div>

        <div class="col-md-6">

            <h5>RAZA</h5>
            <select name="raza" id="select_raza" class="form-control" required="required" style= "width: 250px;height: 38px;">
                      <?php
                        
                        while ($fila = $resultado_raza->fetch_object()) {
                          echo '<option value="'.$fila->id.'">'.$fila->descripcion.'</option>';
                        }

                        echo "<script language='javascript'> 

                          //Esta linea coloca el select en el item correcto

                          $('#select_raza option[value='+ $raza +']').attr('selected',true);
                           
                          </script>";
                      ?>

            </select>

        </div>

      </div>

      <br>

       <div class="row" style="margin-left: 5px">
        
        <div class="col-md-3">

          <h5>CONTACTO</h5>
          
           <input type="text" name="txt_telefono" class="form-control" placeholder="Número Telefónico" required="" value= <?php echo $contacto ?> >

        </div>

        <div class="col-md-3"></div>

        <div class="col-md-6" style="margin-left: -11px">
          
          <div class="form-group">
            <h5>BARRIO</h5>
                <label>
                    <select name="barrio" id="select_barrios" class="form-control" required="required" style= "width: 250px;height: 38px;">
                      <?php
                        
                        while ($fila = $resultado->fetch_object()) {
                          echo '<option value="'.$fila->id.'">'.$fila->descripcion.'</option>';
                        }

                        echo "<script language='javascript'> 

                          //Esta linea coloca el select en el item correcto

                          $('#select_barrios option[value='+ $barrio +']').attr('selected',true);
                           
                          </script>";
                      ?>

                  </select>
                </label>
            </div>

        </div>


      </div>

      <div class="row"  style="margin-left: 2px">

        <div class="col-md-3">

          <h5>NOMBRE</h5>
          
           <input type="text" name="nombre" class="form-control" placeholder="" value= <?php echo $nombre ?>>

        </div>

        <div class="col-md-3"></div>
        
        <div class="col-md-6">
       
          <div class="file-field">

            <div class=" btn-sm float-left">
            
              <input name="imagen_perros" id="imagen_perros" type="file">
            </div>
          
          </div>
          
        </div>

      </div>

      <br>

      <div class="row"  style="margin-left: 5px">
        
        <div class="col-md-6">
          
          <div class="form-group">
            
            <input type="hidden" name= "accion" value= <?php echo $accion ?>>
            <input type="hidden" name= "id_perro" value= <?php echo $id_perro ?>>
            <input type="hidden" name= "id_usuario" value= <?php echo $id_usuario ?>>
            <input type="submit" class="btn btn-primary ribbon" value="AGREGAR" name="btnAgregar">

            <a href="perros_perdidos.php"><input type="button" class="btn btn-primary ribbon" value="VOLVER" name="btnAgregar"></a>

          </div>
          
        </div>
        
      </div>

  </form>   

  </div>


</body>
</html>
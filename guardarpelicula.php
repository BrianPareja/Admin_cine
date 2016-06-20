<?php 
require_once("header.php"); 
require_once("funciones.php");
$accion=leerParam("accion","");
$id_Peli=leerParam("id_Peli","");
$nombre_Peli=leerParam("nombre_Peli","");
$duracion_Peli=leerParam("duracion_Peli","");
$estreno_Peli=leerParam("estreno_Peli","");
$xc = conectar();


if ($accion=="crear") 
{

  $sqlcrear = "INSERT INTO dbcine.peliculas(nombre_Peli,duracion_Peli,estreno_Peli, id_Director) VALUES ('$nombre_Peli', '$duracion_Peli', '$estreno_Peli','1');";
  mysqli_query($xc,$sqlcrear);
   desconectar($xc);
  //echo "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa";
 //echo $sqlcrear;
 //echo $accion;
 //die();
?>
 <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
  <div class="row">
                <div class="col-md-12">
                    <div class="jumbotron">
                        <h2>Pelicula Creada Correctamente</h2>
                                                <p>
                            <a class="btn btn-primary btn-lg" href="mostrarpeliculas.php" role="button">Regresar a Peliculas</a>
                        </p>
                    </div>
                </div>
            </div>
            </div>
            </div>
            </div>
            </div>
<?php
}



if ($accion=="editar") 
{
	    $sqleditar = "UPDATE dbcine.peliculas SET  nombre_Peli='$nombre_Peli', duracion_Peli='$duracion_Peli',estreno_Peli='$estreno_Peli',id_Director='1' WHERE id_Peli ='$id_Peli';";

	    mysqli_query($xc,$sqleditar);
   desconectar($xc);
 // echo "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa"; 
  //echo $sqleditar;
  //echo $accion;
  // die();
   ?>
 <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
  <div class="row">
                <div class="col-md-12">
                    <div class="jumbotron">
                        <h1>Pelicula Editada Correctamente</h1>
                                                <p>
                            <a class="btn btn-primary btn-lg" href="mostrarpeliculas.php" role="button">Regresar a Peliculas</a>
                        </p>
                    </div>
                </div>
            </div>
            </div>
            </div>
            </div>
            </div>
<?php
}

if ($accion="eliminar") {
  	$sqleliminar ="DELETE FROM dbcine.peliculas WHERE id_Peli='$id_Peli';";
	 mysqli_query($xc,$sqleliminar);
   desconectar($xc);
   //echo "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa";
  //echo $sqleliminar;
  // echo $id_Peli;
  //echo $accion;
  //die();
   ?>
 <meta http-equiv="Refresh" content="0;url=mostrarpeliculas.php">
<?php

}






?>


<script src="assets/js/jquery-1.10.2.js"></script>
      <!-- BOOTSTRAP SCRIPTS -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="assets/js/jquery.metisMenu.js"></script>
      <!-- CUSTOM SCRIPTS -->
    <script src="assets/js/custom.js"></script>
</body>
</html>
<?php
require_once("header.php");
require_once("funciones.php");
$accion=leerParam("accion","");
$id_Resena=leerParam("id_Resena","");
$sinopsis_Resena=leerParam("sinopsis_Resena","");
$Peliculas_id_Peli=leerParam("Peliculas_id_Peli","");
$url_trailer=leerParam("url_trailer","");
$url_latino1=leerParam("url_latino1","");;
$url_latino2=leerParam("url_latino2","");
$url_espanol=leerParam("url_espanol","");
$url_sub=leerParam("url_sub","");
$xc = conectar();

if ($accion=="crear")
{

  $sqlcrear = "INSERT INTO dbcine.resena(sinopsis_Resena, Peliculas_id_Peli, url_trailer, url_latino1, url_latino2, url_espanol, url_sub) VALUES ( '$sinopsis_Resena', '$Peliculas_id_Peli','$url_trailer', '$url_latino1', '$url_latino2', '$url_espanol', '$url_sub');";
  mysqli_query($xc,$sqlcrear);
   desconectar($xc);
//echo "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa";
//echo $sqlcrear;
// echo $accion;
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
  $sqleditar = "UPDATE dbcine.resena SET  sinopsis_Resena='$sinopsis_Resena', Peliculas_id_Peli='$Peliculas_id_Peli', url_trailer='$url_trailer',url_latino1='$url_latino1', url_latino2='$url_latino2', url_espanol='$url_espanol', url_sub='$url_sub' WHERE `id_Resena`='$id_Resena';";

	    mysqli_query($xc,$sqleditar);
   desconectar($xc);
  //echo "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa";
//  echo $sqleditar;
//  echo $accion;
//   die();
   ?>
 <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
  <div class="row">
                <div class="col-md-12">
                    <div class="jumbotron">
                        <h1>Reseña Editada Correctamente</h1>
                                                <p>
                            <a class="btn btn-primary btn-lg" href="mostrarResena.php" role="button">Regresar a Reseña</a>
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
  	$sqleliminar ="DELETE FROM dbcine.resena WHERE id_Resena='$id_Resena';";
	 mysqli_query($xc,$sqleliminar);
   desconectar($xc);
  // echo "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa";
//  echo $sqleliminar;
//   echo $id_Resena;
//   echo $accion;
//  die();
   ?>
 <meta http-equiv="Refresh" content="0;url=mostrarResena.php">
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

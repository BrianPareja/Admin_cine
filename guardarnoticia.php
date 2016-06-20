<?php 
require_once("header.php"); 
require_once("funciones.php");
$accion=leerParam("accion","");
$id_Noticia=leerParam("id_Noticia","");
$titulo_Noticia=leerParam("titulo_Noticia","");
$subtitulo_Noticia=leerParam("subtitulo_Noticia","");
$fecha_Noticia=leerParam("fecha_Noticia","");
$imagen_Noticia=leerParam("imagen_Noticia","");
$cuerpo_Noticia=leerParam("cuerpo_Noticia","");
$url_Noticia=leerParam("url_Noticia","");
$tags=leerParam("tags","");
$xc = conectar();
//echo "aaaaaaaaaaaaaaaaaaaaaaaaaabbbbbbbbbbbbbbbaaaaaa";
//echo $accion;
//echo $id_Noticia;
//echo $id_Noticia;
//echo $accion;
//die();

if ($accion=="crear") 
{
	$sqlcrear="INSERT INTO dbcine.noticias (titulo_Noticia, subtitulo_Noticia, fecha_Noticia, cuerpo_Noticia, url_Noticia, tags) VALUES ('$titulo_Noticia', '$subtitulo_Noticia', '$fecha_Noticia', '$cuerpo_Noticia', '$url_Noticia', '$tags');";
	mysqli_query($xc,$sqlcrear);
   desconectar($xc);
  	 //echo "aaaaaaaaaaaaaaaaaaaaaaaaaabbbbbbbbbbbbbbbaaaaaa";
	//echo $accion;
	//echo $sqlcrear;
   ?>
 <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
  <div class="row">
                <div class="col-md-12">
                    <div class="jumbotron">
                        <h2>Noticia Creada Correctamente</h2>
                                                <p>
                            <a class="btn btn-primary btn-lg" href="mostrarnoticia.php" role="button">Regresar a Noticias</a>
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
$sqleditar = "UPDATE dbcine.noticias SET  titulo_Noticia='$titulo_Noticia', subtitulo_Noticia='$subtitulo_Noticia',fecha_Noticia='$fecha_Noticia',imagen_Noticia='$imagen_Noticia', cuerpo_Noticia='$cuerpo_Noticia',url_Noticia='$url_Noticia' WHERE id_Noticia ='$id_Noticia';";

	    mysqli_query($xc,$sqleditar);
   desconectar($xc);
  //echo "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa"; 
  //echo $sqleditar;
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
                        <h2>Noticia editada Correctamente</h2>
                                                <p>
                            <a class="btn btn-primary btn-lg" href="mostrarnoticia.php" role="button">Regresar a Noticias</a>
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
if ($accion=="eliminar") 
{
$sqleliminar ="DELETE FROM dbcine.noticias WHERE id_Noticia='$id_Noticia';";
	 mysqli_query($xc,$sqleliminar);
   desconectar($xc);
   //   echo $id_Noticia;
  //echo $accion;
  //die();
   ?>
 <meta http-equiv="Refresh" content="0;url=mostrarnoticia.php">
<?php
}
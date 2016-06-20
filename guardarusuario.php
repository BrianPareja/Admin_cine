<?php 
require_once("header.php"); 
require_once("funciones.php");
$accion=leerParam("accion","");
$id_Perfil=leerParam("id_Perfil","");
$usuario_Perfil=leerParam("usuario_Perfil","");
$clave_Perfil=leerParam("clave_Perfil","");
$nombre_Perfil=leerParam("nombre_Perfil","");
$apellidoPaterno_Perfil=leerParam("apellidoPaterno_Perfil","");
$apellidoMaterno_Perfil=leerParam("apellidoMaterno_Perfil","");
$nacionalidad_Perfil=leerParam("nacionalidad_Perfil","");
$xc = conectar();

if ($accion=="crear") 
{
$sqlcrear="INSERT INTO dbcine.Perfil(usuario_Perfil,clave_Perfil,nombre_Perfil,apellidoPaterno_Perfil,apellidoMaterno_Perfil,nacionalidad_Perfil)
VALUES ( '$usuario_Perfil','$clave_Perfil', '$nombre_Perfil','$apellidoPaterno_Perfil', '$apellidoMaterno_Perfil', '$nacionalidad_Perfil');";
mysqli_query($xc,$sqlcrear);
desconectar($xc);
//echo "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaasssssssssssa";
//echo $sqlcrear;
//echo $accion;
 ?>
 <div id="page-wrapper">
  <div id="page-inner">
   <div class="row">
    <div class="col-md-12">
 <div class="row">
     <div class ="col-md-12">
      <div class ="jumbotron">
       <h2>Usuario Creado Correctamente</h2>
       <p>
       <a class="btn btn-primary btn.lg" href="mostrarperfil.php" role="button">Regresar a Perfil</a>
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
if($accion=="editar")
{
$sqleditar = "UPDATE dbcine.Perfil SET  usuario_Perfil='$usuario_Perfil', clave_Perfil='$clave_Perfil',nombre_Perfil='$nombre_Perfil', apellidoPaterno_Perfil='$apellidoPaterno_Perfil',apellidoMaterno_Perfil='$apellidoMaterno_Perfil',nacionalidad_Perfil='$nacionalidad_Perfil'
WHERE  'id_Perfil'='$id_Perfil';";

             
mysqli_query($xc,$sqleditar);
desconectar($xc);

//echo "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaasssssssssssa";
//echo $sqleditar;
//echo $accion;
//die();
	?> 

<div id="page-wrapper">
	<div  id="page-inner">
		<div class="row">
			<div class = "col-md-12">
<div class="row">
	<div class="col-md-12">
       <div class= "jumbotron">
       	<h1>Editar Usuario Correctamente</h1>
       	<p>   <a class="btn btn-primary btn-lg" href="mostrarperfil.php" role="button">Regresar a Perfil</a>
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
  	$sqleliminar ="DELETE FROM dbcine.Perfil WHERE id_Perfil='$id_Perfil';";
	 mysqli_query($xc,$sqleliminar);
   desconectar($xc);
   //echo "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa";
  //echo $sqleliminar;
  // echo $id_Peli;
  //echo $accion;
  //die();
   ?>
    <meta http-equiv="Refresh" content="0;url=mostrarperfil.php">

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
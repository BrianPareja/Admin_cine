<?php require_once ("mheader.php");
 
 require_once("funciones.php");
$xc = conectar();
$sql="SELECT * FROM dbcine.peliculas;";
$res=mysqli_query($xc,$sql);

desconectar($xc);
?>
<?php
  require_once("funciones.php");
?>

<?php
  $xlogin = leerParam('xlogin_usu','' );
  $xpass  = leerParam('xpass_usu','' );
  //echo "$xlogin + $xpass";
  //die();
  $xc = conectar();
  $sql = "SELECT count(*) FROM perfil WHERE usuario_Perfil='$xlogin' AND clave_Perfil='$xpass'";

  $res = mysqli_query($xc,$sql);
  $fila = mysqli_fetch_array($res);
  $xcan = $fila[0];
//  desconectar($xc);
//	print($xcan + "-");
//die();


  if ( $xcan > 0 ) {


		$sql1 = "SELECT  * FROM perfil p WHERE p.usuario_Perfil='$xlogin' AND p.clave_Perfil='$xpass' ";
		$res1 = mysqli_query( $xc,$sql1 );
	  $fila1 = mysqli_fetch_array($res1);
    		session_start();
	  $xcategoria_Perfil = $fila1[8];
    /*$xid_usu=$fila1[1];
    $xnom_usu=$fila1[2];
    $xape_usu=$fila1[3];
    $xcargo=$fila1[4];
    $xarea=$fila1[5];
    $_SESSION["id_usu"]=$xid_usu;
    $_SESSION["nom_usu"]=$xnom_usu;
    $_SESSION["ape_usu"]=$xape_usu;
    $_SESSION["area"]=$xarea;
    $_SESSION["cargo"]=$xcargo;*/

					if($xcategoria_Perfil== 'Admin')
					{
             			 desconectar($xc);
						 header("Location: mostrarperfil.php");
					}
					

  else
  {
    desconectar($xc);
    header("Location: login.php");
  }
?>
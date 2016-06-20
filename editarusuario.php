<?php require_once("header.php"); 
 require_once("funciones.php"); 
$id_Perfil=leerParam("id","");
$xc = conectar();
$sql="SELECT * FROM dbcine.perfil WHERE id_Perfil='$id_Perfil'";
$res=mysqli_query($xc,$sql);
$row=mysqli_fetch_array($res);
$usuario_Perfil=$row[1];
$clave_Perfil=$row[2];
$nombre_Perfil=$row[3];
$apellidoPaterno_Perfil=$row[4];
$apellidoMaterno_Perfil=$row[5];
$nacionalidad_Perfil=$row[6];

desconectar($xc);


?>
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                     <h2>Usuario</h2>   
                        <h5>BIENVENIDO A cineCivilWar</h5>
                       
                    </div>
                </div>
                 <!-- /. ROW  -->
                 <hr />
               <div class="row">
                <div class="col-md-12">
                    <!-- Form Elements -->
                     <form method="post" action="guardarusuario.php">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-6">
                                   
                                    <form method="post" action="guardarusuario.php">

                                          <div class="form-group">
                                            <label>ID</label>
                                            <input class="form-control" name="id_Perfil" value="<?php echo $id_Perfil; ?>"  />
                                       </div>

                                         <div class="form-group">
                                            <label>Email</label>
                                            <input class="form-control" name="nombre_Perfil" value="<?php echo $nombre_Perfil; ?>"  />
                                       </div>

                                        <div class="form-group">
                                            <label>Apellido Paterno</label>
                                            <input class="form-control" name="ApellidoPaterno_Perfil" value="<?php echo $apellidoPaterno_Perfil; ?>"  />
                                       </div>

                                        <div class="form-group">
                                            <label>apellido Materno</label>
                                            <input class="form-control" name="ApellidoMaterno_Perfil" value="<?php echo $apellidoMaterno_Perfil; ?>" />
                                       </div>
                                     


                                        <div class="form-group">
                                            <label>usuario</label>
                                            <input class="form-control" name="usuario_Perfil" value="<?php echo $usuario_Perfil; ?>"  />
                                            
                                       </div>
                                        <div class="form-group">
                                            <label>clave</label>
                                            <input class="form-control" name="Clave_Perfil" value="<?php echo $clave_Perfil; ?>"  />
                                            </div>
                                            
                                       <div class="form-group">
                                            <label>Nacionalidad</label>
                                            <input class="form-control" name="nacionalidad_Perfil" value="<?php echo $nacionalidad_Perfil; ?>" />
                                       </div>

                                        
                                       
                                        <input type="text" name="accion" hidden="yes" value="editar">
                                       
                                        <button type="submit" class="btn btn-default">Guardar</button>
                                        <button type="reset" class="btn btn-primary">Cancelar</button>

                                   

    

                                 
         <!-- Elements -->
                </div>
                </form>
            </div>
               </div>
               </div>

                
    </div>
             <!-- /. PAGE INNER  -->
            </div>
         <!-- /. PAGE WRAPPER  -->
        </div>
        </form>
        </div>
        </div>
        </div>
        </div>
        
     <!-- /. WRAPPER  -->
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="assets/js/jquery-1.10.2.js"></script>
      <!-- BOOTSTRAP SCRIPTS -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="assets/js/jquery.metisMenu.js"></script>
      <!-- CUSTOM SCRIPTS -->
    <script src="assets/js/custom.js"></script>
    
   
</body>
</html>

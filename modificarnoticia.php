<?php require_once("header.php"); 
 require_once("funciones.php"); 
$id_Noticia=leerParam("id","");
$xc = conectar();
$sql="SELECT * FROM dbcine.noticias WHERE id_Noticia='$id_Noticia'";
$res=mysqli_query($xc,$sql);
$row=mysqli_fetch_array($res);
$titulo_Noticia=$row[1];
$subtitulo_Noticia=$row[2];
$fecha_Noticia=$row[3];
$imagen_Noticia=$row[4];
$cuerpo_Noticia=$row[5];
$url_Noticia=$row[6];
$tags=$row[7];


desconectar($xc);


?>
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                     <h2>Noticias</h2>   
                        
                       
                    </div>
                </div>
                 <!-- /. ROW  -->
                 <hr />
               <div class="row">
                <div class="col-md-12">
                    <!-- Form Elements -->
                     <form class="horizontal" form method="post" action="guardarnoticia.php">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-6">
                                   
                                    

                                          <div class="form-group">
                                            <label>ID</label>
                                            <input class="form-control" readonly="readonly" name="id_Noticia" value="<?php echo $id_Noticia; ?>"  />
                                       </div>

                                         <div class="form-group">
                                            <label>Título de la Noticia</label>
                                            <input class="form-control" name="titulo_Noticia" value="<?php echo $titulo_Noticia; ?>"  />
                                       </div>

                                        <div class="form-group">
                                            <label>Cabecera de la Noticia</label>
                                            <input class="form-control" name="subtitulo_Noticia" value="<?php echo $subtitulo_Noticia; ?>"  />
                                       </div>

                                        <div class="form-group">
                                            <label>Fecha de la Noticia</label>
                                            <input class="form-control" name="fecha_Noticia" value="<?php echo $fecha_Noticia; ?>" />
                                       </div>
                                     

                                        <div class="form-group">
                                            <label>Cuerpo de la Noticia</label>
                                            <textarea class="form-control" name="cuerpo_Noticia" rows="3" value=<?php echo $cuerpo_Noticia; ?> ><?php echo $cuerpo_Noticia; ?></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label>url de la Noticia</label>
                                            <input class="form-control" readonly="readonly" name="url_Noticia" value="<?php echo $url_Noticia; ?>"  />
                                       </div>
                                       <div class="form-group">
                                            <label>Tags diferenciados por comas</label>
                                            <input class="form-control" name="url_Noticia" value="<?php echo $url_Noticia; ?>"  />
                                       </div>
                                        
                                
                                       
                                        <div class="form-group">
                                            <label>Subir Imagen</label>
                                            <input type="file" />
                                        </div>
                                    
                                        
                                       
                                        
                                        <input type="text" name="accion" hidden="yes" value="editar">
                                        <button type="submit" class="btn btn-default">Guardar</button>
                                        <button type="reset" class="btn btn-primary">Cancelar</button>

</div>
</div>
</div>
</div>
</form>
</div>
</div>
</div>
</div>


                                   

    

                                 
         <!-- Elements -->
                </div>
            </div>
               
                
    </div>
             <!-- /. PAGE INNER  -->
            </div>
         <!-- /. PAGE WRAPPER  -->
       
        
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

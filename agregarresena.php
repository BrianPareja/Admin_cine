<?php require_once("header.php");
 require_once("funciones.php");
$id_Resena=leerParam("id","");
$xc = conectar();
$sql="SELECT * FROM dbcine.resena WHERE id_Resena='$id_Resena'";
$res=mysqli_query($xc,$sql);
$row=mysqli_fetch_array($res);
$sinopsis_Resena=$row[1];
$Peliculas_id_Peli=$row[2];
$url_trailer=$row[3];
$url_latino1=$row[4];
$url_latino2=$row[5];
$url_espanol=$row[6];
$url_sub=$row[7];

desconectar($xc);


?>
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                     <h2>Reseña</h2>
                        <h5>BIENVENIDO A cineCivilWar</h5>

                    </div>
                </div>
                 <!-- /. ROW  -->
                 <hr />
               <div class="row">
                <div class="col-md-12">
                    <!-- Form Elements -->
                     <form method="post" action="guardarresena.php">
                    <div class="panel panel-default">
                        <div class="panel-heading">

                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-6">

                                    <form role="form">

                                          <div class="form-group">
                                            <label>ID</label>
                                            <input class="form-control" name="id_Resena" value="<?php echo $id_Resena; ?>"  />
                                       </div>

                                         <div class="form-group">
                                            <label>Sinopsis de la Reseña</label>
                                            <input class="form-control" name="sinopsis_Resena" value="<?php echo $sinopsis_Resena; ?>"  />
                                       </div>

                                        <div class="form-group">
                                            <label>Id Pelicula</label>
                                            <input class="form-control" name="Peliculas_id_Peli" value="<?php echo $Peliculas_id_Peli; ?>"  />
                                       </div>

                                       <div class="form-group">
                                           <label>Url Trailer</label>
                                           <input class="form-control" name="url_trailer" value="<?php echo $url_trailer; ?>"  />
                                      </div>

                                      <div class="form-group">
                                          <label>Url Trailer Latino 1</label>
                                          <input class="form-control" name="url_latino1" value="<?php echo $url_latino1; ?>"  />
                                     </div>

                                     <div class="form-group">
                                         <label>Url Trailer Latino 2</label>
                                         <input class="form-control" name="url_latino2" value="<?php echo $url_latino2; ?>"  />
                                    </div>

                                    <div class="form-group">
                                        <label>Url Español</label>
                                        <input class="form-control" name="url_espanol" value="<?php echo $url_espanol; ?>"  />
                                   </div>

                                   <div class="form-group">
                                       <label>Url con Subtitulos</label>
                                       <input class="form-control" name="url_sub" value="<?php echo $url_sub; ?>"  />
                                  </div>

                                        </div>

                                                  </div>

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

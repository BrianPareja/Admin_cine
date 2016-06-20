<?php require_once("header.php"); 
require_once("header.php"); 
require_once("funciones.php");
$xc = conectar();
$sql="SELECT * FROM dbcine.peliculas;";
$res=mysqli_query($xc,$sql);

desconectar($xc);

?>
        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                     <h2>Tabla de Peliculas</h2>   
                        <h5>Aqui podrá agregar y seleccionar las peliculas a editar y eliminar</h5>
                       <a href="agregarpelicula.php">Agregar una pelicula</a>
                    </div>
                </div>
                 <!-- /. ROW  -->
                 <hr />
               
            <div class="row">
                <div class="col-md-12">
                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Peliculas
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Nombre</th>
                                            <th>Duración</th>
                                            <th>Fecha de Estreno</th>
                                            <th># Vistos</th>
                                            <th>Acción</th>
                                            <th>Acción</th>
                                        </tr>
                                    </thead>
                                    <tbody>



  <?php
    while ($row=mysqli_fetch_array($res))
    {

        
      echo"<tr> <td>";
        echo $row['id_Peli'];
      echo"</td>";

      echo"<td>";
        echo $row['nombre_Peli'];
      echo"</td>";


      echo"<td>";
        echo $row['duracion_Peli'];
      echo"</td>";
      echo"<td>";
        echo $row['estreno_Peli'];
      echo"</td>";
      echo"<td>";
        echo $row['vistos_Peli'];
      echo"</td>";
      

      echo"<td>"; 
        echo "<a href='modificarpelicula.php?id=$row[id_Peli]'>Editar</a>";     
            echo"</td>";
     echo"<td>"; 
        echo "<a href='eliminarpelicula.php?id=$row[id_Peli]'>Eliminar</a>";     
    
            echo"</td>";
       }
     ?>

                                     </tbody>
                                </table>
                            </div>
                            
                        </div>
                    </div>
                    <!--End Advanced Tables -->
                </div>
            </div>   
                <!-- /. ROW  -->
           
                  <!--  hasta aquiiiiiiiiiiiiiiii  -->
                <!-- /. ROW  -->
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
     <!-- DATA TABLE SCRIPTS -->
    <script src="assets/js/dataTables/jquery.dataTables.js"></script>
    <script src="assets/js/dataTables/dataTables.bootstrap.js"></script>
        <script>
            $(document).ready(function () {
                $('#dataTables-example').dataTable();
            });
    </script>
         <!-- CUSTOM SCRIPTS -->
    <script src="assets/js/custom.js"></script>
    
      
</body>
</html>




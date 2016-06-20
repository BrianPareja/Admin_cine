<?php require_once("header.php"); 
require_once("funciones.php");
$xc = conectar();
$sql="SELECT * FROM dbcine.perfil;";
$res=mysqli_query($xc,$sql);

desconectar($xc);

?>
        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                     <h2>Tabla de Usuarios</h2>   
                        <h5>Aqui podrá agregar , editar y eliminar Usuarios</h5>
                       <a href="agregarusuario.php">Agregar un Usuario</a>
                    </div>
                </div>
                 <!-- /. ROW  -->
                 <hr />
               
            <div class="row">
                <div class="col-md-12">
                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Usuario
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Email</th>
                                            <th>Clave</th>
                                            <th>Nombre</th>
                                            <th>Apellido Paterno</th>
                                            <th>Apellido Materno</th>
                                            <th>Nacionalidad</th>
                                            <th>Acción</th>
                                             <th>Acción</th>
                                        </tr>

                                   </thead>
                                    <tbody>
 <?php
    while ($row=mysqli_fetch_array($res))
    {
      echo"<tr> <td>";
        echo $row['id_Perfil'];
      echo"</td>";
      echo"<td>";
        echo $row['usuario_Perfil'];
      echo"</td>";
      echo"<td>";
        echo $row['clave_Perfil'];
      echo"</td>";
      echo"<td>";
        echo $row['nombre_Perfil'];
      echo"</td>";
       echo"<td>";
        echo $row['apellidoPaterno_Perfil'];
      echo"</td>";
       echo"<td>";
        echo $row['apellidoMaterno_Perfil'];
      echo"</td>";
       echo"<td>";
        echo $row['nacionalidad_Perfil'];
      echo"</td>";

      echo"<td>"; 
      echo "<a href='editarusuario.php?id=$row[id_Perfil]'>editar</a>";   
            echo"</td>";
            echo"<td>"; 
      echo "<a href='eliminarusuario.php?id=$row[id_Perfil]'>eliminar</a>";   
            echo"</td></tr>";
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





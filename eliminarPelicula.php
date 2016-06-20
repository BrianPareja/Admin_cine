<?php require_once("header.php"); 
require_once("header.php"); 
require_once("funciones.php");
$id_Peli=leerParam("id","");

?>
 <form method="post" action="guardarpelicula.php">
<div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
  <div class="row">
                <div class="col-md-12">
                    <div class="jumbotron">
                        <h1>Desea eliminar esta pelicula?</h1>
                        <p>
                             <input type="text" name="accion" hidden="yes" value= <?php echo "eliminar"; ?> >
                             <input type="text" name="id_Peli" hidden="yes" value=<?php echo $id_Peli; ?> >
                          

                            <button type="submit" class="btn btn-primary btn-lg">Si Seguro</button>

                            <button type="submit" class="btn btn-primary btn-lg">No... Espera!</button>
                        </p>
                    </div>
                </div>
            </div>
            </div>
            </div>
            </div>
            </div>
            </form>

</body>
</html>
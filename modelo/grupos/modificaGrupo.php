<?php
class modificarGrupos
{
    public function __construct()
    {
        require_once '../../modelo/conexiones/conexion.php';
    }
    public function modificargrupos()
    {
        include "../../modelo/conexiones/conexion.php"; 
        $num=$_POST['num'];
        $nombre=$_POST['nombre'];
        $numcomp=$_POST['numcomp'];

        $consulta="UPDATE tfcs SET nombregrupo='$nombre',numcomponentes='$numcomp' where numgrupo='$num'";
        $result=mysqli_query($conexion,$consulta);
    } 
}
      
?>    
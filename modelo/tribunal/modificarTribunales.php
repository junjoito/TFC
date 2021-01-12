<?php
class modificarTribunal
{
    public function __construct()
    {
        require_once '../../modelo/conexiones/conexion.php';
    }
    public function modificartribunal()
    {
        include "../../modelo/conexiones/conexion.php"; 
        $num=$_POST['num'];
        $examen=$_POST['examen'];
        $numcomp=$_POST['numcomp'];

        $consulta="UPDATE tribunales SET lugardeexamen='$examen',numcomponentes='$numcomp' where numtribunal='$num'";
        $result=mysqli_query($conexion,$consulta);
   
        
    } 
}
      
?>
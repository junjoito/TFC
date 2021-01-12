<?php
class modificarTFC
{
    public function __construct()
    {
        require_once '../../modelo/conexiones/conexion.php';
    }
    public function modificartfc()
    {
        include "../../modelo/conexiones/conexion.php"; 
        $orden=$_POST['orden'];
        $fecha=$_POST['fecha'];
        $lugar=$_POST['lugar'];
        $tema=$_POST['tema'];

        $consulta="UPDATE tfcs SET fechacomienzo='$fecha',numtribunalfk='$lugar',tema='$tema' where numorden='$orden'";
        $result=mysqli_query($conexion,$consulta);
   
        header ("Location:/TFC2.0/vista/tfcs/TFC.php");
    } 
}
      
?>


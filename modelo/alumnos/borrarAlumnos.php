<?php
class borrarAlumno
{
    public function __construct()
    {
        require_once '../../modelo/conexiones/conexion.php';
    }
    public function borraralumno()
    {
        include "../../modelo/conexiones/conexion.php"; 
        $matricula=$_GET['numatricula'];
        $borraAlumno="DELETE FROM alumnos WHERE numatricula='$matricula'";
        $res=mysqli_query($conexion,$borraAlumno);
        
    } 
}
      
?>

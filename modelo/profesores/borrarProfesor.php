<?php
class borrarProfesor
{
    public function __construct()
    {
        require_once '../../modelo/conexiones/conexion.php';
    }
    public function borrarprofesor()
    {
        include "../../modelo/conexiones/conexion.php"; 
        $dniprofesor=$_GET['dniprofesor'];
        $borraAlumno="DELETE FROM profesores WHERE dniprofesor='$dniprofesor'";
        $res=mysqli_query($conexion,$borraAlumno);
        header ("Location:/TFC2.0/vista/profesores/consultaProfesores.php");
    } 
}
      
?>

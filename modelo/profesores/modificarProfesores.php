<?php
class modificarProfesor
{
    public function __construct()
    {
        require_once '../../modelo/conexiones/conexion.php';
    }
    public function modificarprofesor()
    {
        include "../../modelo/conexiones/conexion.php"; 
        $dni=$_POST['dni'];
        $nombre=$_POST['nombreprofesor'];
        $apellidop=$_POST['apellidop'];
        $apellidom=$_POST['apellidom'];
        $domicilio=$_POST['domicilio'];
        $correo=$_POST['correo'];
        $consulta="update profesores set nombreprofesor='$nombre',domicilio='$domicilio',correo='$correo',apellidop='$apellidop',apellidom='$apellidom' WHERE dniprofesor='$dni'";
        $result=mysqli_query($conexion,$consulta);

       header ("Location:/TFC2.0/vista/profesores/consultaProfesores.php");
    } 
}
      
?>
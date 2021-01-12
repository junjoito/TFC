<?php
class altaAlumnos
{
    public function __construct()
    {
        require_once '../../modelo/conexiones/conexion.php';
    }
    public function altaAlumno()
    {
        include "../../modelo/conexiones/conexion.php"; 
        $matricula=$_POST['matricula'];
        $dni=$_POST['dnialumno'];
        $nombre=$_POST['nombrealumno'];
        $apellidop=$_POST['apellidop'];
        $apellidom=$_POST['apellidom'];
        $fecha=$_POST['fecha'];
        $tema=$_POST['tema'];
        $profesor=$_POST['profesor'];
        $grupo=$_POST['grupo'];

        $consulta="INSERT INTO alumnos VALUES('$matricula','$dni','$nombre','$profesor','$fecha','$tema','$grupo','$apellidop','$apellidom')";
        $consulta2="INSERT INTO profesorayudaalumno VALUES('$profesor','$matricula')";
        $result=mysqli_query($conexion,$consulta);
        $result2=mysqli_query($conexion,$consulta2);    
    } 
}
      
?>

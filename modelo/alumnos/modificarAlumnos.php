<?php
class modificarAlumnos
{
    public function __construct()
    {
        require_once '../../modelo/conexiones/conexion.php';
    }
    public function modificaralumno()
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

        $consulta="UPDATE alumnos SET dnialumno='$dni',nombrealumno='$nombre',dniprofesorpk='$profesor',fechaincorporacion='$fecha',numordenfk='$tema',numgrupofk='$grupo',apellidoPaterno='$apellidop',apellidoMaterno='$apellidom' where numatricula='$matricula'";
        $result=mysqli_query($conexion,$consulta);
   
        
    } 
}
      
?>


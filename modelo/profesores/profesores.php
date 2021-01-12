<?php
class altaProfesores
{
    public function __construct()
    {
        require_once '../../modelo/conexiones/conexion.php';
    }
    public function altaprofesores()
    {
        include "../../modelo/conexiones/conexion.php"; 
        $dni=$_POST['dni'];
        $nombre=$_POST['nombre'];
        $apellidop=$_POST['apellidop'];
        $apellidom=$_POST['apellidom'];
        $correo=$_POST['correo'];
        $calle=$_POST['calle'];
        $ciudad=$_POST['ciudad'];
        $estado=$_POST['estado'];
        $domicilio=$calle.' '.$ciudad.' '.$estado;
        $consulta="INSERT INTO profesores VALUES('$dni','$nombre','$domicilio','$correo','$apellidop','$apellidom')";
        $result=mysqli_query($conexion,$consulta);
        $tribunal=$_POST['tribunal'];
        foreach($tribunal as $tri => $valor)
        {
            $consulta2="INSERT INTO profesorformatribunal VALUES('$dni','$valor')";
            $result2=mysqli_query($conexion,$consulta2);
        }
    } 
}
      
?>
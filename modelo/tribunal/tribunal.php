<?php
class altaTribunal
{
    public function __construc()
    {
        require_once '../../modelo/conexiones/conexion.php';
    }
    public function altatribunal()
    {
        include "../../modelo/conexiones/conexion.php"; 
        $numtribunal=$_POST['numtribunal'];
        $lugarexamnen=$_POST['lugarexamnen'];
        $numcomponentes=$_POST['numcomponentes'];
        $consulta="INSERT INTO tribunales VALUES('$numtribunal','$lugarexamnen','$numcomponentes')";
        $result=mysqli_query($conexion,$consulta);
    } 
}
      
?>
<?php
    class altaTFCS
    {
        public function __construct()
        {
            require_once("../../modelo/conexiones/conexion.php");
        }
        
        public function altatfcs()
        {
             include "../../modelo/conexiones/conexion.php";
            $orden=$_POST['orden'];
            $tema=$_POST['tema'];
            $tribunal=$_POST['tribunal'];
            $fecha=$_POST['fecha'];
            $consulta="INSERT INTO  tfcs VALUES('$orden','$fecha','$tribunal','$tema')";
            $res=mysqli_query($conexion,$consulta);
        }
        
        
    }
    
?>

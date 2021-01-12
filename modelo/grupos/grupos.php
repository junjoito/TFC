<?php
    class altaGrupos
    {
        public function __construct()
        {
            require_once'../../modelo/conexiones/conexion.php';
        }
        public function altagrupos()
        {
            include "../../modelo/conexiones/conexion.php";
            $numgrupo=$_POST['numgrupo'];
            $nombregrupo=$_POST['nombre'];
            $numcomponentes=$_POST['numcomponentes'];
            $consulta="INSERT INTO grupos VALUES('$numgrupo','$nombregrupo','$numcomponentes')";
            $res=mysqli_query($conexion,$consulta);
        }
        
    }
?>

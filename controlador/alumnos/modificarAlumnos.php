<?php
    require_once'../../modelo/alumnos/modificarAlumnos.php';
    $modificarAlumnos=new modificarAlumnos();
    $modificarAlumnos->modificaralumno();
    header ("Location:/TFC2.0/vista/alumnos/consultaAlumnos.php");
?>
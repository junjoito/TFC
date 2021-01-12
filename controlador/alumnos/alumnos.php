<?php
    require_once '../../modelo/alumnos/alumnos.php';
    $altaAlumnos=new altaAlumnos();
    $altaAlumnos->altaAlumno();
    header ("Location:/TFC2.0/vista/alumnos/consultaAlumnos.php");
?>

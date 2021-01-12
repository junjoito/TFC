<?php
    require_once'../../modelo/alumnos/borrarAlumnos.php';
    $borrarAlumno=new borrarAlumno();
    $borrarAlumno->borraralumno();
    header ("Location:/TFC2.0/vista/alumnos/consultaAlumnos.php");
?>

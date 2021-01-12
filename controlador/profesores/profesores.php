<?php
    
    //require_once'../../vista/profesores/profesores.php';
    //require_once'/TFC2.0/modelo/profesores/profesores.php';
  //  require_once '/TFC2.0/modelo/profesores/profesores.php';
   require_once '../../modelo/profesores/profesores.php';
    $altaProfesores=new altaProfesores();
    $altaProfesores->altaprofesores();
    header ("Location:/TFC2.0/vista/profesores/consultaProfesores.php");
?>

<?php
    require_once'../../modelo/grupos/modificaGrupo.php';
    $modificarGrupos=new modificarGrupos();
    $modificarGrupos->modificargrupos();
    header ("Location:/TFC2.0/vista/grupos/grupodeinvestigacion.php");
?>
<?php
    require_once '../../modelo/grupos/grupos.php';
    $altaGrupos=new altaGrupos();
    $altaGrupos->altagrupos();
    header('Location:/TFC2.0/vista/grupos/grupodeinvestigacion.php');
?>
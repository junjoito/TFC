<?php
    require_once'../../modelo/tfcs/tfcs.php';
    $altaTfc=new altaTFCS();
    $altaTfc->altatfcs();
    header("Location:/TFC2.0/vista/tfcs/TFC.php");
?>
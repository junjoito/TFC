<?php
    require_once'../../modelo/tribunal/modificarTribunales.php';
    $modificarTribunal=new modificarTribunal();
    $modificarTribunal->modificartribunal();
    header("Location:/TFC2.0/vista/tribunales/tribunal.php");
?>


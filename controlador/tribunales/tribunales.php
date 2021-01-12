<?php
   // require_once'../../vista/tribunales/tribunal.php';
    require_once '../../modelo/tribunal/tribunal.php';
    $altaTribunal=new altaTribunal();
    $altaTribunal->altatribunal();
    header ("Location:/TFC2.0/vista/tribunales/tribunal.php");
//altaTribunal
?>
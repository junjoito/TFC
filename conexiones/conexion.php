<?php 
$USUARIO='root';
$PASS='';
    try { 
        $conectividad = new PDO('mysql:host=localhost;dbname=tfc',$USUARIO,$PASS);        
        //$conectividad = null;
    } 
    catch (Exception $e) {
        print('Error'.$e -> getMessage());
    }

?>

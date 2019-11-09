<?php
//PDO (PHP Data Object)--> permite la conexión con cualquier BBDD (en este caso es mySQL)
#################PDO################

try{
    $conexionPDO= new PDO("mysql:host=localhost; dbname=tachbot; charset=utf8", "root","");
    $conexionPDO->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    }catch(Exception $e) {
    die ('Error: '.$e->GetMessage());
    }

?>
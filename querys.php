<?php
    include_once __DIR__ . "/conexion.php";

    $consulta = new Consulta($baseDeDatos, 'PC');
   
    $recomendados = $consulta->getAllRecords("SELECT id, caratula  FROM {$consulta->getTable()} WHERE recomendado NOTNULL and id > :id Order by id LIMIT 8;");
    $ultimosALL = $consulta->fetchAllRecords("SELECT id, caratula FROM {$consulta->getTable()} ORDER by id DESC LIMIT 8");
    $estrenosALL =  $consulta->fetchAllRecords("SELECT * FROM LANZAMIENTOS");
    $info =  $consulta->fetchAllRecords("SELECT * FROM INFORMACION");
?>
<?php
   
    $conn = pg_pconnect("host=192.168.1.150 port=5432 dbname=SuperMarket user=postgres password=postgres") or die('No se ha podido conectar: ' . pg_last_error());
    if ($conn){
        $schema = '"ScSuperMarket"';
     }
    
?>
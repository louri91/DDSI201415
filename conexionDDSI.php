<?php
function dbConnect (){
    $conn = null;
    $host = '127.0.0.1';
    $db =   'ProyectoDDSI';
    $user = 'root';
    $pwd =  '';
    try {
        $conn = new PDO('mysql:host='.$host.';dbname='.$db, $user, $pwd);
    }
    catch (PDOException $e) {
        echo '<p>No se ha podido realizar la conexión :(</p>';
        exit;
    }
    return $conn;
    mysql_query("SET NAMES 'utf8'");
 }
 
 ?>
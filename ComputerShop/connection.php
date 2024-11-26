<?php
    $server="localhost";
    $port="3306";
    $username="root";
    $password="";
    $database= "computershop";

    try {
        $dbConn = new PDO("mysql:host=$server;port=$port;
            dbname=$database", $username, $password);
        echo 'connection established<br />';

    } catch (PDOException $e) {
        echo "An error happened";
    }
?>
<?php
    $server="localhost";
    $port="3306";
    $username="root";
    $password="";
    $database= "computershop";

    try {
        $dbConn = new PDO("mysql:host=$server;port=$port;
            dbname=$database", $username, $password);

    } catch (PDOException $e) {
        error_log("connection problem", 3, "errors.log");
    }
?>
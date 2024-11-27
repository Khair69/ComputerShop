<?php

require '../dbconn/connection.php';

// $validate =true;
    $name =$_POST['Name'];
    $mobile =$_POST['Mobile'];
    $address =$_POST['Address'];
    $hTel =$_POST['HTel'];
    $city =$_POST['City'];
    
    $query = "INSERT INTO `customers` (`Name`,`Mobile`,`Address`,`HTel`,`City`) VALUES ('$name','$mobile','$address','$hTel','$city')";
    try{
        $rowCount = $dbConn->exec($query);
        echo " <script> alert('New Customer Added ✅ '); window.open('table.php','_self'); </script> ";
    }
    catch(Exception $e){
        echo " <script> alert('An Error Occured'); </script> ";
        error_log("$e", 3, "../dbconn/errors.log");
    }

$dbConn = NULL;

?>
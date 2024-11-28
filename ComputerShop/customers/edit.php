<?php

require '../dbconn/connection.php';

// $validate =true;
    $customerId =$_POST['CustomerId'];
    $name =$_POST['Name'];
    $mobile =$_POST['Mobile'];
    $address =$_POST['Address'];
    $hTel =$_POST['HTel'];
    $city =$_POST['City'];
    
    $query = "UPDATE `customers` SET `Name` = '$name', `Mobile` = '$mobile', `Address` = '$address', `HTel` = '$hTel', `City` = '$city' WHERE CustomerId = $customerId";
    try{
        $rowCount = $dbConn->exec($query);
        echo " <script> alert('Customer Info Updated ✅'); window.open('table.php','_self'); </script> ";
    }
    catch(Exception $e){
        echo " <script> alert('An Error Occured'); </script> ";
        error_log("$e", 3, "../dbconn/errors.log");
    }

$dbConn = NULL;

?>
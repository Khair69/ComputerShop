<?php

require '../dbconn/connection.php';

// $validate =true;
    $itemId =$_POST['ItemId'];
    $itemName =$_POST['ItemName'];
    $cost =$_POST['Cost'];
    $numInStock =$_POST['NumInStock'];
    
    $query = "UPDATE `items` SET ItemName = '$itemName', Cost = '$cost', NumInStock = '$numInStock' WHERE ItemId = $itemId";
    try{
        $rowCount = $dbConn->exec($query);
        echo " <script> alert('Item Updated ✅'); window.open('table.php','_self'); </script> ";
    }
    catch(Exception $e){
        echo " <script> alert('An Error Occured'); </script> ";
        error_log("$e", 3, "../dbconn/errors.log");
    }

$dbConn = NULL;

?>
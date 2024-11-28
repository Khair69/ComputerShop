<?php 
require '../dbconn/connection.php';

// $validate =true;
    $customerId =$_POST['CustomerId'];
    
    $query = "DELETE FROM `customers` WHERE CustomerId=$customerId";
    try{
        $rowCount = $dbConn->exec($query);
        echo " <script> alert('Customer record deleted'); window.open('table.php','_self'); </script> ";
    }
    catch(Exception $e){
        echo " <script> alert('An Error Occured'); </script> ";
        error_log("$e", 3, "../dbconn/errors.log");
    }

$dbConn = NULL;

?>
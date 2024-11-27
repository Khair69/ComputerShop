<?php

require '../dbconn/connection.php';

// $validate =true;
    $itemName =$_POST['ItemName'];
    $cost =$_POST['Cost'];
    $numInStock =$_POST['NumInStock'];
    
    $query = "INSERT INTO `items` (`ItemName`,`Cost`,`NumInStock`) VALUES ('$itemName', '$cost', '$numInStock')";
    try{
        $rowCount = $dbConn->exec($query);
        echo " <script> alert('New Item Added ✅ '); window.open('table.php','_self'); </script> ";
    }
    catch(Exception $e){
        echo " <script> alert('An Error Occured'); </script> ";
        error_log("$e", 3, "../dbconn/errors.log");
    }

$dbConn = NULL;

?>
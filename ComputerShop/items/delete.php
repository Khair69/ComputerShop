<?php 
require '../dbconn/connection.php';

// $validate =true;
    $itemId =$_POST['ItemId'];
    
    $query = "DELETE FROM `items` WHERE ItemId=$itemId";
    try{
        $rowCount = $dbConn->exec($query);
        echo " <script> alert('Item deleted'); window.open('table.php','_self'); </script> ";
    }
    catch(Exception $e){
        echo " <script> alert('An Error Occured'); </script> ";
        error_log("$e", 3, "../dbconn/errors.log");
    }

$dbConn = NULL;

?>
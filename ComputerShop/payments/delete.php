<?php 
require '../dbconn/connection.php';

// $validate =true;
    $paymentId =$_POST['PaymentId'];
    
    $query = "DELETE FROM `payments` WHERE PaymentId=$paymentId";
    try{
        $rowCount = $dbConn->exec($query);
        echo " <script> alert('Payment record deleted'); window.open('table.php','_self'); </script> ";
    }
    catch(Exception $e){
        echo " <script> alert('An Error Occured'); </script> ";
        error_log("$e", 3, "../dbconn/errors.log");
    }

$dbConn = NULL;

?>
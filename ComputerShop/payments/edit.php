<?php

require '../dbconn/connection.php';

// $validate =true;
    $paymentId =$_POST['PaymentId'];
    $amount =$_POST['Amount'];
    $date =$_POST['Date'];
    $productId =$_POST['ProductId'];
    $soldById =$_POST['SoldById'];
    $soldToId =$_POST['SoldToId'];
    
    $query = "UPDATE `payments` SET `Amount` = '$amount', `Date` = '$date', `ProductId` = '$productId', `SoldById` = '$soldById', `SoldToId` = '$soldToId' WHERE PaymentId = $paymentId";
    try{
        $rowCount = $dbConn->exec($query);
        echo " <script> alert('Payment Info Updated ✅'); window.open('table.php','_self'); </script> ";
    }
    catch(Exception $e){
        echo " <script> alert('An Error Occured'); </script> ";
        error_log("$e", 3, "../dbconn/errors.log");
    }

$dbConn = NULL;

?>
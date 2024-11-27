<?php

require '../dbconn/connection.php';

// $validate =true;
    $amount =$_POST['Amount'];
    $date =$_POST['Date'];
    $productId =$_POST['ProductId'];
    $soldById =$_POST['SoldById'];
    $soldToId =$_POST['SoldToId'];
    
    $query = "INSERT INTO `payments` (`Amount`,`Date`,`ProductId`,`SoldById`,`SoldToId`) VALUES ('$amount','$date','$productId','$soldById','$soldToId')";
    try{
        $rowCount = $dbConn->exec($query);
        echo " <script> alert('New Payment Added ✅ '); window.open('table.php','_self'); </script> ";
    }
    catch(Exception $e){
        echo " <script> alert('An Error Occured'); </script> ";
        error_log("$e", 3, "../dbconn/errors.log");
    }

$dbConn = NULL;

?>
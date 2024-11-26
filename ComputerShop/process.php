<?php

require 'connection.php';

// $validate =true;
    $itemName =$_POST['ItemName'];
    $cost =$_POST['Cost'];
    $numInStock =$_POST['NumInStock'];
    
    echo ($itemName);
    echo ($cost);
    echo ($numInStock);
    
    $query = "INSERT INTO `items` (`ItemName`,`Cost`,`NumInStock`) VALUES ('$itemName', '$cost', '$numInStock')";
    $rowCount = $dbConn->exec($query);
    
    if ($rowCount == 1)
    {
        echo " <script> alert('New Item Added ✅ ') </script> ";
    }
    else
    {
        echo "error";
    }

$dbConn = NULL;

?>
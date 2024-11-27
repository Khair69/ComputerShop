<?php

require '../dbconn/connection.php';

// $validate =true;
    $name =$_POST['Name'];
    $mobile =$_POST['Mobile'];
    $email =$_POST['Email'];
    $extension =$_POST['Extension'];
    
    $query = "INSERT INTO `employees` (`Name`,`Mobile`,`Email`,`Extension`) VALUES ('$name','$mobile','$email','$extension')";
    try{
        $rowCount = $dbConn->exec($query);
        echo " <script> alert('New Employee Added ✅ '); window.open('table.php','_self'); </script> ";
    }
    catch(Exception $e){
        echo " <script> alert('An Error Occured'); </script> ";
        error_log("$e", 3, "../dbconn/errors.log");
    }

$dbConn = NULL;

?>
<?php

require '../dbconn/connection.php';

// $validate =true;
    $employeeId =$_POST['EmployeeId'];
    $name =$_POST['Name'];
    $mobile =$_POST['Mobile'];
    $email =$_POST['Email'];
    $extension =$_POST['Extension'];
    
    $query = "UPDATE `employees` SET `Name` = '$name', `Mobile` = '$mobile', `Email` = '$email', `Extension` = '$extension' WHERE EmployeeId = $employeeId";
    try{
        $rowCount = $dbConn->exec($query);
        echo " <script> alert('Employee Info Updated ✅'); window.open('table.php','_self'); </script> ";
    }
    catch(Exception $e){
        echo " <script> alert('An Error Occured'); </script> ";
        error_log("$e", 3, "../dbconn/errors.log");
    }

$dbConn = NULL;

?>
<?php 
require '../dbconn/connection.php';

// $validate =true;
    $employeeId =$_POST['EmployeeId'];
    
    $query = "DELETE FROM `employees` WHERE EmployeeId=$employeeId";
    try{
        $rowCount = $dbConn->exec($query);
        echo " <script> alert('Employee record deleted'); window.open('table.php','_self'); </script> ";
    }
    catch(Exception $e){
        echo " <script> alert('An Error Occured'); </script> ";
        error_log("$e", 3, "../dbconn/errors.log");
    }

$dbConn = NULL;

?>
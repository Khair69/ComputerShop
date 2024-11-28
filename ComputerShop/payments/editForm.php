<?php

include '../dbconn/connection.php';

$paymentId =$_POST['PaymentId'];

$query= "SELECT * FROM `payments` WHERE PaymentId = $paymentId LIMIT 1";

try{
	$data= $dbConn->query($query);
}
catch(Exception $e){
	echo " <script> alert('An error occured while fetching data'); </script> ";
	error_log("$e", 3, "../dbconn/errors.log");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Payment Info</title>
    <link rel="stylesheet" href="../wwwroot/css/style.css"/>
    <link rel="icon" type="image/x-icon" href="../wwwroot/icons/gpu.png">
    <script>
        function goHome(){window.open("../index.php", "_self");}
        function goView(){window.open("table.php", "_self");}
    </script>
</head>
<div class="navy">
    <img style="width:20px;" src="../wwwroot/icons/home.png" alt="home" onclick="goHome()"/>
    <img style="width:20px;" src="../wwwroot/icons/view.png" alt="home" onclick="goView()"/>
</div>
<body>
    <div class="content">
    <form action="edit.php" method="post">

    <h1>Edit Payment Info</h1>

    <fieldset>
        <?php
        foreach($data as $row){
        echo ('
        <input type="hidden" name="PaymentId" value="'.$row["PaymentId"].'"/>

        <label for="Amount">Amount:</label>
        <input type="number" value="'.$row["Amount"].'" name="Amount">

        <label for="Date">Date:</label>
        <input type="date" id="'.$row["Date"].'" name="Date">

        <label for="ProductId">ProductId:</label>
        <input type="number" value="'.$row["ProductId"].'" name="ProductId">

        <label for="SoldById">SoldById:</label>
        <input type="number" value="'.$row["SoldById"].'" name="SoldById">

        <label for="SoldToId">SoldToId:</label>
        <input type="number" value="'.$row["SoldToId"].'" name="SoldToId">
        ');       }

        ?>
    </fieldset>
    
    <button class="bigg" type="submit">Update</button>

    </form>
    </div>
</body>
</html>
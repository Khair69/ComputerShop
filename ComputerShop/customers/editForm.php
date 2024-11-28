<?php

include '../dbconn/connection.php';

$customerId =$_POST['CustomerId'];

$query= "SELECT * FROM `customers` WHERE CustomerId = $customerId LIMIT 1";

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
    <title>Edit Customer Info</title>
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

    <h1>Edit Customer Info</h1>

    <fieldset>
        <?php
        foreach($data as $row){
        echo ('
        <input type="hidden" name="CustomerId" value="'.$row["CustomerId"].'"/>

        <label for="Name">Name:</label>
        <input type="text" value="'.$row["Name"].'" name="Name">

        <label for="Mobile">Phone Number:</label>
        <input type="tel" value="'.$row["Mobile"].'" name="Mobile">

        <label for="Address">Address:</label>
        <input type="text" value="'.$row["Address"].'" name="Address">

        <label for="HTel">Home Number:<small>(optional)</small></label>
        <input type="tel" value="'.$row["HTel"].'" name="HTel">

        <label for="City">City:</label>
        <input type="text" value="'.$row["City"].'" name="City">
        ');       }

        ?>
    </fieldset>
    
    <button class="bigg" type="submit">Update</button>

    </form>
    </div>
</body>
</html>
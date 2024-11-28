<?php

include '../dbconn/connection.php';

$itemId =$_POST['ItemId'];

$query= "SELECT * FROM `items` WHERE ItemId = $itemId LIMIT 1";

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
    <title>Edit Item Info</title>
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

    <h1>Edit Item Info</h1>

    <fieldset>
        <?php
        foreach($data as $row){
        echo ('
        <input type="hidden" name="ItemId" value="'.$row["ItemId"].'"/>

        <label for="ItemName">Name:</label>
        <input type="text" value="'.$row["ItemName"].'" name="ItemName">

        <label for="Cost">Price:</label>
        <input type="number" value="'.$row["Cost"].'" name="Cost">

        <label for="NumInStock">Number in stock:</label>
        <input type="number" value="'.$row["NumInStock"].'" name="NumInStock">
        ');       }

        ?>
    </fieldset>
    
    <button class="bigg" type="submit">Update</button>

    </form>
    </div>
</body>
</html>
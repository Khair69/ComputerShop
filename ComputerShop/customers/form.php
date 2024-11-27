<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Customer</title>
    <link rel="stylesheet" href="../wwwroot/css/style.css"/>
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
    <form action="process.php" method="post">

    <h1>Add Customer Record</h1>

    <fieldset>
        <label for="Name">Name:</label>
        <input type="text" id="Name" name="Name">

        <label for="Mobile">Phone Number:</label>
        <input type="tel" id="Mobile" name="Mobile">

        <label for="Address">Address:</label>
        <input type="text" id="Address" name="Address">

        <label for="HTel">Home Number:<small>(optional)</small></label>
        <input type="tel" id="HTel" name="HTel">

        <label for="City">City:</label>
        <input type="text" id="City" name="City">
    </fieldset>
    
    <button type="submit">Add</button>

    </form>
    </div>
</body>
</html>
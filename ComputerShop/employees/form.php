<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Customer</title>
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
    <form action="process.php" method="post">

    <h1>Add Employee Record</h1>

    <fieldset>
        <label for="Name">Name:</label>
        <input type="text" id="Name" name="Name">

        <label for="Mobile">Phone Number:</label>
        <input type="tel" id="Mobile" name="Mobile">

        <label for="Email">Email:</label>
        <input type="email" id="Email" name="Email">

        <label for="Extension">Extension:</label>
        <input type="tel" id="Extension" name="Extension">
    </fieldset>
    
    <button class="bigg" type="submit">Add</button>

    </form>
    </div>
</body>
</html>
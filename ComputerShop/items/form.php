<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Item</title>
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

    <h1>Add Item</h1>

    <fieldset>
        <label for="ItemName">Name:</label>
        <input type="text" id="ItemName" name="ItemName">

        <label for="Cost">Price:</label>
        <input type="number" id="Cost" name="Cost">

        <label for="NumInStock">Number in stock:</label>
        <input type="number" id="NumInStock" name="NumInStock">

    </fieldset>
    
    <button class="bigg" type="submit">Add</button>

    </form>
    </div>
</body>
</html>
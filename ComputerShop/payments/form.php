<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Payment</title>
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

    <h1>Add Payment</h1>

    <fieldset>
        <label for="Amount">Amount:</label>
        <input type="number" id="Amount" name="Amount">

        <label for="Date">Date:</label>
        <input type="date" id="Date" name="Date">

        <label for="ProductId">ProductId:</label>
        <input type="number" id="ProductId" name="ProductId">

        <label for="SoldById">SoldById:</label>
        <input type="number" id="SoldById" name="SoldById">

        <label for="SoldToId">SoldToId:</label>
        <input type="number" id="SoldToId" name="SoldToId">
    </fieldset>
    
    <button type="submit">Add</button>

    </form>
    </div>
</body>
</html>
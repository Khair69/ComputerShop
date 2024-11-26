<!DOCTYPE html>
<html lang="en">
<head>
    <title>Add Item</title>
    <link rel="stylesheet" href="style.css"></link>
</head>
<body>
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
    
    <button type="submit">Add</button>

    </form>
</body>
</html>
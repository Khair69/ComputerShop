<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="wwwroot/css/style.css">
    <title>Computer Shop - Home Page</title>
    <script>
        function openItems(){window.open("items/table.php", "_self");}
        function openPay(){window.open(".php");}
        function openCus(){window.open(".php");}
        function openEmp(){window.open(".php");}
    </script>
</head>
<body>
    <h1>Welcome</h1>
    <button onclick="openItems()">Items in inventory</button>
    <button onclick="openPay()">Payments History</button>
    <button onclick="openCus()">Customers Database</button>
    <button onclick="openEmp()">List of Employees</button>
</body>
</html>
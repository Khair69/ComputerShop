<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="wwwroot/css/style.css">
    <link rel="icon" type="image/x-icon" href="wwwroot/icons/gpu.png">
    <title>Computer Shop - Home Page</title>
    <script>
        function openItems(){window.open("items/table.php", "_self");}
        function openPay(){window.open("payments/table.php", "_self");}
        function openCus(){window.open("customers/table.php", "_self");}
        function openEmp(){window.open("employees/table.php", "_self");}
    </script>
</head>
<body>
    <div class="content">
    <h1>Welcome</h1>
    <button class="bigg" onclick="openItems()">Items in inventory</button>
    <button class="bigg" onclick="openPay()">Payments History</button>
    <button class="bigg" onclick="openCus()">Customers Database</button>
    <button class="bigg" onclick="openEmp()">List of Employees</button>
    </div>
</body>
</html>
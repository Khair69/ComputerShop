<?php

include '../dbconn/connection.php';

$query= "SELECT * FROM `items`";

$data= $dbConn->query($query);

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../wwwroot/vendor/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../wwwroot/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="../wwwroot/vendor/animate/animate.css">
	<link rel="stylesheet" type="text/css" href="../wwwroot/vendor/select2/select2.min.css">
	<link rel="stylesheet" type="text/css" href="../wwwroot/vendor/perfect-scrollbar/perfect-scrollbar.css">
	<link rel="stylesheet" type="text/css" href="../wwwroot/css/util.css">
	<link rel="stylesheet" type="text/css" href="../wwwroot/css/main.css">

    <title>View items in inventory</title>
    <script>
        function add(){window.open("form.php", "_self");}
    </script>
</head>

<body>
    <div class="table100 ver3 m-b-110">
		<div class="table100-head">
			<table>
				<thead>
					<tr class="row100 head">
						<th class="cell100 column1">ID</th>
						<th class="cell100 column2">Name</th>
						<th class="cell100 column3">Price per Unit</th>
						<th class="cell100 column4">Quantity</th>
					</tr>
				</thead>
			</table>
        </div>

		<div class="table100-body js-pscroll">
			<table>
				<tbody>
                    <?php 
                    foreach($data as $row){
                    echo ('
					<tr class="row100 body">
                    <td class="cell100 column1">'.$row["ItemId"].'</td>
                    <td class="cell100 column2">'.$row["ItemName"].'</td>
                    <td class="cell100 column3">'.$row["Cost"].'</td>
                    <td class="cell100 column4">'.$row["NumInStock"].'</td>
                    </tr>
                    ');
                    }
                    ?>
				</tbody>
			</table>
		</div>
	</div>

    <button onclick="add()">Add Item</button>

















    <script src="../wwwroot/vendor/jquery/jquery-3.2.1.min.js"></script>
	<script src="../wwwroot/vendor/bootstrap/js/popper.js"></script>
	<script src="../wwwroot/vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="../wwwroot/vendor/perfect-scrollbar/perfect-scrollbar.min.js"></script>
	<script>
		$('.js-pscroll').each(function(){
			var ps = new PerfectScrollbar(this);

			$(window).on('resize', function(){
				ps.update();
			})
		});


	</script>
	<script src="../wwwroot/js/main.js"></script>

</body>
</html>
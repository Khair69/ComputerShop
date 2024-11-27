<?php

include '../dbconn/connection.php';

$query= "SELECT * FROM `payments`";

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
    <link rel="stylesheet" type="text/css" href="../wwwroot/vendor/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../wwwroot/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="../wwwroot/vendor/animate/animate.css">
	<link rel="stylesheet" type="text/css" href="../wwwroot/vendor/select2/select2.min.css">
	<link rel="stylesheet" type="text/css" href="../wwwroot/vendor/perfect-scrollbar/perfect-scrollbar.css">
	<link rel="stylesheet" type="text/css" href="../wwwroot/css/util.css">
	<link rel="stylesheet" type="text/css" href="../wwwroot/css/main.css">

    <title>View Payments</title>
    <script>
        function add(){window.open("form.php", "_self");}
		function goHome(){window.open("../index.php", "_self");}
    </script>
</head>
<div class="navy">
    <img style="width:20px;" src="../wwwroot/icons/home.png" alt="home" onclick="goHome()"/>
</div>
<body>
    <div class="table100 ver3 m-b-110 content">
		<div class="table100-head">
			<table>
				<thead>
					<tr class="row100 head">
						<th class="cell100 column1">ID</th>
						<th class="cell100 column2">Amount</th>
						<th class="cell100 column3">Date</th>
						<th class="cell100 column4">Item</th>
						<th class="cell100 column5">Employee</th>
						<th class="cell100 column6">Customer</th>
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
                    <td class="cell100 column1">'.$row["PaymentId"].'</td>
                    <td class="cell100 column2">'.$row["Amount"].'</td>
                    <td class="cell100 column3">'.$row["Date"].'</td>
                    <td class="cell100 column4">'.$row["ProductId"].'</td>
					<td class="cell100 column5">'.$row["SoldById"].'</td>
                    <td class="cell100 column6">'.$row["SoldToId"].'</td>
                    </tr>
                    ');
                    }
                    ?>
				</tbody>
			</table>
		</div>
	</div>

    <button onclick="add()">Add Payment</button>

















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
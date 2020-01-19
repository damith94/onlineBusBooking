
<?php
    session_start();
    $_SESSION['bookedSeats'];
?>

<!DOCTYPE html>
<html>
<head>
<title></title>
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Payment Form Widget Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //for-mobile-apps -->
<link href="css/stylePayment.css" rel="stylesheet" type="text/css" media="all" />
    <link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<link href='//fonts.googleapis.com/css?family=Fugaz+One' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Alegreya+Sans:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,800,800italic,900,900italic' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
<script type="text/javascript" src="js/jquery.min.js"></script>
</head>
<body >
	<div class="main">

		<div class="content" >
			

			<div class="payment-info">
				<h3>Personal Information</h3>
				<form action="paymentDetails.php" method="post">
					<div class="tab-for">
						<h5>PASSENGER NAME</h5>
						<input name="passengerName" type="text" value="" required>
						<h5>NIC NUMBER</h5>
						<input name="passengerNic" type="text" value="" required>
						<h5>MOBILE NUMBER</h5>
						<input placeholder="+94xxxxxxxxx" name="mobileNum" type="text" value="" required>
						<h5>EMAIL ADDRESS</h5>
						<input name="email" type="text" value="" required>
					</div>

					    <button  class="btn btn-success">Payment</button>

				</form>
			</div>




		</div>

	</div>
</body>
</html>
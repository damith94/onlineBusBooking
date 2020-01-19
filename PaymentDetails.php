<?php
    session_start();
    $_SESSION['passengerName'] = $_POST['passengerName'];
    $_SESSION['passengerNic'] = $_POST['passengerNic'];
    $_SESSION['mobileNum'] = $_POST['mobileNum'];
    $_SESSION['email'] = $_POST['email'];
    $routeDetails = $_SESSION['routeDetails'];
    $date = $_SESSION['date'];
    $bookedSeats = $_SESSION['bookedSeats'];

?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/html">
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
	<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<link href="css/stylePayment.css" rel="stylesheet" type="text/css" media="all" />
<link href='//fonts.googleapis.com/css?family=Fugaz+One' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Alegreya+Sans:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,800,800italic,900,900italic' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
<script type="text/javascript" src="js/jquery.min.js"></script>
</head>
<body>
	<div class="main">
		<h1>Payment</h1>
		<div class="content">



			<h3 class="pay-title">Dedit Card Info</h3>
			<form action="final.php" method="post">
				<div class="tab-for">
					<h5>NAME ON CARD</h5>
						<input name="nameOnCard" type="text" value="">
					<h5>CARD NUMBER</h5>
						<input name="cardNum" class="pay-logo" type="text" value="0000-0000-0000-0000" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '0000-0000-0000-0000';}" required="">
				</div>
				<div class="transaction">
					<div class="tab-form-left user-form">
						<h5>EXPIRATION</h5>
							<ul>
								<li>
									<input name="expMon" type="number" class="text_box" type="text" value="6" min="1" />
								</li>
								<li>
									<input name="expYear" type="number" class="text_box" type="text" value="1988" min="1" />
								</li>

							</ul>
					</div>
					<div class="tab-form-right user-form-rt">
						<h5>CVV NUMBER</h5>
						<input name="cvvNum" type="text" value="xxxx" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'xxxx';}" required="">
					</div>
					<div class="clear"></div>
				</div>
				<button class="btn btn-success">submit</button>
			</form>
			</div>


		</div>
		
	</div>
</body>
</html>
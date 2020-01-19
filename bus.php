<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<?php

    require ('dbcon.php');
    if($_POST['startcountry']=="" or $_POST['endcountry'] == "" or $_POST['dateselect']=="" or $_POST['startcountry']=="City not Found" or $_POST['endcountry']=="City not Found" or $_POST['startcountry'] == $_POST['endcountry']){
        echo "<script type='text/javascript'>alert('check your inputs');</script>";
        header("location:index.php");
    }
    session_start();
    $_SESSION['date']=$_POST['dateselect'];
?>


<!DOCTYPE HTML>
<html>
<head>
<title>BookExpressBus</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Green Wheels Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="applijewelleryion/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<link href="css/style.css" rel='stylesheet' type='text/css' />
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,700,600' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Roboto+Condensed:400,700,300' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
<link href="css/font-awesome.css" rel="stylesheet">
<!-- Custom Theme files -->
<script src="js/jquery-1.12.0.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<!--animate-->
<link href="css/animate.css" rel="stylesheet" type="text/css" media="all">
<script src="js/wow.min.js"></script>
	<script>
		 new WOW().init();
	</script>
<!--//end-animate-->
</head>
<body>
<!-- top-header -->
<!--<div class="top-header">-->
<!--	<div class="container">-->
<!--		<ul class="tp-hd-lft wow fadeInLeft animated" data-wow-delay=".5s">-->
<!--			<li class="hm"><a href="index.php"><i class="fa fa-home"></i></a></li>-->
<!--			<li class="prnt"><a href="javascript:window.print()">Print/SMS Ticket</a></li>-->
<!--				-->
<!--		</ul>-->
<!--		<ul class="tp-hd-rgt wow fadeInRight animated" data-wow-delay=".5s"> -->
<!--			<li class="tol">Toll Number : 123-4568790</li>				-->
<!--			<li class="sig"><a href="#" data-toggle="modal" data-target="#myModal" >Sign Up</a></li> -->
<!--			<li class="sigi"><a href="#" data-toggle="modal" data-target="#myModal4" >/ Sign In</a></li>-->
<!--        </ul>-->
<!--		<div class="clearfix"></div>-->
<!--	</div>-->
<!--</div>-->
<!--- /top-header ---->
<!--- header ---->
<div class="header">
	<div class="container">
		<div class="logo wow fadeInDown animated" data-wow-delay=".5s">
			<a href="index.php">BookExpressBus <span></span></a>
		</div>
		<div class="bus wow fadeInUp animated" data-wow-delay=".5s">
<!--            <a href="index.html" class="buses active">BUSES</a>-->
<!--            <a href="hotels.html">HOTELS</a>-->
        </div>
		<div class="lock fadeInDown animated" data-wow-delay=".5s"> 
			<li><i class="fa fa-lock"></i></li>
            <li><div class="securetxt">SAFE &amp; SECURE<br> ONLINE PAYMENTS</div></li>
			<div class="clearfix"></div>
		</div>
		<div class="clearfix"></div>
	</div>
</div>
<!--- /header ---->
<!--- footer-btm ---->
<div class="footer-btm wow fadeInLeft animated" data-wow-delay=".5s">
	<div class="container">
	<div class="navigation">
			<nav class="navbar navbar-default">
				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header">
				  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				  </button>
				</div>
				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse nav-wil" id="bs-example-navbar-collapse-1">
					<nav class="cl-effect-1">
						<ul class="nav navbar-nav">
							<li><a href="#">About</a></li>
							<li><a href="#">Faq</a></li>
							<li><a href="#">Apps</a></li>
							<!--								<li><a href="#">Blog</a></li>-->
							<!--								<li><a href="#">Travels</a></li>-->
							<!--								<li><a href="#">Privacy Policy</a></li>-->
							<!--								<li><a href="#">Agent Registration</a></li>-->
							<!--								<li><a href="#">Terms of Use</a></li>-->
							<li><a href="#">Contact Us</a></li>
							<!--								<li>Need Help?<a href="#" data-toggle="modal" data-target="#myModal3"> / Write Us </a>  </li>-->
							<div class="clearfix"></div>
						</ul>
					</nav>
				</div><!-- /.navbar-collapse -->	
			</nav>
		</div>
		
		<div class="clearfix"></div>
	</div>
</div>
<!--- /footer-btm ---->
<!--- banner-1 ---->
<div class="banner-1 ">
	<div class="container">
		<h1 class="wow zoomIn animated animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: zoomIn;"> The Simplest Way to Book Your Bus Tickets in Sri Lanka</h1>
	</div>
</div>
<!--- /banner-1 ---->
<!--- bus-tp ---->
<div class="bus-tp">
	<div class="container">
		<p>Fare starts from : Rs. 500</p>
        <?php
        $startCity = $_POST['startcountry'];
        $endCity = $_POST['endcountry'];

        echo '<h2>'.$startCity. ' to ' .$endCity.'</h2>';

        ?>

		<div class="clearfix"></div>
	</div>
</div>
<!--- /bus-tp ---->
<!--- bus-btm ---->
<div class="bus-btm">
	<div class="container">
		<ul>
			<li class="trav"><a href="#">Travels</a></li>
			<li class="dept"><a href="#">Depart</a></li>
			<li class="arriv"><a href="#">Arrive</a></li>
			<li class="seat"><a href="#">Route</a></li>
			<li class="fare"><a href="#">Bus Fare</a></li>
				<div class="clearfix"></div>
		</ul>
	</div>
</div>
<!--- /bus-btm ---->
<!--- bus-midd ---->
<div class="bus-midd wow zoomIn animated animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: zoomIn;">
	<?php

	if($_POST['startcountry'] != '' and $_POST['endcountry']!='' and $_POST['dateselect']!=''){
		$startCity = $_POST['startcountry'];
		$endCity = $_POST['endcountry'];


		$query = "SELECT * FROM route WHERE departure='$startCity' and arrival='$endCity'";
		$result = mysqli_query($conn,$query);
		$count = mysqli_num_rows($result);
		if($count>0){
			while($row = mysqli_fetch_array($result)){
			    $routeId = $row['route_id'];
				$startRoute = $row['departure'];
				$endRoute = $row['arrival'];
            	$startTime = $row['start_time'];
            	$endTime = $row['end_time'];
            	$busFair = $row['bus_fair'];
            	$busId = $row['bus_id'];
				$query1 = "SELECT name FROM bus_info WHERE bus_id='$busId'";
				$result1 = mysqli_query($conn,$query1);
				$count1 = mysqli_num_rows($result1);
				if($count1>0){
					while($row1 = mysqli_fetch_array($result1)){
		            	$name = $row1['name'];
			        }  
		        }
	?>
	<div class="container">
	<!--- ul-first  ---->
	
		<ul class="first">
			<li class="trav">
				<div class="bus-ic">
					<img src="images/bus.png" class="img-responsive" alt="">
				</div>
				<div class="bus-txt">
					<h4><?php echo $name;?></h4>
				</div>
				<div class="clearfix"></div>
			</li>
			<li class="dept">
				<div class="bus-ic1">
					<i class="fa fa-clock-o"></i>
				</div>
				<div class="bus-txt1">
					<h4><a href="#"><?php echo $startTime;?></a></h4>

				</div>
				<div class="clearfix"></div>
			</li>
			<li class="arriv">
				<div class="bus-txt2">
					<h4><a href="#"><?php echo $endTime?></a></h4>

				</div>
			</li>
			<li class="seat">
				<div class="bus-txt3">
					<h4><?php echo $startRoute.' to '.$endRoute?> </h4>

				</div>
				<div class="clearfix"></div>
			</li>
			<li class="fare">
				<div class="bus-txt4">
					<h5 id ><?php echo "Rs: ".$busFair?></h5>
                    <form action="seat.php" method="POST">
                        <button name="routeDetails" class="btn btn-success" value="<?php echo $routeId?>">VIEW SEATS</button>
                    </form>
				</div>
			</li>
				<div class="clearfix"></div>
		</ul>
		<!--- /ul-first  ---->
		
	</div>
	<?php
			}
		}
	}else{
		?>

		<div class="panel panel-heading" style="height: 100px;width:500px;  padding: 50px ;" >
			<h5 style="color: red "><?php echo "No buses available for the given search criteria."?></h5>

		</div>
        <div class="clearfix"></div>

	<?php
	}
	?>
</div>

<!--- /bus-midd ---->
<!--- footer-top ---->
<div class="footer-top">
    <div class="container">

        <div class="col-md-6 footer-left wow fadeInRight animated" data-wow-delay=".5s">

            <h3>Bus Routes</h3>
            <ul>
                <li><a href="#">Pettah-Galle</a></li>
                <li><a href="#">Pettah-Matara</a></li>
                <li><a href="#">Maharagama-galle</a></li>
                <li><a href="#">Maharagama-matara</a></li>
                <li><a href="#">Maharagama-panadura</a></li>
                <li><a href="#">Maharagama-kadawatha</a></li>
                <li><a href="#">nugegoda gampaha</a></li>
                <li><a href="#">Kaduwela-matara</a></li>
                <li><a href="#">Kaduwela-Galle</a></li>
                <li><a href="#">Kaduwela-Panadura</a></li>
                <li><a href="#">Panadura-Matara</a></li>
                <li><a href="#">Panadura-Galle</a></li>

                <div class="clearfix"></div>
            </ul>
        </div>
        <div class="clearfix"></div>
    </div>
</div>
<!--- /footer-top ---->
<!---copy-right ---->
<div class="copy-right">
	<div class="container">
	
		<div class="footer-social-icons wow fadeInDown animated animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInDown;">
			<ul>
				<li><a class="facebook" href="#"><span>Facebook</span></a></li>
				<li><a class="twitter" href="#"><span>Twitter</span></a></li>
				<li><a class="flickr" href="#"><span>Flickr</span></a></li>
				<li><a class="googleplus" href="#"><span>Google+</span></a></li>
				<li><a class="dribbble" href="#"><span>Dribbble</span></a></li>
			</ul>
		</div>
		<p class="wow zoomIn animated animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: zoomIn;">www.bookexpressbus.lk<a href="#" target="_blank"></a> </p>
	</div>
</div>
<!--- /copy-right ---->
<!-- sign -->
			<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
				<div class="modal-dialog" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>						
						</div>
							<section>
								<div class="modal-body modal-spa">
									<div class="login-grids">
										<div class="login">
											<div class="login-left">
												<ul>
													<li><a class="fb" href="#"><i></i>Sign in with Facebook</a></li>
													<li><a class="goog" href="#"><i></i>Sign in with Google</a></li>
													<li><a class="linkin" href="#"><i></i>Sign in with Linkedin</a></li>
												</ul>
											</div>
											<div class="login-right">
												<form>
													<h3>Create your account </h3>
													<input type="text" value="Name" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Name';}" required="">
													<input type="text" value="Mobile number" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Mobile number';}" required="">
													<input type="text" value="Email id" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email id';}" required="">	
													<input type="password" value="Password" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Password';}" required="">	
													<input type="submit" value="CREATE ACCOUNT">
												</form>
											</div>
												<div class="clearfix"></div>								
										</div>
											<p>By logging in you agree to our <a href="terms.html">Terms and Conditions</a> and <a href="privacy.html">Privacy Policy</a></p>
									</div>
								</div>
							</section>
					</div>
				</div>
			</div>
<!-- //sign -->
<!-- signin -->
		<div class="modal fade" id="myModal4" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
				<div class="modal-dialog" role="document">
					<div class="modal-content modal-info">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>						
						</div>
						<div class="modal-body modal-spa">
							<div class="login-grids">
								<div class="login">
									<div class="login-left">
										<ul>
											<li><a class="fb" href="#"><i></i>Sign in with Facebook</a></li>
											<li><a class="goog" href="#"><i></i>Sign in with Google</a></li>
											<li><a class="linkin" href="#"><i></i>Sign in with Linkedin</a></li>
										</ul>
									</div>
									<div class="login-right">
										<form>
											<h3>Signin with your account </h3>
											<input type="text" value="Enter your mobile number or Email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Enter your mobile number or Email';}" required="">	
											<input type="password" value="Password" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Password';}" required="">	
											<h4><a href="#">Forgot password</a></h4>
											<div class="single-bottom">
												<input type="checkbox" id="brand" value="">
												<label for="brand"><span></span>Remember Me.</label>
											</div>
											<input type="submit" value="SIGNIN">
										</form>
									</div>
									<div class="clearfix"></div>								
								</div>
								<p>By logging in you agree to our <a href="terms.html">Terms and Conditions</a> and <a href="privacy.html">Privacy Policy</a></p>
							</div>
						</div>
					</div>
				</div>
			</div>
<!-- //signin -->
<!-- write us -->
			<div class="modal fade" id="myModal3" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
				<div class="modal-dialog" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>						
						</div>
							<section>
								<div class="modal-body modal-spa">
									<div class="writ">
										<h4>HOW CAN WE HELP YOU</h4>
											<ul>
												<li class="na-me">
													<input class="name" type="text" value="Name" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Name';}" required="">
												</li>
												<li class="na-me">
													<input class="Email" type="text" value="Email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email';}" required="">
												</li>
												<li class="na-me">
													<input class="number" type="text" value="Mobile Number" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Mobile Number';}" required="">
												</li>
												<li class="na-me">
													<select id="country" onchange="change_country(this.value)" class="frm-field required sect">
														<option value="null">Select Issue</option> 		
														<option value="null">Booking Issues</option>
														<option value="null">Bus Cancellation</option>
														<option value="null">Refund</option>
														<option value="null">Wallet</option>														
													</select>
												</li>
												<li class="na-me">
													<select id="country" onchange="change_country(this.value)" class="frm-field required sect">
														<option value="null">Select Issue</option> 		
														<option value="null">Booking Issues</option>
														<option value="null">Bus Cancellation</option>
														<option value="null">Refund</option>
														<option value="null">Wallet</option>														
													</select>
												</li>
												<li class="descrip">
													<input class="special" type="text" value="Write Description" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Write Description';}" required="">
												</li>
													<div class="clearfix"></div>
											</ul>
											<div class="sub-bn">
												<form>
													<button class="subbtn">Submit</button>
												</form>
											</div>
									</div>
								</div>
							</section>
					</div>
				</div>
			</div>
<!-- //write us -->
</body>
</html>
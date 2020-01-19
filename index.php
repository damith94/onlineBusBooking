<?php

$get = (isset($_GET['success'])) ? $_GET['success'] : '';
if((!empty($get)) && ($get == 1))
{
    echo  "<script type='text/javascript'>alert('YOU HAVE BOOKED SUCCESSFULLY')</script>";

}

require ('dbcon.php');
?>
<!DOCTYPE HTML>
<html>
<head>
<title>bookexpressbus</title>
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

<style>
        #countryList{
        	margin:0;
        	padding-left:10px;
            position: absolute;
            display: inline-block;
            border:1px solid gray;
            overflow-y: auto;
            max-height: 100px;
            width:45%;
            background-color: white;
        }

        #countryList2{
        	margin:0;
        	padding-left:10px;
            position: absolute;
            display: inline-block;
            border:1px solid gray;
            width:45%;
            overflow-y: auto;
            max-height: 100px; 
            background-color: white;

        }
    </style>	
<!--//end-animate-->
</head>
<body>
<!-- top-header -->
<!--<div class="top-header">-->
<!--	<div class="container">-->
<!--		<ul class="tp-hd-lft wow fadeInLeft animated" data-wow-delay=".5s">-->
<!--			<li class="hm"><a href="index.php"><i class="fa fa-home"></i></a></li>-->
<!--			<li class="prnt"><a href="javascript:window.print()">Print/SMS Ticket</a></li>-->
<!---->
<!--		</ul>-->
<!--		<ul class="tp-hd-rgt wow fadeInRight animated" data-wow-delay=".5s">-->
<!--			<li class="tol">Toll Number : 123-4568790</li>-->
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
            <a href="compaling.php"><li><div class="securetxt">FEEDBACK OR<br> COMPLAINT </div></li></a>
			<div class="clearfix"></div>
		</div>
		<div class="clearfix"></div>
	</div>
</div>
<!--- /header ---->

<!--- banner ---->
<div class="banner">
	<div class="container">
		<h1 class="wow zoomIn animated animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: zoomIn;"> The Simplest Way to Book Your Bus Tickets in Sri Lanka</h1>
	</div>
</div>
<div class="container">
	<div class="col-md-5 bann-info1 wow fadeInLeft animated" data-wow-delay=".5s">
		<i class="fa fa-columns"></i>
		<h3>SRI LANKA'S MOST TRAVEL BRAND</h3>
	</div>
	<div class="col-md-7 bann-info wow fadeInRight animated" data-wow-delay=".5s">
		<h2>Reserve Seats in Highway Buses Across Sri Lanka</h2>
		<form action="bus.php" method="post">
		<div class="ban-top">
			<div class="bnr-left">
				<label class="inputLabel">From</label>
				<div style="">
			            <input type="text" name="startcountry" id="country" class="form-control" placeholder="Departure station"  required style="width:90%;padding:10px;">
			    </div>

			    <div id="countryList"></div>
	    		
			</div>
			<div class="bnr-left">
				<label class="inputLabel">To</label>
				<div style="">
			            <input type="text" name="endcountry" id="country2" class="form-control" placeholder="Arrival station" required style="width:90%; padding:10px">
			   	</div>

			    <div id="countryList2"></div>
	    		
			</div>
				<div class="clearfix"></div>
		</div>
		<div class="ban-bottom">
			<div class="bnr-right">
				<label class="inputLabel">Date of Journey</label>
				<input type="date" name="dateselect" required style="width:90%" >
			</div>
			<div class="bnr-right">
				
			</div>
				<div class="clearfix"></div>
				<!---start-date-piker---->
				<link rel="stylesheet" href="css/jquery-ui.css" />
				
			<!---/End-date-piker---->
		</div>
		<div class="sear">
			
				<button class="seabtn">Search Buses</button>
			</form>
		</div>
	</div>
	<div class="clearfix"></div>
</div>
<!--- /banner ---->
<!--- routes ---->
<div class="routes">
	<div class="container">
		<div class="col-md-4 routes-left wow fadeInRight animated" data-wow-delay=".5s">
			<div class="rou-left">
				<a href="#"><i class="fa fa-truck"></i></a>
			</div>
			<div class="rou-rgt wow fadeInDown animated" data-wow-delay=".5s">
                <?php
                    $query = "SELECT COUNT(route_id) as routes FROM route";
                    $result = mysqli_query($conn,$query);
                    $data = mysqli_fetch_assoc($result);

                ?>
				<h3><?php echo $data['routes'];?></h3>
				<p>ROUTES</p>
			</div>
				<div class="clearfix"></div>
		</div>
		<div class="col-md-4 routes-left">
			<div class="rou-left">
				<a href="#"><i class="fa fa-user"></i></a>
			</div>
			<div class="rou-rgt">
				<h3>1900</h3>
				<p>BUS OPERATORS</p>
			</div>
				<div class="clearfix"></div>
		</div>
		<div class="col-md-4 routes-left wow fadeInRight animated" data-wow-delay=".5s">
			<div class="rou-left">
				<a href="#"><i class="fa fa-ticket"></i></a>
			</div>
			<div class="rou-rgt">
				<h3>7,00,00,000+</h3>
				<p>TICKETS SOLD</p>
			</div>
				<div class="clearfix"></div>
		</div>
		<div class="clearfix"></div>
	</div>
</div>
<!--- /routes ---->
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

<script>

	        $(document).ready(function(){
	            $('#country').keyup(function(){
	                var query = $(this).val();
	                if(query!='')
	                {
	                    $.ajax({
	                        url:"search.php",
	                        method:"POST",
	                        data:{query:query},
	                        success:function(data)
	                        {
	                            $('#countryList').fadeIn();
	                            $('#countryList').html(data);
	                        }
	                    });
	                }
	            });

	            $('#country').click(function(){
	                var query = $(this).val();
	                
	                    $.ajax({
	                        url:"search2.php",
	                        method:"POST",
	                        data:{query:query},
	                        success:function(data)
	                        {
	                            $('#countryList').fadeIn();
	                            $('#countryList').html(data);
	                        }
	                    });
	            
	            });

	            $(function(){
                        $('#countryList').on('click','li',function(){
	                    $('#country').val($(this).text());
	                    $('#countryList').fadeOut();
	                });
	                $('body').on('click', function(){
	                	$('#countryList').fadeOut();
	                });
	            });
	        });

	        $(document).ready(function(){
	            $('#country2').keyup(function(){
	                var query = $(this).val();
	                if(query!='')
	                {
	                    $.ajax({
	                        url:"search.php",
	                        method:"POST",
	                        data:{query:query},
	                        success:function(data)
	                        {
	                            $('#countryList2').fadeIn();
	                            $('#countryList2').html(data);
	                        }
	                    });
	                }
	            });

	            $('#country2').click(function(){
	                var query = $(this).val();
	                
	                    $.ajax({
	                        url:"search2.php",
	                        method:"POST",
	                        data:{query:query},
	                        success:function(data)
	                        {
	                            $('#countryList2').fadeIn();
	                            $('#countryList2').html(data);
	                        }
	                    });
	            
	            });

	            $(function(){
	                $('#countryList2').on('click','li',function(){
	                    $('#country2').val($(this).text());
	                    $('#countryList2').fadeOut();
	                });
	                $('body').on('click', function(){
	                	$('#countryList2').fadeOut();
	                });
	            });
	        });
	    </script>
</html>
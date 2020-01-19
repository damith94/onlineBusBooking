<?php
    require ('dbcon.php');
    session_start();
    $date = $_SESSION['date'];
    $_SESSION['routeDetails'] = $_POST['routeDetails'];
    $date_route = $date . "," . $_SESSION['routeDetails'];

    $rid = $_POST['routeDetails'];
    $ticketPrice='';


    if(isset ($rid)) {

        $query = "SELECT  * FROM route WHERE route_id='$rid'";
        $result = mysqli_query($conn, $query);
        $count = mysqli_num_rows($result);


        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_array($result)) {
               $ticketPrice =  $row["bus_fair"];
                $bus_id = $row["bus_id"];
                $route_no = $row["route_no"];
                $departure = $row["departure"];
                $arrival =  $row["arrival"];
                $bus_id = $row["bus_id"];
            }
        }




    }



?>
<!DOCTYPE html>
<html>
<head>
<title>BusBookingExpress</title>
<!-- for-mobile-apps -->
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> 
<meta name="keywords" content="Bus Ticket Reservation Widget Responsive, Login form web template, Sign up Web Templates, Flat Web Templates, Login signup Responsive web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<!-- //for-mobile-apps -->
<link href='//fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
<link rel="stylesheet" type="text/css" href="css/jquery.seat-charts.css">
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/seat-style.css" rel="stylesheet" type="text/css" media="all" />
<script src="js/jquery-1.11.0.min.js"></script>
<script src="js/jQuery 3.3.1.js"></script>
<script src="js/jquery.seat-charts.js"></script>
</head>
<body>
<div class="content">

    <div class="top-header">
        <div class="container">
            <ul class="tp-hd-lft wow fadeInLeft animated" data-wow-delay=".5s">
                <li class="hm"><a href="index.php"><i class="fa fa-home"></i></a></li>
                <li class="prnt"><a href="javascript:window.print()">Print/SMS Ticket</a></li>

            </ul>
            <ul class="tp-hd-rgt wow fadeInRight animated" data-wow-delay=".5s">
                <li class="tol">Toll Number : 123-4568790</li>
            </ul>
            <div class="clearfix"></div>
        </div>
    </div>
    <div class="container" style="background-color: #34ad00 ; min-height:30px;padding: 15px; width: 80% ; margin: auto; ">
        <center>
        <p style="font-size:larged">   <?php echo"$departure";?> to <?php echo"$arrival";?>|<?php echo"$date";?>|<?php echo"$bus_id";?> </p>
        </center>
    </div>

	<div class="main">

		<h2>Book Your Seat Now?</h2>
		<div class="wrapper">
			<div id="seat-map">
				<div class="front-indicator"><h3>Front</h3></div>
			</div>
			<div class="booking-details">
						<div id="legend"></div>
						<h3> Selected Seats (<span id="counter">0</span>):</h3>
						<ul id="selected-seats" class="scrollbar scrollbar1"></ul>

						Total: <b>Rs: <span id="total">0</span></b>

						<button id="paynow" class="checkout-button">Pay Now</button>
			</div>
			<div class="clear"></div>
		</div>
		<script>
                var seats = [];
				var firstSeatLabel = 1;

				$(document).ready(function() {
					var $cart = $('#selected-seats'),
						$counter = $('#counter'),
						$total = $('#total'),
						sc = $('#seat-map').seatCharts({
						map: [
							'ee_ee',
							'ee_ee',
							'ee_ee',
							'ee_ee',
							'ee___',
							'ee_ee',
							'ee_ee',
							'ee_ee',
							'eeeee',
						],
						seats: {
							e: {
								price   : <?php echo"$ticketPrice";?>,
								classes : 'economy-class', //your custom CSS class
								category: 'Economy Class'
							}

						},
						naming : {
							top : false,
							getLabel : function (character, row, column) {
								return firstSeatLabel++;
							},
						},
						legend : {
							node : $('#legend'),
							items : [
								[ 'f', 'available',   'Available' ],
								[ 'e', 'selected',   'My Seats'],
								[ 'f', 'unavailable', 'Already Booked']
							]
						},
						click: function () {
							if (this.status() == 'available') {
								//let's create a new <li> which we'll add to the cart items
								$('<li>'+this.data().category+' : Seat no '+this.settings.label+': <br><b>Rs: '+this.data().price+'</b> <a href="#" class="cancel-cart-item">[cancel]</a><hr></li>')
									.attr('id', 'cart-item-'+this.settings.id)
									.data('seatId', this.settings.id)
									.appendTo($cart);

								//add seat num to array
                                seats.push(this.settings.id);
                                console.log(seats);
								/*
								 * Lets update the counter and total
								 *
								 * .find function will not find the current seat, because it will change its stauts only after return
								 * 'selected'. This is why we have to add 1 to the length and the current seat price to the total.
								 */
								$counter.text(sc.find('selected').length+1);
								$total.text(recalculateTotal(sc)+this.data().price);


								return 'selected';
							} else if (this.status() == 'selected') {
								//update the counter
								$counter.text(sc.find('selected').length-1);
								//and total
								$total.text(recalculateTotal(sc)-this.data().price);

								//remove the item from our cart
								$('#cart-item-'+this.settings.id).remove();

								//delete seat num from array
                                var index = seats.indexOf(this.settings.id);
                                if (index > -1) {
                                    seats.splice(index, 1);
                                }

								//seat has been vacated
								return 'available';
							} else if (this.status() == 'unavailable') {
								//seat has been already booked
								return 'unavailable';
							} else {
								return this.style();
							}
						}
					});

					//this will handle "[cancel]" link clicks
					$('#selected-seats').on('click', '.cancel-cart-item', function () {
						//let's just trigger Click event on the appropriate seat, so we don't have to repeat the logic here
						sc.get($(this).parents('li:first').data('seatId')).click();
					});

					//let's pretend some seats have already been booked
	//				sc.get(['1_2', '4_1', '7_1', '7_2']).status('unavailable');


                        var query = "<?php echo $date_route; ?>";


                        $.ajax({
                            url:"seatCheck.php",
                            method:"POST",
                            data:{query:query},
                            success:function(data)
                            {
                                sc.get(data.split(',')).status('unavailable');
								console.log(data.split(','));

                            },

                            error: function(){
                                console.log('error');
                            }

                        });





                    $('#paynow').click(function() {
                            $.ajax({

                                type: 'POST',
                                url: "payment.php",
                                data: {seats:  JSON.stringify(seats)},
                                success: function(data){
                                    window.location = "passengerDetail.php";
                                }
                            });


                    });
			});



			function recalculateTotal(sc) {
				var total = 0;

			
				//basically find every selected seat and sum its price
				sc.find('selected').each(function () {
					total += this.data().price;


				});
				
				return total;


			}
		</script>

	</div>
	<p class="copy_rights"> <a href="#" target="_blank"> </a></p>
</div>
<script src="js/jquery.nicescroll.js"></script>
<script src="js/scripts.js"></script>
</body>
</html>

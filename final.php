<?php

require('textlocal.class.php');
require('dbcon.php');
session_start();
$passengerName = $_SESSION['passengerName'] ;
$passengerNic = $_SESSION['passengerNic'];
$mobileNum = $_SESSION['mobileNum'];
$email = $_SESSION['email'] ;
$routeDetails = $routeDetails = $_SESSION['routeDetails'];
$date = $_SESSION['date'];
$bookedSeats = $bookedSeats = $_SESSION['bookedSeats'];
$nameOnCard = $_POST['nameOnCard'];
$cardNum = $_POST['cardNum'];
$expMon = $_POST['expMon'];
$cvvNum = $_POST['cvvNum'];

$query = "SELECT * FROM route WHERE route_id = '".$routeDetails."'";
$result = mysqli_query($conn,$query);
while($row=mysqli_fetch_array($result)){
    $busId = $row['bus_id'];
    $routeNum = $row['route_no'];
    $departure = $row['departure'];
    $arrival = $row['arrival'];
}

$query1 = "INSERT INTO passenger_detail (passenger_name,nic,boarding_place,arrival_place,booking_date,bus_id) VALUES ('$passengerName','$passengerNic','$departure','$arrival','$date','$busId') ";
$result1 = mysqli_query($conn,$query1);
if ($result1) {
    $passengerId = mysqli_insert_id($conn);
    $query2 = "INSERT INTO seat (bus_id,route_id,booking_date,passenger_id,seat_no) VALUES ('$busId','$routeDetails','$date','$passengerId','$bookedSeats')";
    if(mysqli_query($conn,$query2)){
        $textlocal = new Textlocal(false, false,'PnXTarBLQQQ-TysoX2I9tHLPPa6FujyqaHdKbA3C8U');

        $numbers = array($mobileNum);
        $sender = 'bookexpressbus';
        $message = "you successfully booked seats";

        try {
            $result = $textlocal->sendSms($numbers, $message, $sender);
            print_r($result);
        } catch (Exception $e) {
            die('Error: ' . $e->getMessage());
        }

    }else{
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

session_destroy();
header("location: index.php?success=1");

?>
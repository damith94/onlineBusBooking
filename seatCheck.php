<?php
require('dbcon.php');
if(isset($_POST["query"]))
{
    $myArray = explode(',', $_POST["query"]);
    $date = $myArray[0];
    $routeId = $myArray[1];

    $output='';
    $query ="SELECT  seat_no FROM seat WHERE booking_date='".$date."' AND route_id='".$routeId."' ";
    $result = mysqli_query($conn,$query);

//    $output = '<ul class="list-unstyled">';
    if(mysqli_num_rows($result) > 0)
    {
        while($row = mysqli_fetch_array($result))
        {
            $output = $output .",". $row["seat_no"];
        }
    }

        echo  $output;



}
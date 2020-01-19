<?php
require('dbcon.php');
if(isset($_POST["query"])) {
    $rid = $_POST["query"];
    $query = "SELECT DISTINCT bus_fair FROM route WHERE route_id='$rid'";
    $result = mysqli_query($conn, $query);
    $count = mysqli_num_rows($result);
    $output='';

    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_array($result)) {
            $output =  $row["bus_fair"];
        }
    }

    echo $output;


}

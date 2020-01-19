<?php
require('dbcon.php');

if(isset($_POST['deleteRoute'])){
    $route = $_POST['deleteRoute'];
    $sql = "DELETE FROM route WHERE route_no = '$route'";
    mysqli_query($conn,$sql);

    
    header("location: admin.php");
}

if(isset($_POST['deleteBus'])){
    $bus = $_POST['deleteBus'];
    $sql = "DELETE FROM bus_info WHERE bus_id = '$bus'";
    mysqli_query($conn,$sql);

    $sql1 = "DELETE FROM route WHERE bus_id = '$bus'";
    mysqli_query($conn,$sql1);

    header("location: admin.php");
}

if(isset($_POST['deleteCustomer'])){
    $user = $_POST['deleteCustomer'];
    $sql = "DELETE FROM normaluser WHERE userName = '$user'";
    mysqli_query($conn,$sql);

    $sql1 = "DELETE FROM user WHERE userName = '$user'";
    mysqli_query($conn,$sql1);

    header("location: admin.php");
}

?>
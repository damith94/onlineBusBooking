<?php
require('dbcon.php');





?>


<!doctype html>
<html lang = "en">

<head>
    <title>BOOKEXPRESSBUS</title>
    <meta charset = "utf-8">
    <metaname ="viewport" content="width=device-width, initial-scale=1">

    <!--this is for link css file-->
    <link rel="stylesheet" type="text/css" href="css/index.css">

    <!--//this is for link icons for site-->
    <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">

    <!--//this is for link bootstrap to site-->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <script type="text/javascript" src="js/jquery-3.1.1.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>

    <!--new -->
   

<style>
#add_new{
    background-color:#83D0C9;
    margin-right: 350px;
    margin-left: 350px;
    border-radius:5%;} 
   

</style>



  
</head>
<?php require('header.php');?>

<br/>
<br/>




                  
         <div class="container-fluid" id="add_new">
            <h2>Add New Route</h2>
            <form action="newRoute.php" method="post">
               


                 <div class="form-group">
                    <label for="bus_id">Bus Id:</label>
                    <input type="text" class="form-control" id="bus_id" placeholder="Enter bus id" name="bus_id" required="">
                </div>
                <div class="form-group">
                    <label for="route_no">Route No:</label>
                    <input type="text" class="form-control" id="route_no" placeholder="Enter route no" name="route_no" required="">
                </div>
                 <div class="form-group">
                    <label for="departure">Departure:</label>
                    <input type="text" class="form-control" id="departure" placeholder="Enter departure" name="departure" required="">
                </div>
                 <div class="form-group">
                    <label for="arrival">Arrival:</label>
                    <input type="text" class="form-control" id="arrival" placeholder="Enter arrival" name="arrival">
                </div>
                 <div class="form-group">
                    <label for="start_time">Start Time:</label>
                    <input type="text" class="form-control" id="start_time" placeholder="HH:MM:SS" name="start_time">
                </div>
                <div class="form-group">
                    <label for="end_time">End Time:</label>
                    <input type="text" class="form-control" id="end_time" placeholder="HH:MM:SS" name="end_time">
                </div> 
                <div class="form-group">
                    <label for="end_time">Bus Fair:</label>
                    <input type="text" class="form-control" id="bus_fair" placeholder="Enter bus fair" name="bus_fair">
                </div> 




                 

               <!-- <button id="myButton" class="btn btn-default" >Back</button>

               
                
                <button type="reset" class="btn btn-default" id="reset">Reset</button>-->
                <button type="submit" class="btn btn-success" id="submit">Submit</button>


                

            </form>
        </div>



        



<br/>
<br/>




<!--script for back button -->
 <script type="text/javascript">
                document.getElementById("myButton").onclick = function () {
                     location.href = "admin.php";
                 };
</script>










<?php require('footer.php');?>
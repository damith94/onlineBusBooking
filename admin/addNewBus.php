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
            <form action="newBus.php" method="post">
              

                 <div class="form-group">
                    <label for="bus_id">Bus Id:</label>
                    <input type="text" class="form-control" id="bus_id" placeholder="Enter bus id" name="bus_id" required="">
                </div>
                <div class="form-group">
                    <label for="name">Name:</label>
                    <input type="text" class="form-control" id="name" placeholder="Enter name" name="name" required="">
                </div>
                 <div class="form-group">
                    <label for="contact_no">Contact No:</label>
                    <input type="text" class="form-control" id="contact_no" placeholder="Enter contact no" name="contact_no" required="">
                </div>
                 <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
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
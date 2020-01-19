<?php
require('dbcon.php');

?>

<!--checking whether form submitted succesfuly-->
<?php
$get = (isset($_GET['success'])) ? $_GET['success'] : '';
if((!empty($get)) && ($get == 1))
{
    echo  "<script type='text/javascript'>alert('submitted successfully!')</script>";

}
?>
<!--end chech-->


<!--checking route no already taken-->
<?php
$get = (isset($_GET['error1'])) ? $_GET['error1'] : '';
if((!empty($get)) && ($get == 1))
{
    echo  "<script type='text/javascript'>alert('ERROR!(route no already exists) ')</script>";

}
?>
<!--end checking-->


<!--checking has a bus before enter a route to busid-->
<?php
$get = (isset($_GET['error'])) ? $_GET['error'] : '';
if((!empty($get)) && ($get == 1))
{
    echo  "<script type='text/javascript'>alert('ERROR!(insert bus details first) ')</script>";

}
?>
<!--end checking-->


<!--checking route no already taken-->
<?php
$get = (isset($_GET['error2'])) ? $_GET['error2'] : '';
if((!empty($get)) && ($get == 1))
{
    echo  "<script type='text/javascript'>alert('ERROR!(bus already exists) ')</script>";

}
?>
<!--end checking-->




<!doctype html>
<html lang = "en">

<head>
    <title>2nd year group project</title>
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
     <link rel="stylesheet" href="https://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css">
    

    <script src="https://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>


    <style>
*{margin:0px; padding:0px; font-family:Helvetica, Arial, sans-serif;}

/* Full-width input fields */
#replyNo,#replyMsg{
    width:25%;
    padding: 12px 20px;
    margin: 8px 26px;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
    font-size:16px;
}

/* Set a style for all buttons */
#replyBtn {
    width:25%;

    padding: 12px 20px;
    margin: 8px 26px;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
    font-size:16px;
    background-color: #4CAF50;
    color: white;
    
    
    border: none;
    cursor: pointer;
    
    font-size:20px;
}
button:hover {
    opacity: 0.8;
}

/* Center the image and position the close button */
.imgcontainer {
    text-align: center;
    margin: 24px 0 12px 0;
    position: relative;
}


/* The Modal (background) */
.modal {
    display:none;
    position: fixed;
    z-index: 1;
    left: 0;
    top: 0;
    width: 100%;
    height: 100%;
    overflow: auto;
    background-color: rgba(0,0,0,0.4);
}

/* Modal Content Box */
.modal-content {
    background-color: #fefefe;
    margin: 4% auto 15% auto;
    border: 1px solid #888;
    width: 40%; 
    padding-bottom: 30px;
}

/* The Close Button (x) */
.close {
    position: absolute;
    right: 25px;
    top: 0;
    color: #000;
    font-size: 35px;
    font-weight: bold;
}
.close:hover,.close:focus {
    color: red;
    cursor: pointer;
}

/* Add Zoom Animation */
.animate {
    animation: zoom 0.6s
}
@keyframes zoom {
    from {transform: scale(0)} 
    to {transform: scale(1)}
}
</style>

    
</head>

<?php require('header.php');?>


<br/>
<br/>
<div class="row">
    <div class="container" style="height:100vh;">
        <ul class="nav nav-tabs">
            <li class="active"><a data-toggle="tab" href="#home">Bus Routes</a></li>
            <li><a data-toggle="tab" href="#menu1">Buses</a></li>
            <li><a data-toggle="tab" href="#menu2">Bookings</a></li>
            <li><a data-toggle="tab" href="#menu3">Complains</a></li>
            <li><a data-toggle="tab" href="#menu4">Feedbacks</a></li>
        </ul>

        <div class="tab-content">
            <div id="home" class="tab-pane fade in active">
                <?php
                    $sqlroute = "SELECT * FROM route";
                    $result = mysqli_query($conn,$sqlroute);

                ?>
                <div class="row" style="margin-top:15px;margin-bottom: 15px;">
                    <div class="col-md-6">

                        <center><input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search Bus Route"
                                       title="Type in a name" style="width: 250px; height: 30px;"></center>
                    </div>


                    <div class="col-md-6">
                        <!--add new-->
                        <form action="addNewRoute.php">
                            <center><button style="font-size:24px;color:green;" class="btn btn-default" >Add Route <i class="fa fa-plus-circle"></i></button></center>
                        </form>

                    </div>
                        
               
                </div>




                <table class="table table-striped" id="myTable">
                    <thead>
                    <tr>

                        <th>route_no</th>
                        <th>bus_id</th>
                        <th>departure</th>
                        <th>arrival</th>
                        <th>start_time</th>
                        <th>end_time</th>
                        <th>bus_fair</th>
                        
                    </tr>
                    </thead>
                    <tbody>

                    <?php while($row = mysqli_fetch_array($result)){?>
                    <tr>
                        

                        <td><?php echo $row['route_no']?></td>
                        <td><?php echo $row['bus_id']?></td>
                        <td><?php echo $row['departure']?></td>
                        <td><?php echo $row['arrival']?></td>
                        <td><?php echo $row['start_time']?></td>
                        <td><?php echo $row['end_time']?></td>
                        <td><?php echo $row['bus_fair']?></td>
                        
                        
                        <form action="delete.php" method="post">
                            <td><button type="submit" name="deleteRoute" value="<?php echo $row['route_no']?>" class="form-group"  onclick="return confirm('Delete Bus Route <?php echo $row['route_no']?> ?')" ><i style="color: red" class="fa fa-trash" aria-hidden="true"></i></button></td>
                        </form>
                    
                    </tr>
                    </tbody>
                    <?php }?>
                </table>

            </div>

            <!-- buses-->
            <div id="menu1" class="tab-pane fade">
                <?php
                    $sqlbus = "SELECT * FROM bus_info";
                    $result = mysqli_query($conn,$sqlbus);

                ?>

                

                <!-- ADD new-->

                
                

                <div class="row" style="margin-top:15px;margin-bottom: 15px;">
                    <div class="col-md-6">
                        <center><input type="text" id="myInput1" onkeyup="myFunction1()" placeholder="Search Bus " title="Type in a bus" style="width: 250px; height: 30px;"></center>
                    </div>


                    <div class="col-md-6">
                        <!--add new-->
                        <form action="addNewBus.php">
                            <center><button style="font-size:24px;color:green;" class="btn btn-default" >Add Bus <i class="fa fa-plus-circle"></i></button></center>
                        </form>

                    </div>
                        
               
                </div>

                <!--end new add -->

                

                
                


                <table class="table table-striped" id="myTable1">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Contact No</th>
                        <th>Email</th>
                        
                        
                    </tr>
                    </thead>
                    <tbody>

                    <?php while($row = mysqli_fetch_array($result)){?>
                    <tr>
                        
                        <td><?php echo $row['bus_id']?></td>
                        <td><?php echo $row['name']?></td>
                        <td><?php echo $row['contact_no']?></td>
                        <td><?php echo $row['email']?></td>

                        
                        <form action="delete.php" method="post">
                            <td><button type="submit" name="deleteBus" value="<?php echo $row['bus_id']?>" class="form-group" onclick="return confirm('Delete Bus  <?php echo $row['bus_id']?> ?')"><i style="color: red" class="fa fa-trash" aria-hidden="true"></i></button></td>
                        </form>
                        
                    </tr>
                    </tbody>
                    <?php }?>
                </table>

            </div>

            <!--end bus -->

            <!--bookings-->




              <div id="menu2" class="tab-pane fade">
                <?php
                    $sqlbookings = "SELECT * FROM passenger_detail";
                    $result = mysqli_query($conn,$sqlbookings);

                ?>

                

                



                
                


                <table class="table table-striped">
                    <thead>
                    <tr>
                        <th>id</th>
                        <th>name</th>
                        <th>nic</th>
                        <th>boarding_place</th>
                        <th>arrival_place</th>
                        <th>booking date</th>
                        <th>bus_id</th>
                        
                        
                    </tr>
                    </thead>
                    <tbody>

                    <?php while($row = mysqli_fetch_array($result)){?>
                    <tr>
                        
                        <td><?php echo $row['id']?></td>
                        <td><?php echo $row['passenger_name']?></td>
                        <td><?php echo $row['nic']?></td>
                        <td><?php echo $row['boarding_place']?></td>
                        <td><?php echo $row['arrival_place']?></td>
                        <td><?php echo $row['booking_date']?></td>
                        <td><?php echo $row['bus_id']?></td>
                        
                        

                      <!--  
                        <form action="deleteBusRoute.php" method="post">
                            <td><button type="submit" name="deleteBusRoute" value="<?php echo $row['bus_id']?>" class="form-group"><i style="color: red" class="fa fa-trash" aria-hidden="true"></i></button></td>
                        </form>
                        -->
                        
                    </tr>
                    </tbody>
                    <?php }?>
                </table>

            </div>



            <!--end bookings-->



            

           <!--complains-->
           <div id="menu3" class="tab-pane fade">
                <?php
                    $sqlcomplains = "SELECT * FROM complaign";
                    $result = mysqli_query($conn,$sqlcomplains);

                ?>

            

                <table class="table table-striped">
                    <thead>
                    <tr>
                        
                        <th>ID</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Mobile</th>
                        <th>Issue</th>
                        <th>Description</th>
                        
                        
                        
                    </tr>
                    </thead>
                    <tbody>

                    <?php while($row = mysqli_fetch_array($result)){?>
                    <tr>
                        
                        <td><?php echo $row['c_id']?></td>
                        <td><?php echo $row['name']?></td>
                        <td><?php echo $row['email']?></td>
                        <td><?php echo $row['mobile']?></td>
                        <td><?php echo $row['issue']?></td>
                        <td><?php echo $row['description']?></td>
                        
                        
                        <!--<form action="reply.php" method="post">
                            <td><button type="submit" name="relpyMsg" value="<?php echo $row['mobile']?>" class="form-group"><i class="fa fa-reply" style="font-size:18px;color:blue" aria-hidden="true">reply</i></button></td>
                        </form>-->
                      <!--reply complains-->
                      <td>
                        <button type="submit" onclick="document.getElementById('modal-wrapper').style.display='block'">
                            <i class="fa fa-reply" style="font-size:18px;color:blue" aria-hidden="true">reply</i>
                        </button>
                        <div id="modal-wrapper" class="modal">
  
                            <form class="modal-content animate" action="sendsms.php" method="post">
        
                            <div class="imgcontainer">
                                 <span onclick="document.getElementById('modal-wrapper').style.display='none'" class="close" title="Close PopUp">&times;</span>
      
                                <h1 style="text-align:center">REPLY</h1>
                             </div>

                <div class="container">
                          <label for="mobile">Phone Number:</label>
                          <input id="replyNo" type="text" placeholder="phone Number as +94..." name="mobile" class="form-control"></br>
                          <label for="message">Phone Number:</label>
                          <input type="text" id="replyMsg" placeholder="Message" name="message" class="form-control"></br>
                          <button type="submit" id="replyBtn">reply</button>    
      
                </div>
    
                            </form>
  
                </div>



                      </td>  
                        

<script>
// If user clicks anywhere outside of the modal, Modal will close

var modal = document.getElementById('modal-wrapper');
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>


                        
                    </tr>
                    </tbody>
                    <?php }?>
                </table>

            </div>




           <!--end complains-->    


            <!--feedbacks-->
           <div id="menu4" class="tab-pane fade">
                <?php
                    $sqlfeedbacks = "SELECT * FROM feedback";
                    $result = mysqli_query($conn,$sqlfeedbacks);

                ?>

            

                <table class="table table-striped">
                    <thead>
                    <tr>
                        
                        <th>ID</th>
                        <th>Name</th>
                        <th>Feedback</th>
                        
                        
                        
                        
                    </tr>
                    </thead>
                    <tbody>

                    <?php while($row = mysqli_fetch_array($result)){?>
                    <tr>
                        
                        <td><?php echo $row['id']?></td>
                        <td><?php echo $row['name']?></td>
                        <td><?php echo $row['feedback']?></td>
                        
                        
                        

                      
                        
                    </tr>
                    </tbody>
                    <?php }?>
                </table>

            </div>




           <!--end feedback-->    







        </div>
    </div>
</div>


<script>
function myFunction() {
  var input, filter, table, tr, td, i;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[0];
    if (td) {
      if (td.innerHTML.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }       
  }
}
</script>

<script>
function myFunction1() {
  var input, filter, table, tr, td, i;
  input = document.getElementById("myInput1");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable1");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[0];
    if (td) {
      if (td.innerHTML.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }       
  }
}
</script>


<?php require('footer.php');?>
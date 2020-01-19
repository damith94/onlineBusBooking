 <?php
        //include_once('dbcon.php');
        require('dbcon.php');
        //require('db.php');

        if (isset($_POST['bus_id'])) {
        $bus_id = $_POST['bus_id'];
        }
         if (isset($_POST['route_no'])) {
        $route_no = $_POST['route_no'];
        }
         if (isset($_POST['departure'])) {
        $departure = $_POST['departure'];
        }
         if (isset($_POST['arrival'])) {
        $arrival = $_POST['arrival'];
        }
         if (isset($_POST['start_time'])) {
        $start_time = $_POST['start_time'];
        }
         if (isset($_POST['end_time'])) {
        $end_time = $_POST['end_time'];
        }
         if (isset($_POST['bus_id'])) {
        $bus_fair = $_POST['bus_fair'];
        }


        //$con=mysqli_connect("localhost","root","","my_db");
        $check="SELECT * FROM route WHERE route_no = '$_POST[route_no]'";
        $rs = mysqli_query($conn,$check);
        $data = mysqli_fetch_array($rs, MYSQLI_NUM);
        if($data[0] > 1) {
                header('Location:admin.php?error1=1');
            }

        else{

                $check1="SELECT * FROM bus_info WHERE bus_id = '$_POST[bus_id]'";
                $rs1 = mysqli_query($conn,$check1);
                $data1 = mysqli_fetch_array($rs1, MYSQLI_NUM);
                if($data1[0] < 1) {
                    header('Location:admin.php?error=1');
                }

                else{

                     $sql = "INSERT INTO route (bus_id,route_no,departure,arrival,start_time,end_time,bus_fair)VALUES('$bus_id','$route_no','$departure','$arrival','$start_time','$end_time','$bus_fair')";
                    if (mysqli_query($conn, $sql)) 
                        {
                            header('Location:admin.php?success=1');
                        }
                    }  
        //header("location:admin.php");
            }

















        /*
        if (isset($_POST['bus_id'])) {
        $bus_id = $_POST['bus_id'];
        }
         if (isset($_POST['route_no'])) {
        $route_no = $_POST['route_no'];
        }
         if (isset($_POST['departure'])) {
        $departure = $_POST['departure'];
        }
         if (isset($_POST['arrival'])) {
        $arrival = $_POST['arrival'];
        }
         if (isset($_POST['start_time'])) {
        $start_time = $_POST['start_time'];
        }
         if (isset($_POST['end_time'])) {
        $end_time = $_POST['end_time'];
        }
         if (isset($_POST['bus_id'])) {
        $bus_fair = $_POST['bus_fair'];
        }*/
    

       /* $bus_id = $_POST['bus_id'];
        $route_no = $_POST['route_no'];
        $departure = $_POST['departure'];
        $arrival = $_POST['arrival'];
        $start_time = $_POST['start_time'];
        $end_time = $_POST['end_time'];
        $bus_fair = $_POST['bus_fair'];
        */
        

       // echo '$arrival';
 
        //if(mysql_query("INSERT INTO busroute VALUES('$routeNum','$from','$to','$numOfBuses')"))
         // echo "Successfully Inserted";
        //else
         // echo "Insertion Failed";
        /*$sql = "INSERT INTO route VALUES('$bus_id','$route_no','$departure','$arrival','$start_time','$end_time','$bus_fair')";
        mysqli_query($conn,$sql);
          
        header("location:admin.php");*/
        
        


    

        
        ?>      

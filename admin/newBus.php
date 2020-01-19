<?php
        //include_once('dbcon.php');
        require('dbcon.php');
        //require('db.php');
        
        if (isset($_POST['bus_id'])) {
        $bus_id = $_POST['bus_id'];
        }
         if (isset($_POST['name'])) {
        $name = $_POST['name'];
        }
         if (isset($_POST['contact_no'])) {
        $contact_no = $_POST['contact_no'];
        }
         if (isset($_POST['email'])) {
        $email = $_POST['email'];
        }
         
    



        $check="SELECT * FROM bus_info WHERE bus_id = '$_POST[bus_id]'";
        $rs = mysqli_query($conn,$check);
        $data = mysqli_fetch_array($rs, MYSQLI_NUM);
        if($data[0] > 1) {
                header('Location:admin.php?error2=1');
            }

        else
    {
         $sql = "INSERT INTO bus_info VALUES('$bus_id','$name','$contact_no','$email')";
        if (mysqli_query($conn, $sql)) 
        {
             header('Location:admin.php?success=1');
            }
          
        //header("location:admin.php");
   }


       

       // echo '$arrival';
 
        //if(mysql_query("INSERT INTO busroute VALUES('$routeNum','$from','$to','$numOfBuses')"))
         // echo "Successfully Inserted";
        //else
         // echo "Insertion Failed";
       // $sql = "INSERT INTO bus_info VALUES('$bus_id','$name','$contact_no','$email')";
       // mysqli_query($conn,$sql);
          
       //header("location:admin.php");

       /* $sql = "INSERT INTO bus_info VALUES('$bus_id','$name','$contact_no','$email')";
        if (mysqli_query($conn, $sql)) 
        {
             header('Location:admin.php?success=1');
            }*/
        
        


    

        
        ?>      

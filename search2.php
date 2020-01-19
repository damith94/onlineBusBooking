<?php
require('dbcon.php');
if(isset($_POST["query"]))
{
    $output='';
    $query ="SELECT Distinct departure FROM route";
    $result = mysqli_query($conn,$query);
    $output = '<ul class="list-unstyled">';

        while($row = mysqli_fetch_array($result))
        {
            $output .='<li>'.$row["departure"].'</li>';
        }
   
    $output .='</ul>';
    echo $output;

}
?>
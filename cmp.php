<?php 

$connection = mysqli_connect('127.0.0.1','root','','bus');

if(mysqli_connect_errno()){
	die("Somethig Ent wrong");
}

//print_r($_POST);

$name=$_POST['name'];
$email=$_POST['email'];
$mobile=$_POST['number'];
$issue=$_POST['issue'];
$des=$_POST['descript'];
 
// echo $name;*/
 $query="INSERT INTO complaign (name,email,mobile,issue,description) VALUES('{$name}','{$email}','{$mobile}','{issue}','{des}') ";

 $result = mysqli_query($connection,$query);

include "compaling.php" ;
?>
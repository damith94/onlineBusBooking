<?php 

$connection = mysqli_connect('127.0.0.1','root','','bus');

if(mysqli_connect_errno()){
	die("Somethig Ent wrong");
}

$name=$_POST['name'];
$feedback=$_POST['feedback'];
 
 //echo $name." ".$feedback;
$query="INSERT INTO feedback (name,feedback) VALUES('{$name}','{$feedback}') ";

$result = mysqli_query($connection,$query);

// if($result){
// 	echo 'success';
// }else{
// 	echo 'fail';
//}
 include "compaling.php" ;

 ?>
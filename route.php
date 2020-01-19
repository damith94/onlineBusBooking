<?php
	require ('dbcon.php');
	if($_POST['startcountry'] != '' and $_POST['endcountry']!='' and $_POST['dateselect']!=''){
		$startCity = $_POST['startcountry'];
		$endCity = $_POST['endcountry'];
		$date = $_POST['dateselect'];

		$query = "SELECT * FROM route WHERE departure='$startCity' and arrival='$endCity'";
		$result = mysqli_query($conn,$query);
		$count = mysqli_num_rows($result);
		if($count>0){
			while($row = mysqli_fetch_array($result)){?>


			<?php
				echo $row['departure'];
				echo $row['arrival'];
				echo $row['start_time'];
				echo $row['bus_fair'];
			}
		} 
	}else{
		print "err";
	}
	
?>
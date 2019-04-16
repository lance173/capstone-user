<?php 


function loadSliderItems(){
	$conn = myConnect();
	$sql = "SELECT * FROM slider WHERE SliderID = 1 LIMIT 1";
	$result = mysqli_query($conn, $sql);
	$row = mysqli_fetch_assoc($result);	   
	return $row;  	   	
}


?>
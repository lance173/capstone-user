<?php 

require_once('MysqlConnect.php');

function loadSliderItems(){
	$conn = myConnect();
	$sql = "SELECT * FROM slider WHERE SliderID = 1 LIMIT 1";
	$result = mysqli_query($conn, $sql);
	$row = mysqli_fetch_assoc($result);	   
	return $row;  	   	
}

function visitCounter(){

	$connect = myConnect();
	$sql = ("UPDATE visitcounter SET counter=counter+1 WHERE name='Visit Counter'");
	$result = mysqli_query($connect, $sql);

}


?>
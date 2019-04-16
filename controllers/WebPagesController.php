<?php

require('MysqlConnect.php');  

function viewPage($id){
	$conn = myConnect();
	$sql = "SELECT * FROM webpages WHERE WebPageID= '$id' LIMIT 1 ";
	$result = mysqli_query($conn, $sql);
	$row = mysqli_fetch_row($result);
	return $row;
}

?>
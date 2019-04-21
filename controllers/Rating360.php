<?php require_once('MysqlConnect.php');

if(isset($_POST['btnSubmit'])){
			virtualTourRating();
}


function virtualTourRating(){
	session_start();
	$conn = myConnect();

	if(isset($_POST['btnSubmit'])&&isset($_SESSION['profile'])){
		$rating  = $_POST['starrating'];
		$feedback = $_POST['feedback'];
		$student = $_SESSION['profile']['StudentID'];
		$status = $_SESSION['profile']['Status'];

		if($status != 'BLOCKED'){
			$sql = "INSERT INTO ratings(Stars, Feedback, StudentID) VALUES ('$rating', '$feedback','$student')";
			$result = mysqli_query($conn, $sql);
			header("Location:../views/startvirtualtour.php");
		} 
	}
}

function IsRated(){
	
	$conn = myConnect();

	$id = $_SESSION['profile']['StudentID'];

 	$sql = "SELECT * FROM ratings WHERE StudentID = '$id' LIMIT 1";

 	$result = mysqli_query($conn, $sql) or die("error");

 	$row = mysqli_fetch_assoc($result);

 	if(isset($row)) {
		$IsRated = 'true'; 		
 	} else {
 		$IsRated = 'false';
 	}

  	return $IsRated; 
}


function loadRatings(){
	 $conn = myConnect();
	 $sql = "SELECT ratings.ratingID, ratings.StudentID, students.FirstName, students.LastName, students.Photo, ratings.Feedback, ratings.Stars FROM ratings INNER JOIN students on ratings.StudentID = students.StudentID ORDER BY Stars DESC";
	 $result = mysqli_query($conn, $sql);

	 while($row=mysqli_fetch_array($result)){
			//do something as long as there's a remaining row.
			$rows[] = $row;
	 }
	 return (isset($rows)) ? $rows : NULL; 
} 

function loadRatingsOnHome(){
	 $conn = myConnect();
	 $sql = "SELECT ratings.ratingID, ratings.StudentID, students.FirstName, students.LastName, students.Photo, ratings.Feedback, ratings.Stars FROM ratings INNER JOIN students on ratings.StudentID = students.StudentID ORDER BY Stars DESC LIMIT 2";
	 $result = mysqli_query($conn, $sql);

	 while($row=mysqli_fetch_array($result)){
			//do something as long as there's a remaining row.
			$rows[] = $row;
	 }
	 return (isset($rows)) ? $rows : NULL; 
} 

?>

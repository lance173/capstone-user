<?php 

require('DBConnect.php');
require_once('MysqlConnect.php');

if(isset($_POST['submit'])){
	attemptLogin();
}
if(isset($_SESSION['loginError'])){

}
if(isset($_POST['editPass'])){
	changePassword();
}



function attemptLogin(){
	session_start();
	$username = $_POST['username'];
	$password = $_POST["password"];
	
	$connection = new mysqli(DB_HOST,  DB_USERNAME, DB_PASSWORD, DB_NAME);
	$result = $connection->query("SELECT * FROM students WHERE USCIDNo ='{$username}' AND Password = '{$password}'  ");
	if ($result->num_rows > 0){	
		//student has logged in
		$student = $result->fetch_assoc();
		$_SESSION['profile'] = $student;
		//redirect to homepage
		header('Location:../views/home.php');
		} else {
		//$_SESSION['loginError'] = 'Invalid username or password';
		?>
		<script>
			alert('Invalid Login!');
			window.location = "../views/login.php";
		</script>
		<?php
	}
	mysqli_close($conn);
}

function changePassword(){
	$conn = myConnect();
	session_start();

	$username = $_SESSION['profile']['USCIDNo'];
	$oldPassConf = $_SESSION['profile']['Password'];
	$profile = $_SESSION['profile']['StudentID'];
	$oldPassword = $_POST['oldPassword'];
	$newPassword = $_POST['newPassword'];
	$confPassword = $_POST['confirmPassword'];

	$sql = ("SELECT * FROM students WHERE StudentID = $profile AND $oldPassConf = $oldPassword");
	$result = mysqli_query($conn,$sql);

	if($result){
		$sql2 = ("UPDATE students SET Password = $newPassword WHERE StudentID = $profile");
		$result2 = mysqli_query($conn,$sql2);
		session_destroy();
		
		session_start();
		$connection = new mysqli(DB_HOST,  DB_USERNAME, DB_PASSWORD, DB_NAME);
		$result = $connection->query("SELECT * FROM students WHERE USCIDNo ='{$username}' ");
		if ($result->num_rows > 0){	
			//student has logged in
			$student = $result->fetch_assoc();
			$_SESSION['profile'] = $student;
			//redirect to homepage
			header('Location:../views/home.php');

		}
	}
}
?>



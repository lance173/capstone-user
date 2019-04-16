<?php 
session_start();
require('DBConnect.php');

if(isset($_POST['submit'])){
	attemptLogin();
}
if(isset($_SESSION['loginError'])){

}


function attemptLogin(){
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
?>



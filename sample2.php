<?php 
  require('header.php');
?>

<div class="comment more">
	Lorem ipsum dolor sit amet, consectetur adipiscing elit.
	Vestibulum laoreet, nunc eget laoreet sagittis,
	quam ligula sodales orci, congue imperdiet eros tortor ac lectus.
	Duis eget nisl orci. Aliquam mattis purus non mauris
	blandit id luctus felis convallis.
	Integer varius egestas vestibulum.
	Nullam a dolor arcu, ac tempor elit. Donec.
</div>
<div class="comment more">
	Duis nisl nibh, egestas at fermentum at, viverra et purus.
	Maecenas lobortis odio id sapien facilisis elementum.
	Curabitur et magna justo, et gravida augue.
	Sed tristique pellentesque arcu quis tempor.
</div>
<div class="comment more">
	consectetur adipiscing elit. Proin blandit nunc sed sem dictum id feugiat quam blandit.
	Donec nec sem sed arcu interdum commodo ac ac diam. Donec consequat semper rutrum.
	Vestibulum et mauris elit. Vestibulum mauris lacus, ultricies.
</div>
<?php
  require('footer.php');
?>  











login ni siya
<?php 
session_start();
require('DBConnect.php');



 if(isset($_POST['submit'])){
	attemptLogin();
}

function attemptLogin(){
		$username = $_POST['username'];
		$password = $_POST["password"];
	
	$connection = new mysqli(DB_HOST,  DB_USERNAME, DB_PASSWORD, DB_NAME);

	$result = $connection->query("SELECT * FROM students WHERE USCIDNo ='{$username}' AND Password = '{$password}'  ");

	if ($result->num_rows > 0){
		
		//student has logged in
		$result2 = $connection->query("SELECT * FROM students WHERE USCIDNo ='{$username}' AND Password = '{$password}' AND Status = 'CLEARED' ");

		if ($row = mysqli_fetch_assoc($result2)){
		
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
		//die("Your Account is not yet Approved");

		}

	}

}








<?php echo $_SESSION["profile"]["FirstName"];?>




Login logout madaot session kung ma biyaan



featured article
<div class="body-container">
	<div class="container">
		<div class="row featured-row">
			<div style="border:1px ;width:100px;height:300px;overflow-y:hidden;overflow-x:scroll;">
				<div class="col-md-6">
					<?php foreach($articles as $a){   ?>
						<table>
							<td>
								<div class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
									<div class="col p-4 d-flex flex-column position-static">
										<strong class="d-inline-block mb-2 text-primary">World</strong>

										<h3 class="mb-0">
											<?php echo $a['Title'];?>
										</h3>

										<div class="mb-1 text-muted">
											Published <?php echo $a['DatePublished'];?>
										</div>

										<p class="card-text mb-auto">
											<?php echo substr($a['Content'], 0, 250);?>...
										</p>

										<a href=../views/ArticlePage.php?id=<?php echo $a['ArticleID']?> class="stretched-link">
											Continue reading
										</a>

									</div>

									<div class="col-auto d-none d-lg-block">
										<svg width="200" height="250" src="<?php echo $a['FeaturePhoto'];?>" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: Thumbnail">
											<title>Placeholder</title>
											<rect width="100%" height="100%" fill="rgba(0,0,0,0.1)"></rect>
											<text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text>
										</svg>
									</div>
								</div>
								<div class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
									<div class="col p-4 d-flex flex-column position-static">
										<strong class="d-inline-block mb-2 text-primary">World</strong>

										<h3 class="mb-0">
											asdasdsadasd
										</h3>

										<div class="mb-1 text-muted">
											Published asdasdasdas
										</div>

										<p class="card-text mb-auto">
											asdasdasdasd
										</p>

										<a href="#" class="stretched-link">
											Continue reading
										</a>

									</div>

									<div class="col-auto d-none d-lg-block">
										<svg width="200" height="250" src="<?php echo $a['FeaturePhoto'];?>" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: Thumbnail">
											<title>Placeholder</title>
											<rect width="100%" height="100%" fill="rgba(0,0,0,0.1)"></rect>
											<text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text>
										</svg>
									</div>
								</div>
							</td>
						</table>
					<?php } ?>   
				</div>
			</div>
		</div>
	</div>
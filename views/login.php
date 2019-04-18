<?php require('../controllers/DBConnect.php');


 require('header.php'); 
?>



<body>
	<div id="login" class="admin-loginbg">
	<!-- </div>
		<div class="iaunatural"> -->
		<div class="container">
			<div class="row">
				<div class="col-md-6 offset-md-3">
					<center>
						<img src="../assets/img/usclibsystem-transp-whitetxt.png" class="login-uscliblogo">	
					</center>

					<div class="loginbox">
						<div class="loginheading">
							<img src="../assets/img/admin-avatar.png" class="login-useravatar">
							<h1> Log In </h1>
							<hr>
						</div>

						<form name="loginForm" class="form-signin" method="POST" action="../controllers/LoginController.php">

							<input name="username" type="text" class="input-block-level" placeholder="Username / ID Number" required>		          
				            
				            <input name="password" type="password" class="input-block-level" placeholder="Password" required>
				            
				            <button name="submit" class="btn btn-large btn-login" type="submit">Log In</button>

		            	</form>
					</div>
					

	            	<div class="loginfooter">
	            		USC Library System Website 2.0 - All rights reserved © 2019.
	            		<br>
	            		<img src="../assets/img/usc-completelogo-whitetxt.png" class="login-usclogo">
	            	</div>
				</div>				
			</div>
		</div>
	</div>

	<!-- END PAGA BACKDROPS-->
    <!-- CORE PLUGINS-->
    <!-- CORE PLUGINS-->
    <script src="../assets/js/post-customjs.js"></script>
    <script src="../assets/jquery/jquery.min.js"></script>
    <script src="../assets/vendors/popper.js/dist/umd/popper.min.js" type="text/javascript"></script>
    <script src="../assets/vendors/bootstrap/dist/js/bootstrap.min.js" type="text/javascript"></script>
    <script src="../assets/vendors/metisMenu/dist/metisMenu.min.js" type="text/javascript"></script>
    <script src="../assets/vendors/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
    <!-- PAGE LEVEL PLUGINS-->
    <script src="../assets/myjs.js" type="text/javascript"></script>
    <!-- CORE SCRIPTS-->
    <script src="../assets/js/app.min.js" type="text/javascript"></script>
    <!-- PAGE LEVEL SCRIPTS-->
   
  
  
  </body>
</html>
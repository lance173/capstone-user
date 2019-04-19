<?php 

	require('../controllers/MenuController.php');
	$menuitem = loadMenuItems();
	$menudropdown = loadMenuDropdown();

	session_start();

?>

<div class="container-custom">
	<div class="row">
		<div class="col-sm usc-logo-1-top">
			<img src='../assets/img/usclibsystem-transp.png'  height="50" width="100">
		</div>
		<div class="col-sm usc-logo-2-top">
			<img src='../assets/img/usc-completelogo-transp.png'  height="50" width="200">
		</div>
	</div>
</div>
	
<nav class="navbar navbar-expand-lg navbar-light bg-light sticky-top no-padding-nav">
	<p style="padding-top: 8px; padding-bottom: 9px; margin-bottom: 0px">
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"  aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
	</p>

	<div class="collapse navbar-collapse" id="navbarSupportedContent">
		<ul class="navbar-nav mr-auto pad-left-home" >

				<?php 
					if(isset($menuitem)){foreach($menuitem as $menuI){   

							if($menuI['Type']=='Static'){
				?>

					<li class="nav-item" >
						<a class="nav-link" href="<?php echo $menuI['PageLink'];?>"> <?php echo $menuI['ItemName'];?> </a>
					</li>

				<?php } elseif($menuI['Type']=='Dropdown') {  ?>

						<li class="nav-item dropdown">

							<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								<?php echo $menuI['ItemName'];?> <span class="caret"></span>
							</a>

							<div class="dropdown-menu"  aria-labelledby="navbarDropdown">
									<?php 
											if(isset($menudropdown)){foreach($menudropdown as $mndrpdn){  

											if($mndrpdn['MenuID']==$menuI['MenuItemID']){
									?>
											<a class="dropdown-item" href="<?php echo $mndrpdn['PageLink'];?>"><?php echo $mndrpdn['DropItemName'];?></a>
									<?php
											} 
											}}
									?>
							</div>
						</li>

				<?php } }} ?>
		</ul>

		<?php if(!isset($_SESSION['profile'])){ ?>
			<ul class="navbar-nav pad-right-login">
				<li class="nav-item">
					<a class="nav-link" href="login.php">Login</a>
				</li>
			</ul>
			<?php }else{ ?>
			<ul class="navbar-nav pad-right-login">
				<li class="nav-item dropdown">
					<a class="nav-link " href="#" id="navbarDropdown2" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						Hello,  <b><?php echo $_SESSION['profile']['FirstName'] ?></b>
					</a>

					<div class="dropdown-menu" aria-labelledby="navbarDropdown">
		            <a class="btn btn-edtacct" role="button" data-toggle="modal" data-target="#editAccount"><i class="fa fa-user"></i> Edit Account</a>
		            <a class="dropdown-item" href="../controllers/Logout.php"><i class="fa fa-power-off"></i> Logout </a>
		          </div>
				</li>
			</ul>
			<?php } ?> 
		
	</div>
</nav>


  <?php include('editAccount.php'); ?>
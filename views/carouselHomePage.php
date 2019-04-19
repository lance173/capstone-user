<?php 
	require('../controllers/SliderController.php'); 

	$visitor = visitCounter();
	$slide = loadSliderItems();
?>
<header>
	<div class="jumbotron p-4 p-md-5 text-white rounded backgroundLight">
		<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
			<ol class="carousel-indicators">
				<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
				<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
				<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
			</ol>
			<div class="carousel-inner" role="listbox">
				<!-- Slide One - Set the background image for this slide in the line below -->
				<div class="carousel-item active" style="background-image: url('../../capstone-admin<?php echo $slide['FirstSlideImage']; ?>')">
					<div class="carousel-caption d-none d-md-block">
						<h3><?php echo $slide['FirstSlideTitle']; ?></h3>
						<p><?php echo $slide['FirstSlideDescription']; ?></p>
					</div>
				</div>
				<!-- Slide Two - Set the background image for this slide in the line below -->
				<div class="carousel-item" style="background-image: url('../../capstone-admin<?php echo $slide['SecondSlideImage']; ?>')">
					<div class="carousel-caption d-none d-md-block">
						<h3><?php echo $slide['SecondSlideTitle']; ?></h3>
						<p><?php echo $slide['SecondSlideDescription']; ?></p>
					</div>
				</div>
				<!-- Slide Three - Set the background image for this slide in the line below -->
				<div class="carousel-item" style="background-image: url('../../capstone-admin<?php echo $slide['ThirdSlideImage']; ?>')">
					<div class="carousel-caption d-none d-md-block">
						<h3><?php echo $slide['ThirdSlideTitle']; ?></h3>
						<p><?php echo $slide['ThirdSlideDescription']; ?></p>
					</div>
				</div>
			</div>
			<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
				<i class="fas fa-angle-left"></i>
				<span class="sr-only">Previous</span>
			</a>
			<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
				<i class="fas fa-angle-right"></i>
				<span class="sr-only">Next</span>
			</a>
		</div>
	</div>
</header>

<div class="home-mid-usclibsyst">
	<h1>USC Library System</h1>
	<center> 
		<div class="home-gatewayusclibsyst"> 
			Gateway for Accessing Information Resources
		</div> 
	</center>	
</div>


<?php require('../controllers/Article&CommentController.php');

$article =loadArticles();

?>
<div class="body-container">
	<div class="container">
		<div style="margin-bottom: 50px;">
			<h2 class="home-titles1">Latest News</h2>	
			<hr class="orangelines1" style="width: 40%;" >
		</div>		
		<div class="row featured-row">
			<div style="border:1px ;width:1200px;height:100%;overflow-y:hidden;overflow-x:hidden;">
				<div class="row mb-2">
					<?php foreach($article as $a){   ?>
						<div class="col-md-6">
							<div class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
								<div class="col p-4 d-flex flex-column position-static">
									<strong class="d-inline-block mb-2 text-primary" style="visibility: hidden;">World</strong>
									<h3 class="mb-0"><?php echo $a['Title'];?></h3>
									<div class="mb-1 text-muted">
										Published <?php $dateCreat=date_create($a['DatePublished']); echo date_format($dateCreat,"F d, Y"); ?>
									</div>
									<p class="card-text mb-auto">
										<?php echo substr($a['Content'], 0, 300);?>...
									</p>
									<a href=../views/ArticlePage.php?id=<?php echo $a['ArticleID']?> class="stretched-link">Continue reading
									</a>
								</div>

								<div class="col-auto d-none d-lg-block">
									<div class="col p-4 d-flex flex-column position-static" style="background-image: url('../../capstone-admin<?php echo $a['FeaturePhoto']; ?>'); background-size: cover; width: 260px; height: 300px; background-position: center; overflow: hidden;" >
									</div>
								</div>
							</div>
						</div>
    				<?php } ?>    				
  				</div>
			</div>
		</div>
	</div>

	

	<main role="main" class="container">
		<div class="row" style="margin-top: 50px;">
			<div class="col-md-8 blog-main" style="margin-bottom: 15px;">
				<div class="aboutlibraries">
			        <img src="../assets/img/jb-lrc3.jpg" style="width: 100%; height: 250px">
			        <div class="aboutlibraries-text">
			            <h2 class="home-titles1">About the University Libraries</h2>			            
			        </div>			        
			    </div>
			    <div style="margin-top: 50px; margin-right: 30px;">
			    	<p style="text-align: justify;"> The USC Library System provides information resources and services responsive to the curricular and research needs of the Carolinian community, supporting the goal-directed thrusts of the University. Professional and licensed librarians supervise a total of 15 libraries, five audio-visual centers, and central acquisition and cataloging units located in four (of five) campuses of the University. </p>
			    </div>			
			</div>

			<div class="col-md-4" style="margin-bottom: 15px;">
				<div class="hoursofservice" id="hoursofservice">
					<h2 class="home-titles1">Hours of Service</h2>	
					<hr class="orangelines1" style="width: 70%;" >
						<div id="downtowncampus-library" class="campus-sched">
							<span class="hrsofsrvc-campus">Downtown Campus</span>
							<div class="row">
								<div class="col-sm-6">
									<div class="library-facilityandtime">
										<span class="library-area"> American Corner </span>
										<span class="library-area-time"> 7:30 AM - 8:00 PM </span>
									</div>
									<div class="library-facilityandtime">
										<span class="library-area"> Bonk's Library </span>
										<span class="library-area-time"> 7:30 AM - 8:00 PM </span>
									</div>	
									<div class="library-facilityandtime">
										<span class="library-area"> Law Library </span>
										<span class="library-area-time"> 8:00 AM - 8:00 PM </span>
									</div>										
								</div>
								<div class="col-sm-6">
									<div class="library-facilityandtime">
										<span class="library-area"> Buttenbrunch Hall </span>
										<span class="library-area-time"> 7:30 AM - 8:00 PM MON -FR </span>
										<span class="library-area-time"> 7:30 AM - 5:00 PM SAT</span>
									</div>	
									<div class="library-facilityandtime">
										<span class="library-area"> van Ginsewinkel Hall </span>
										<span class="library-area-time"> 7:30 AM - 8:00 PM MON -FR </span>
										<span class="library-area-time"> 7:30 AM - 5:00 PM SAT </span>
									</div>										
								</div>
							</div>
						</div>
						<div id="northcampus-library" class="campus-sched" style="display: none; margin-bottom: 109px;">
							<span class="hrsofsrvc-campus">North Campus</span>
							<div class="row">
								<div class="col-sm-6">
									<div class="library-facilityandtime">
										<span class="library-area"> Basic Education Library </span>
										<span class="library-area-time"> 7:00 AM - 5:30 PM </span>
									</div>																	
								
									<div class="library-facilityandtime">
										<span class="library-area"> Norton Hall </span>
										<span class="library-area-time"> 8:00 AM - 12:00 NN </span>
										<span class="library-area-time"> 1:00 PM - 5:00 PM </span>
									</div>																	
								</div>
							</div>
						</div>
						<div id="southcampus-library" class="campus-sched" style="display: none; margin-bottom: 109px;">
							<span class="hrsofsrvc-campus">South Campus</span>
							<div class="row">
								<div class="col-sm-6">
									<div class="library-facilityandtime">
										<span class="library-area"> Education Library </span>
										<span class="library-area-time"> 7:30 AM - 6:30 PM MON -FR </span>
										<span class="library-area-time"> 8:00 AM - 5:30 PM SAT </span>
									</div>
									<div class="library-facilityandtime">
										<span class="library-area"> Basic Education Libraries </span>
										<span class="library-area-time"> 7:00 AM - 5:30 PM </span>
									</div>										
								</div>
								<div class="col-sm-6">
									<div class="library-facilityandtime">
										<span class="library-area"> Buchcik Hall </span>
										<span class="library-area-time"> 7:30 AM - 6:30 PM MON -FR </span>
										<span class="library-area-time"> 8:00 AM - 5:30 PM SAT </span>
									</div>																	
								</div>
							</div>
						</div>
						<div id="talambancampus-library" class="campus-sched" style="display: none; margin-bottom: 109px;">
							<span class="hrsofsrvc-campus">Talamban Campus</span>
							<div class="row">
								<div class="col-sm-6">
									<div class="library-facilityandtime">
										<span class="library-area"> Hoeppner Hall </span>
										<span class="library-area-time"> 7:30 AM - 7:30 PM MON -FR</span>
										<span class="library-area-time"> 7:30 AM - 5:00 PM SAT </span>
									</div>
									<div class="library-facilityandtime">
										<span class="library-area"> JB - LRC </span>
										<span class="library-area-time"> 7:30 AM - 6:00 PM </span>
									</div>																		
								</div>
								<div class="col-sm-6">
									<div class="library-facilityandtime">
										<span class="library-area"> Rigney Hall </span>
										<span class="library-area-time"> 7:30 AM - 7:30 PM MON -FR </span>
										<span class="library-area-time"> 7:30 AM - 12:00 NN SAT </span>
									</div>	
									<div class="library-facilityandtime">
										<span class="library-area"> van Engelen AV Room </span>
										<span class="library-area-time"> 7:30 AM - 4:30 PM MON -SAT </span>
									</div>										
								</div>
							</div>
						</div>
						<div class="hrsofsrvccampus-selector">
							<div> <a href="#hoursofservice" onclick="showdowntownhours();">Downtown Campus</a> | <a href="#hoursofservice" onclick="shownorthhours();">North Campus</a> </div>
							<div> <a href="#hoursofservice" onclick="showsouthhours();" >South Campus</a> | <a href="#hoursofservice" onclick="showtalambanhours();">Talamban Campus</a> </div>
						</div>							
						
				</div>			
			</div>
		</div><!-- /.row -->	
	</main>
</div>

	
	<div class="row">
		<div class="jumbotron home-virtualtour" style="width:100%">
			<div style="background-color: rgba(0,0,0,0.7);">
				<div style="text-align: center; padding: 150px; color: #FFF;">
					<h3>UNIVERSITY OF SAN CARLOS LIBRARIES</h3>
					<div class="threesixty-degrees"><span class="threesixty">360</span><span class="degrees">°</span></div>
					<h2>VIRTUAL TOUR</h2>
						<div style="margin-top: 30px;">
							<h2 class="start-tour"> <button class="btn btn-starttour" onclick="window.location='startvirtualtour.php'">START TOUR</button> </h2>
						</div>
						
				</div>				
			</div>			
		</div>
	</div>

<br>

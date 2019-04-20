<?php 
	require('header.php');
	require('nav.php');
	require('../controllers/Article&CommentController.php');
	require('../controllers/rating360.php'); 

    $ratings = loadRatings();

?>

<div style="background-color: #333;">
	<div class="container" >
		<div style="color: #FFF; padding-top: 100px; padding-bottom: 70px; font-size: 30px; font-family: Roboto;">
			<center> Choose Library to start the 360° tour. </center>
		</div>
		
		<div class="row">
			<div class="col-md-6" onclick="window.location='https://assets.veervr.tv/@veervr/blink/v0.9.4/embed/index.html?ixId=3dssCwjigrgBbevKjLMb3ePn1Bg&lang=en&utm_medium=embed'">
				<div style="padding: 40px;">
					<div style="background-image: url('../assets/img/inside-lrc.jpg'); background-repeat: no-repeat; background-position: center; background-size: cover; ">
						<div class="virtualtour-text-bg">
							<div class="virtualtour-text"> 
								Josef Baumgartner - Learning Research Center <br>
								<hr class="virtualtour-line"> 
								Talamban Campus
							</div>
						</div>						
					</div>
				</div>				
			</div>
			<div class="col-md-6" onclick="window.location='https://assets.veervr.tv/@veervr/blink/v0.9.4/embed/index.html?ixId=qD2e4vhhy1RN2Pq43bAYKXt2RaA&lang=en&utm_medium=embed'">
				<div style="padding: 40px;">
					<div style="background-image: url('../assets/img/inside-maincampuslibrary.jpg'); background-repeat: no-repeat; background-position: center; background-size: cover; ">
						<div class="virtualtour-text-bg">
							<div class="virtualtour-text"> 
								Bonk Library <br>
								<hr class="virtualtour-line"> 
								Downtown Campus
							</div>
						</div>						
					</div>
				</div>				
			</div>
		</div>
		<div class="row">
			<div class="col-md-6" onclick="window.location='https://assets.veervr.tv/@veervr/blink/v0.9.4/embed/index.html?ixId=qD2e4vhhy1RN2Pq43bAYKXt2RaA&lang=en&utm_medium=embed'">
				<div style="padding: 40px;">
					<div style="background-image: url('../assets/img/featured3.jpg'); background-repeat: no-repeat; background-position: center; background-size: cover; ">
						<div class="virtualtour-text-bg">
							<div class="virtualtour-text"> 
								Montessori Academy Library <br>
								<hr class="virtualtour-line">  
								Montessori Campus
							</div>
						</div>						
					</div>
				</div>				
			</div>
			<div class="col-md-6" onclick="window.location='https://assets.veervr.tv/@veervr/blink/v0.9.4/embed/index.html?ixId=AnfNDvUHyFV4f7noZXT1z6mmCF8&lang=en&utm_medium=embed'">
				<div style="padding: 40px;" >
					<div style="background-image: url('../assets/img/inside-northcampuslibrary.jpg'); background-repeat: no-repeat; background-position: center; background-size: cover; ">
						<div class="virtualtour-text-bg">
							<div class="virtualtour-text"> 
								Basic Education Library <br>
								<hr class="virtualtour-line"> 
								North Campus
							</div>
						</div>						
					</div>
				</div>				
			</div>
		</div>
		<div class="row">
			<div class="col-md-6" onclick="window.location='https://assets.veervr.tv/@veervr/blink/v0.9.4/embed/index.html?ixId=lQMiYrXe8oK03aKLj4L17_YoD6s&lang=en&utm_medium=embed'">
				<div style="padding: 40px;">
					<div style="background-image: url('../assets/img/inside-southcampuscollegelibrary.jpg'); background-repeat: no-repeat; background-position: center; background-size: cover; ">
						<div class="virtualtour-text-bg">
							<div class="virtualtour-text"> 
								Education Library <br>
								<hr class="virtualtour-line">  
								South Campus
							</div>
						</div>						
					</div>
				</div>				
			</div>
			<div class="col-md-6" onclick="window.location='https://assets.veervr.tv/@veervr/blink/v0.9.4/embed/index.html?ixId=EnnscUD5gAs5pqMptK34naJuFPw&lang=en&utm_medium=embed'">
				<div style="padding: 40px;">
					<div style="background-image: url('../assets/img/inside-southcampushighschoollibrary.jpg'); background-repeat: no-repeat; background-position: center; background-size: cover; ">
						<div class="virtualtour-text-bg">
							<div class="virtualtour-text"> 
								Basic Education - High School Library <br>
								<hr class="virtualtour-line"> 
								South Campus
							</div>
						</div>						
					</div>
				</div>				
			</div>
		</div>
	</div>	
</div>

<?php include('ratingForm.php'); ?>

<div style="margin: 70px 0px; text-align: center;">	
	<button data-toggle="modal" data-target="#rateModal" class="btn btn-ratenow"> 
		 Rate Virtual Tour 
	</button>
</div>

<div class="container" id="rating-section">
	
	<div class="row">
		<div class="col-md-12">
			<div class="home-titles1" style="display: inline-block;"> <h1> Ratings </h1>  </div> &nbsp; <div style="display: inline-block;"> <h5> •  &nbsp; Our students review on the Virtual Tour </h5>  </div> <br>
			<hr class="orangelines1" style="width: 50%;" >
		</div>
	</div>

	
	<div class="row" >
		<?php if(isset($ratings)){
        foreach($ratings as $r){   
    	?>
			<div class="col-md-6" style="margin-top: 50px;">
				<div class="media mb-4">
	                <img class="d-flex mr-3 rounded-circle rating-userphoto" src="../../capstone-admin<?php echo $r['Photo'];?>" alt="">
	                <div class="media-body">
	                    <div class="rating-username">
	                        <h5><?php echo $r['FirstName']; echo ' '; echo $r['LastName'];?></h5> 
	                    </div>
	                    <div class="rating-stars">
	                         <?php if($r['Stars'] == 1){?>
                                <span class="fa fa-star star-checked"></span>
                                <span class="fa fa-star"></span>
                                <span class="fa fa-star"></span>
                                <span class="fa fa-star"></span>
                                <span class="fa fa-star"></span>
                            
                            <?php }else if($r['Stars'] == 2){?>
                                <span class="fa fa-star star-checked"></span>
                                <span class="fa fa-star star-checked"></span>
                                <span class="fa fa-star"></span>
                                <span class="fa fa-star"></span>
                                <span class="fa fa-star"></span>
                            
                            <?php }else if($r['Stars'] == 3){?>
                                <span class="fa fa-star star-checked"></span>
                                <span class="fa fa-star star-checked"></span>
                                <span class="fa fa-star star-checked"></span>
                                <span class="fa fa-star"></span>
                                <span class="fa fa-star"></span>
                        
                            <?php }else if($r['Stars'] == 4){?>
                                <span class="fa fa-star star-checked"></span>
                                <span class="fa fa-star star-checked"></span>
                                <span class="fa fa-star star-checked"></span>
                                <span class="fa fa-star star-checked"></span>
                                <span class="fa fa-star"></span>

                            <?php }else if($r['Stars'] == 5){?>
                                <span class="fa fa-star star-checked"></span>
                                <span class="fa fa-star star-checked"></span>
                                <span class="fa fa-star star-checked"></span>
                                <span class="fa fa-star star-checked"></span>
                                <span class="fa fa-star star-checked"></span>
                            <?php }?>
	                    </div>
	                    
	                  <div class="rating-feedback">
	                      <?php echo $r['Feedback'];?>
	                  </div>                      
	                  
	                </div>
	            </div>
			</div>
		<?php }} ?>
	</div>
</div>






<?php
	require('footer.php');
?> 
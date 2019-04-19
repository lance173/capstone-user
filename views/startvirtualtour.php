<?php 
	require('header.php');
	require('nav.php');
?>

<script type="text/javascript">
    $(window).load(function()
	{
	    $('#rateModal').modal('show');
	});
</script>

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
<div class="container" style="margin-top: 100px;">
	<div class="row">
		<div class="col-md-12">

			<div class="home-titles1" style="display: inline-block;"> <h1> Ratings </h1>  </div> &nbsp; <div style="display: inline-block;"> <h5> •  &nbsp; Our students review on the Virtual Tour </h5>  </div> <br>
			<hr class="orangelines1" style="width: 50%;" >
		</div>
	</div>
</div>


<!--Rating Modal-->
<div class="modal fade" id="rateModal" tabindex="-1" role="dialog" aria-labelledby="rateModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="rateModalLabel">Rate the Virtual Tour</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true"> &times; </span>
        </button>
      </div>
      <div class="modal-body">
        <form action="../controllers/Rating360.php" method="POST">
			<div id="wrap">
				<div id="main" class="container clear-top">

					<center>
					<fieldset name="set1" class="rating">

					    <input type="radio" id="field1_star5" name="rating1" value="5" /><label class = "full" for="field1_star5" title="Excellent - 5 stars"></label></label>

					    <input type="radio" id="field1_star4" name="rating1" value="4" /><label class = "full" for="field1_star4" title="Very Good - 4 stars"></label>

					    <input type="radio" id="field1_star3" name="rating1" value="3" /><label class = "full" for="field1_star3" title="Good - 3 stars"></label>

					    <input type="radio" id="field1_star2" name="rating1" value="2" /><label class = "full" for="field1_star2" title="Poor- 2 stars"></label>

					    <input type="radio" id="field1_star1" name="rating1" value="1" /><label class = "full" for="field1_star1" title="Needs Improvement - 1 star"></label>

					</fieldset>
					</center>
					
				</div>
			  <textarea class="form-control" name="comment" rows="3" required></textarea>
			</div>			
		</form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Later</button>
        <button type="submit" class="btn btn-primary" name="btnSubmit">Submit</button>
      </div>
    </div>
  </div>
</div>



<?php
	require('footer.php');
?> 
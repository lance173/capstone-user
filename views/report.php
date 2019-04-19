<?php if(!isset($_SESSION['profile'])){ ?>
	<div class="modal fade" id="reportModal" tabindex="-1" role="dialog" aria-labelledby="reportModalLabel">
	    <div class="modal-dialog modal-lg" role="document" style="width:100%; ">
	        <div class="modal-content" style="background-color: white;">
	            <div class="modal-header">
	                <h5 class="modal-title"></h5>
	                <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="color:#0000" value="X"></button>
	            </div>
	            <div class="modal-body">
				    <center>

				        <h1> You need to Login to report this user.  </h1>

				        <div style="padding: 50px 0px;">
				            <a href="login.php"><h4> Login now </h4></a>
				        </div>        
				    </center>
				</div>
	        </div>
	    </div>
	</div>   

<?php }else{ ?>
	<div class="modal fade" id="reportModal" tabindex="-1" role="dialog" aria-labelledby="reportModalLabel">
	    <div class="modal-dialog modal-lg" role="document" style="width:100%; ">
	        <div class="modal-content" style="background-color: white;">
	            <div class="modal-header">
	                <h3 class="modal-title">  Report User  </h3>
	                <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="color:#FFF" value="X"></button>
	            </div>
	            <div class="modal-body">             
	            	<form action="../controllers/Article&CommentController.php" method="POST" onsubmit="return submitReport(this);">
						<div>
							
							<textarea class="form-control textarea-bg" name="reason" rows="2" placeholder="State reason for reporting user..." required></textarea>
						</div>
						<div class="reported-comment">
						    <img id="reported-photo"> 
						    <div id="reported-firstname"></div> <div id="reported-lastname"></div>
						    <p>
						        <div id="reportcomment-content"> </div>
						    </p>
						</div> 

						<input type="text" name="articleID" id="articleID" hidden>
						<input type="text" name="commentID" id="commentID" hidden>
						<input type="text" name="currentUser" value="<?php echo $_SESSION['profile']['StudentID'];?>" hidden>
						<input type="text" name="reportedUser" id="reportedUserID" hidden>
						
						<div class="modal-footer">
							<button type="submit" class="btn btn-rptusr" name="btnReportSubmit">Submit Report</button>
							<button data-dismiss="modal" aria-label="Close" class="btn btn-danger">Cancel</button>
						</div>
					</form>              
	            </div>
	        </div>
	    </div>
	</div>
<?php } ?>
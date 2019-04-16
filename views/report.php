<form action="../controllers/Article&CommentController.php" method="POST">
<div>
	Reason 
	<textarea class="form-control" name="reason" rows="1" required></textarea>
</div>
<input type="text" name="articleID" id="articleID" >
<input type="text" name="commentID" id="commentID"  >
<input type="text" name="currentUser" value="<?php echo $_SESSION['profile']['FirstName'];?>" >
<input type="text" name="reportedUser" id="reportedUserID" >

<button type="submit" class="btn btn-primary" name="btnReportSubmit">Submit</button>
</form>



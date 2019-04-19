<form action="../controllers/Article&CommentController.php" method="POST">
<div>
	Report User
	<textarea class="form-control" name="reason" rows="3" required></textarea>
</div>
<div class="reported-comment">
    <img id="reported-photo"> 
    <div id="reported-firstname"></div> <div id="reported-lastname"></div>
    <p>
        <div id="reportcomment-content"> </div>
    </p>
</div> 

<input type="text" name="articleID" id="articleID" >
<input type="text" name="commentID" id="commentID"  >
<input type="text" name="currentUser" value="<?php echo $_SESSION['profile']['FirstName'];?>" >
<input type="text" name="reportedUser" id="reportedUserID" >

<button type="submit" class="btn btn-primary" name="btnReportSubmit">Submit</button>
</form>



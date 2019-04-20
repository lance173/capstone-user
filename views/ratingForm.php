<!--Rating Modal-->
<div class="modal fade" id="rateModal" tabindex="-1" role="dialog" aria-labelledby="rateModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="rateModalLabel">Rate the Virtual Tour</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true"> &times; </span>
                    </button>

                    <?php
                        if(isset($_SESSION['profile'])){
                            $isLoggedIn = "true";
                            $status = $_SESSION['profile']['Status']; 
                        } else {
                            $isLoggedIn = "false";
                            $status = 'none'; 
                        }
                    ?>
            </div>
            <form action="../controllers/Rating360.php" method="POST" onsubmit="return submitRating(this, '<?php echo $isLoggedIn; ?>', '<?php echo $status; ?>');"> 
                <div class="modal-body">                
                        <div id="wrap">
                            <div id="main" class="container clear-top">
                                <fieldset name="starrating-set" class="rating">
                                    <input type="radio" id="field1_star5" name="starrating" value="5" /><label class = "full" for="field1_star5" title="Excellent - 5 stars"></label></label>

                                    <input type="radio" id="field1_star4" name="starrating" value="4" /><label class = "full" for="field1_star4" title="Very Good - 4 stars"></label>

                                    <input type="radio" id="field1_star3" name="starrating" value="3" /><label class = "full" for="field1_star3" title="Good - 3 stars"></label>

                                    <input type="radio" id="field1_star2" name="starrating" value="2" /><label class = "full" for="field1_star2" title="Poor- 2 stars"></label>

                                    <input type="radio" id="field1_star1" name="starrating" value="1" /><label class = "full" for="field1_star1" title="Needs Improvement - 1 star"></label>
                                </fieldset>
                            </div>
                            <textarea class="form-control" name="feedback" rows="3" placeholder="Feedback..." required></textarea>
                        </div>    
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-rptusr" name="btnSubmit">Submit</button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Later</button>                    
                </div>
            </form>
        </div>
    </div>
</div>
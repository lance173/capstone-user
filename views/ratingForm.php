<form action="../controllers/Rating360.php" method="POST">
<div id="wrap">
  <div id="main" class="container clear-top">
    <fieldset name="set1" class="rating">

    <input type="radio" id="field1_star5" name="rating1" value="5" /><label class = "full" for="field1_star5" title="Excellent - 5 stars"></label></label>

    <input type="radio" id="field1_star4" name="rating1" value="4" /><label class = "full" for="field1_star4" title="Very Good - 4 stars"></label>

    <input type="radio" id="field1_star3" name="rating1" value="3" /><label class = "full" for="field1_star3" title="Good - 3 stars"></label>

    <input type="radio" id="field1_star2" name="rating1" value="2" /><label class = "full" for="field1_star2" title="Poor- 2 stars"></label>

    <input type="radio" id="field1_star1" name="rating1" value="1" /><label class = "full" for="field1_star1" title="Needs Improvement - 1 star"></label>

    </fieldset>
  </div>
  <textarea class="form-control" name="comment" rows="3" required></textarea>
</div>
<button type="submit" class="btn btn-primary" name="btnSubmit">Submit</button>
</form>
<footer class="footer">
  
</footer>
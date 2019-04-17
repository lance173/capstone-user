<?php 
  require('header.php');
  require('../controllers/WebPagesController.php');   
  require('nav.php');
  

    $id = $_GET['viewID'];
    $row = viewPage($id);
?>

<!-- Page Content -->
<div class="container">
<!-- Post Content Column -->
<br>
<div class="jumbotron text-white" style="background: url('../../capstone-admin<?php echo $row['FeaturePhoto'];?>'); background-size: cover;">
  <div class="container" style="background-color: rgba(0,0,0,0.5);">
    <br>
    <br>
    <center><h1 class="display-4"><?php echo $row['PageTitle'];?></h1></center>
    <br>
  </div>
</div>
<!-- Title -->
<hr>
<main role="main" class="container">
  <div class="row">
    <div class="blog-post">
        <div class="container marketing">
                <?php echo $row['Content'];?>
        </div>
  </div>
</main>

</div>




<?php
  require('footer.php');
?>  
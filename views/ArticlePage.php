<?php require('header.php');
require('../controllers/Article&CommentController.php');
require('nav.php');


$articles = loadArticles();


$id = $_GET['id'];
$comments = loadComments($id);
$row = displayArticle($id);
      
    

?>

<!-- Page Content -->
<div class="container" style="margin-top: 50px;">
  <div class="row">
    <!-- Post Content Column -->
    <div class="col-lg-8">
      <!-- Title -->
      <h1 class="mt-4"><?php echo $row['Title'];?></h1>
      <!-- Author -->
      <p class="lead">
        by <?php echo $row['FirstName']; echo' '; echo $row['LastName'];?>
      </p>
      <hr>
      <!-- Date/Time -->
      <p>Posted on <?php $dateCreat=date_create($row['DatePublished']); echo date_format($dateCreat,"F d, Y"); ?></p>
      <hr>
      <!-- Preview Image -->
      <img class="img-fluid rounded" src=../../capstone-admin<?php echo $row['FeaturePhoto']?> alt="" style="width: 100%; height: 500px;">
      <hr>
      <!-- Post Content -->
      <p class="lead"><?php echo $row['Content'];?></p>
                

      <hr>

      <!-- Comments Form -->
      <div class="card my-4">
        <h5 class="card-header">Leave a Comment:</h5>
        <div class="card-body">
            
          <form action="../controllers/Article&CommentController.php" method="POST">
            <div class="form-group">
              <input type="text" name="articleID" value="<?php echo $id;?>" hidden/ >
              <input type="text" name="userID" value="<?php echo $_SESSION['profile']['StudentID'];?>" hidden/>
              <input type="text" name="studentStatus" value="<?php echo $_SESSION['profile']['Status'];?>" hidden/>
              <textarea class="form-control" name="comment" rows="3" required></textarea>
            </div>
           
            <button type="submit" class="btn btn-primary" name="btnSubmit">Submit</button>
          </form>
        </div>
      </div>

      <!-- Single Comment -->
    <?php if(isset($comments)){
      foreach($comments as $c){   
    ?>
      <div class="media mb-4">
        <img class="d-flex mr-3 rounded-circle resize" src="../assets/img/user-3.jpg" alt="">
        <div class="media-body">
          <h5 class="mt-0"><?php echo $c['FirstName'];?></h5>
          <?php echo $c['Content'];?>
          <p>
              
              <input type="text" name="commentID" value="<?php echo $id;?>" hidden/>
              <input type="text" name="commentID" value="<?php echo $c['CommentID'];?>" hidden/>
              <input type="text" name="userID" value="<?php echo $c['FirstName'];?>" hidden/>
              <input type="text" name="reporterID" value="<?php echo $_SESSION['profile']['FirstName'];?>" hidden/>
            <button class="btn btn-sm btn-default" type="submit" data-toggle="modal" data-target="#myModal" onclick="reportComment('<?php echo $c['CommentID']?>')"> Report </button>
          </p>

          <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog modal-lg" role="document" style="width:100%; ">
              <div class="modal-content" style="background-color: white;">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="color:#0000" value="X"></button>
                </div>
                <div class="modal-body">
                  <?php if(!isset($_SESSION['profile'])){
                    include 'login.php';
                  }else{
                    include 'report.php';
                  }
                  ?>
                </div>
              </div>
            </div>
          </div>

        </div>
      </div>
    <?php }} ?> 
  </div>
    


      <!-- Comment with nested comments -->


    <!-- Sidebar Widgets Column -->
    <div class="col-md-4">
      <!-- Search Widget -->
     
      <div class="card my-4">
        <h5 class="card-header">More Articles</h5>
        <div class="card-body">
          <div style="max-width: 350px; height: 770px;">
            <div style="height: 100%; overflow: auto;">
              <?php foreach($articles as $a){   ?>
              <div class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative" onclick="clickArticle('<?php echo $a['ArticleID']?>')">
                <div class="col p-4 d-flex flex-column position-static">
                  <h3 class="mb-0"><?php echo $a['Title'];?></h3>
                  <img class="img-fluid rounded image-resize" src="../../capstone-admin<?php echo $a['FeaturePhoto'];?>" alt="" style="margin-top: 20px;">
                  <div class="mb-1 text-muted"><?php $dateCreat=date_create($a['DatePublished']); echo date_format($dateCreat,"F d, Y"); ?></div>
                  <p class="card-text mb-auto"><?php echo substr($a['Content'], 0, 280);?>...</p>
                  <a href="../views/ArticlePage.php?id=<?php echo $a['ArticleID']?>">Read More</a>
                </div>
              </div>
            <?php } ?> 
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- /.row -->
<!-- /.container -->
<?php
  require('footer.php');
?>  
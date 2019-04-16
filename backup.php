<?php 

if(isset($_POST['btnSubmit'])){
      addComment();
}

function addComment(){
  session_start();
  $conn = myConnect();
     if(isset($_POST['btnSubmit'])){
      
        $comment_content = $_POST['comment']; 
        //$sql = "SELECT * FROM articles WHERE ArticleID = '{$_POST['articleID']}' ";
      //$result = mysqli_query($conn, $sql);
      //$row = mysqli_fetch_assoc($result);
      $comment_UserID = $_SESSION['profile']['StudentID'];
      $comment_articleID = $_POST['articleID'];


   $sql = "INSERT INTO comments(content, StudentID, ArticleID) VALUES ('$comment_content', '$comment_UserID','$comment_articleID')";
   $result = mysqli_query($conn, $sql);
    if($result){
      header("Location:../views/ArticlePage.php?id=".$comment_articleID);
    }else{
      echo "Error!!!! ".mysqli_error($conn);
    }

  }
 
}

function loadArticles(){
   $conn = myConnect();
   $sql = "SELECT * FROM articles WHERE Status = 'PUBLISHED'";
   $result = mysqli_query($conn, $sql);

   while($row=mysqli_fetch_array($result)){
      //do something as long as there's a remaining row.
      $rows[] = $row;
   }
   return $rows;  
}

function featuredArticle(){
   $conn = myConnect();
   $sql = "SELECT * FROM articles WHERE Status = 'PUBLISHED'";
   $result = mysqli_query($conn, $sql);
   $row = mysqli_fetch_assoc($result);    
   return $row; 
}

//function viewArticle(){ 
//		$conn = myConnect();
//		$id = $_GET['id'];
//   		$sql = "SELECT * FROM articles WHERE ArticleID = '$id'";
//   		$result = mysqli_query($conn, $sql) or die("error");
//
//   		if(mysqli_num_rows($result) > 0){
//   			while($article = mysqli_fetch_assoc($result)){
//   				$id = $article['ArticleID'];
//   				$title = $article['Title'];
//   				$photo = $article['FeaturePhoto'];
//   				$content = $article['Content'];



//   				$data = array(
//   					'id' => $id,
//   					'title' => $title,
//   					'photo' => $photo,
//   					'content' => $content,
//   				);
//   				echo '<pre>';
//   				print_r($data);
//   				echo '</pre>';
//   			}

//   		}
//   	}

?>















<?php require('header.php'); //nana ni sql
      require('../controllers/Article.php');

      $articles = loadArticles();

      $conn = myConnect();
      $id = $_GET['id'];
        $sql = "SELECT * FROM articles WHERE ArticleID = '$id'";
        $result = mysqli_query($conn, $sql) or die("error");

      if(mysqli_num_rows($result) > 0){
        while($article = mysqli_fetch_assoc($result)){
          $id = $article['ArticleID'];
          $title = $article['Title'];
          $photo = $article['FeaturePhoto'];
          $date = $article['DatePublished'];
          $author = $article['AdminID'];
          $content = $article['Content'];
      }

      }else{

      }
    

?>

<!-- Page Content -->
<div class="container">
  <div class="row">
    <!-- Post Content Column -->
    <div class="col-lg-8">
      <!-- Title -->
      <h1 class="mt-4"><?php echo $title;?></h1>
      <!-- Author -->
      <p class="lead">
        by
        <a href="#"><?php echo $author;?></a>
      </p>
      <hr>
      <!-- Date/Time -->
      <p>Posted on <?php $dateCreat=date_create($date); echo date_format($dateCreat,"F d, Y"); ?></p>
      <hr>
      <!-- Preview Image -->
      <img class="img-fluid rounded" src=../../capstone-admin<?php echo $photo?> alt="">
      <hr>
      <!-- Post Content -->
      <p class="lead"><?php echo $content;?></p>
                

      <hr>

      <!-- Comments Form -->
      <div class="card my-4">
        <h5 class="card-header">Leave a Comment:</h5>
        <div class="card-body">
          <form action="../controllers/Comment.php" method="POST">
            <div class="form-group">
              <input type="text" name="articleID" value="<?php echo $id;?>" hidden/ >
              <input type="text" name="userID" value="<?php echo $_SESSION['profile']['StudentID'];?>" hidden/>
              <textarea class="form-control" name="comment" rows="3" ></textarea>
            </div>
            <button type="submit" class="btn btn-primary" name="btnSubmit">Submit</button>
          </form>
        </div>
      </div>

      <!-- Single Comment -->
      <div class="media mb-4">
        <img class="d-flex mr-3 rounded-circle resize" src="../assets/img/user-3.jpg" alt="">
        <div class="media-body">
          <h5 class="mt-0">Sakuragi</h5>
          Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
          <p>
            <button class="btn btn-sm btn-default">
              <span class="glyphicon glyphicon-thumbs-up"></span> Reply
            </button>
            <button class="btn btn-sm btn-default">
              <span class="glyphicon glyphicon-thumbs-down"></span> Report
            </button>
          </p>
        </div>
      </div>
    </div>
    


      <!-- Comment with nested comments -->


    <!-- Sidebar Widgets Column -->
    <div class="col-md-4">
      <!-- Search Widget -->
      <!-- <a href=viewArticle.php?id=<?php echo $a['ArticleID'];?>>Read More</a> -->
      <div class="card my-4">
        <h5 class="card-header">More Articles</h5>
        <div class="card-body">
          <div style="max-width: 350px; height: 52vh;">
            <div style="height: 100%; overflow: auto;">
              <?php foreach($articles as $a){   ?>
              <div class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                <div class="col p-4 d-flex flex-column position-static">
                  <strong class="d-inline-block mb-2 text-primary">World</strong>
                  <h3 class="mb-0"><?php echo $a['Title'];?></h3>
                  <img class="img-fluid rounded image-resize" src="../../capstone-admin<?php echo $a['FeaturePhoto'];?>" alt="">
                  <div class="mb-1 text-muted"><?php $dateCreat=date_create($a['DatePublished']); echo date_format($dateCreat,"F d, Y"); ?></div>
                  <p class="card-text mb-auto"><?php echo substr($a['Content'], 0, 200);?>...</p>
                  <a href=../views/ArticlePage.php?id=<?php echo $a['ArticleID']?>>Read More</a>
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
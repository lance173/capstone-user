<<body id="login">
  <div id="companytitle"> LUK <span class="glyphicon glyphicon-cog" aria-hidden="true"></span> 137 </div>
  <div class="container">
    <div class="row">
      <div class="col-md-6"> 
        <form name="loginForm" class="form-signin" method="POST" action="../controllers/LoginController.php">
          <h2 class="form-signin-heading">Customer Log-in</h2>
          <input name="loginUsername" type="text" class="input-block-level" placeholder="Username" required>
          <input name="loginPassword" type="password" class="input-block-level" placeholder="Password" required>
          <button name="btnLoginSubmit" class="btn btn-large btn-primary" type="submit">Log in</button>
        </form>
        <!--<?php //include_once '../controllers/LoginError.php';?>-->
      </div><!-- /column -->







      <div class="media mb-4">
        <img class="d-flex mr-3 rounded-circle resize" src="../assets/img/user-2.jpg" alt="">
        <div class="media-body">
          <h5 class="mt-0">Saitama</h5>
          Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
          <p>
            <button class="btn btn-sm btn-default">
              <span class="glyphicon glyphicon-thumbs-up"></span> Reply
            </button>
            <button class="btn btn-sm btn-default">
              <span class="glyphicon glyphicon-thumbs-down"></span> Report
            </button>
          </p>

          <div class="media mt-4">
            <img class="d-flex mr-3 rounded-circle resize" src="../assets/img/user-1.jpg" alt="">
            <div class="media-body">
              <h5 class="mt-0">Midoriya</h5>
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

          <div class="media mt-4">
            <img class="d-flex mr-3 rounded-circle resize" src="../assets/img/user-3.jpg" alt="">
            <div class="media-body">
              <h5 class="mt-0">Bakugo</h5>
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
      </div>
    </div>















        <div class="col-lg-8">
      <?php foreach($view as $v){   ?>
      <!-- Title -->
      <h1 class="mt-4"><?php echo $v['Title'];?></h1>
      <!-- Author -->
      <p class="lead">
        by
        <a href="#"><?php echo $v['Title'];?></a>
      </p>
      <hr>
      <!-- Date/Time -->
      <p>Posted on January 1, 2019 at 12:00 PM</p>
      <hr>
      <!-- Preview Image -->
      <img class="img-fluid rounded" src="../assets/img/facility2.jpg" alt="">
      <hr>
      <!-- Post Content -->
      <p class="lead"><?php echo $v['Content'];?></p>
                  <?php } ?> 

      <hr>

      <!-- Comments Form -->
      <div class="card my-4">
        <h5 class="card-header">Leave a Comment:</h5>
        <div class="card-body">
          <form action="../controllers/postComment.php" method="POST">
            <div class="form-group">
              <textarea class="form-control" rows="3"></textarea>
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






    php require('MysqlConnect.php'); 

if(isset($_GET['displayID'])){
  viewArticle();  
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

function viewArticle(){ 
    $conn = myConnect();
    echo $id = $_GET['displayID'];
      $sql = "SELECT * FROM articles WHERE ArticleID = '$id'";
      $result = mysqli_query($conn, $sql) or die("error");

      if(mysqli_num_rows($result) > 0){
        while($article = mysqli_fetch_assoc($result)){
          echo $id = $article['ArticleID'];
          echo $title = $article['Title'];
          echo $photo = $article['FeaturePhoto'];
          echo $content = $article['Content'];



          $data = array(
            'id' => $id,
            'title' => $title,
            'photo' => $photo,
            'content' => $content,
          );
        }
        header("Location:../controllers/displayArticle.php");

      }
    }

?>





      <div class="col-lg-8">
      <!-- Title -->
      <h1 class="mt-4"><?php echo $title;?></h1>
      <!-- Author -->
      <p class="lead">
        by
        <a href="#"><?php echo $content;?></a>
      </p>
      <hr>
      <!-- Date/Time -->
      <p>Posted on January 1, 2019 at 12:00 PM</p>
      <hr>
      <!-- Preview Image -->
      <img class="img-fluid rounded" src=<?php echo $article['FeaturePhoto']?> alt="">
      <hr>
      <!-- Post Content -->
      <p class="lead"><?php echo $v['Content'];?></p>


      <hr>

      <!-- Comments Form -->
      <div class="card my-4">
        <h5 class="card-header">Leave a Comment:</h5>
        <div class="card-body">
          <form action="../controllers/postComment.php" method="POST">
            <div class="form-group">
              <textarea class="form-control" rows="3"></textarea>
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
<?php require_once('MysqlConnect.php');

if(isset($_POST['btnSubmit'])){
      addComment();
}

if(isset($_POST['btnReportSubmit'])){
      reportComment();
}

function displayArticle($id){
      $conn = myConnect();
  $sql = "SELECT articles.ArticleID, articles.Title, articles.FeaturePhoto, articles.Content, articles.DatePublished, articles.Status, articles.AdminID, admins.AdminID, admins.FirstName, admins.LastName FROM 
   articles INNER JOIN admins on articles.AdminID = admins.AdminID WHERE ArticleID = '$id' LIMIT 1 ";
      $result = mysqli_query($conn, $sql) or die("error");
      $row = mysqli_fetch_assoc($result);
      return (isset($row)) ? $row : NULL; 

}

function loadArticles(){
   $conn = myConnect();
   $sql = "SELECT * FROM articles WHERE Status = 'PUBLISHED' ORDER BY ArticleID DESC LIMIT 4";
   $result = mysqli_query($conn, $sql);

   while($row=mysqli_fetch_array($result)){
      //do something as long as there's a remaining row.
      $rows[] = $row;
   }
   return (isset($rows)) ? $rows : NULL;    
}


function addComment(){
  session_start();
  $conn = myConnect();
     if(isset($_POST['btnSubmit'])&&isset($_SESSION['profile'])){
      $comment_content = $_POST['comment']; 
      $comment_UserID = $_SESSION['profile']['StudentID'];
      $comment_Status = $_SESSION['profile']['Status'];
      $comment_articleID = $_POST['articleID'];

      if($comment_Status != 'BLOCKED'){
        $sql = "INSERT INTO comments(Content, StudentID, ArticleID) VALUES ('$comment_content', '$comment_UserID','$comment_articleID')";
        $result = mysqli_query($conn, $sql);
        header("Location:../views/ArticlePage.php?id=".$comment_articleID."#comment-section");
      }else{
        ?>
        <script>
          alert('User is blocked!');
          window.location = "../views/ArticlePage.php?id="+<?php echo $comment_articleID ?>;
        </script>
        <?php

      }
      
      }else{
        //header("Location:../views/login.php");
            ?>

      <script>
        alert('Please Login!');
        window.location = "../views/login.php";
      </script>
      <?php
      }
}
 




function loadComments($id){
   $conn = myConnect();
   $sql = "SELECT comments.CommentID, comments.StudentID, students.FirstName, students.LastName, students.Photo, comments.Content, comments.Date, comments.ArticleID FROM comments INNER JOIN students on comments.StudentID = students.StudentID
   JOIN articles on comments.ArticleID = articles.ArticleID WHERE comments.ArticleID = '$id' ORDER BY comments.Date ASC";
   $result = mysqli_query($conn, $sql);

   while($row=mysqli_fetch_array($result)){
      //do something as long as there's a remaining row.
      $rows[] = $row;
   }
   return (isset($rows)) ? $rows : NULL;    
}

function reportComment(){
  session_start();
  $conn = myConnect();
     if(isset($_POST['btnReportSubmit'])){
      

      $reportedcomment = $_POST['commentID']; 
      $reason = $_POST['reason'];
      $UserID = $_SESSION['profile']['StudentID'];
      $articleID = $_POST['articleID'];
      $reportedUser = $_POST['reportedUser'];


      $sql = "INSERT INTO reports(ArticleID, Reason, ReportedUser, ReporterID, CommentID) VALUES ('$articleID', '$reason', '$reportedUser', '$UserID', '$reportedcomment')";
      $result = mysqli_query($conn, $sql);
        
        
        header("Location: ../views/ArticlePage.php?id=".$articleID);
             
      }
}

function getReportedComment(){
  $commentID = $_POST['id'];

  $conn = myConnect();

  $sql = "SELECT comments.CommentID, comments.Content, comments.Date, comments.ArticleID, offender.StudentID as offenderID, offender.FirstName as offenderFirstName, offender.LastName as offenderLastName, offender.Photo as offenderPhoto FROM comments INNER JOIN students offender on comments.StudentID = offender.StudentID WHERE CommentID = '$commentID' LIMIT 1";

  $result = mysqli_query($conn, $sql);
  $row = mysqli_fetch_assoc($result);

  echo json_encode([
    'response' => true,
    'data' => $row
  ]);
}


$function_name = isset($_GET['function']) ? $_GET['function'] : null;

switch ($function_name) {
   case 'getReportedComment':
      getReportedComment();
      break;

   
   default:
      break;
}

?>
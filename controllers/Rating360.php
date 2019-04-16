<?php require_once('MysqlConnect.php');

if(isset($_POST['btnSubmit'])){
      virtualTourRating();
}


function virtualTourRating(){
  session_start();
  $conn = myConnect();

  if(isset($_POST['btnSubmit'])&&isset($_SESSION['profile'])){
    $rating  =$_POST['rating1'];
    $comment =$_POST['comment'];
    $student =$_SESSION['profile']['StudentID'];
    $status =$_SESSION['profile']['Status'];

    if($status != 'BLOCKED'){
        $sql = "INSERT INTO ratings(stars, comment, StudentID) VALUES ('$rating', '$comment','$student')";
        $result = mysqli_query($conn, $sql);
        header("Location:../views/home.php");
        }else{
        ?>
        <script>
          alert('User is blocked!');
          window.location = "../views/home.php";
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
function loadRatings(){
   $conn = myConnect();
   $sql = "SELECT ratings.ratingID, ratings.StudentID, students.FirstName, ratings.Comment, ratings.stars FROM ratings INNER JOIN students on ratings.StudentID = students.StudentID ORDER BY ratingID DESC";
   $result = mysqli_query($conn, $sql);

   while($row=mysqli_fetch_array($result)){
      //do something as long as there's a remaining row.
      $rows[] = $row;
   }
   return (isset($rows)) ? $rows : NULL; 
} 

?>

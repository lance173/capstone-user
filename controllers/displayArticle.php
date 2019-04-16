<?php 





function loadArticles(){
   $conn = myConnect();
   $sql = "SELECT * FROM articles WHERE Status = 'PUBLISHED' ORDER BY DatePublished DESC";
   $result = mysqli_query($conn, $sql);

   while($row=mysqli_fetch_array($result)){
      //do something as long as there's a remaining row.
      $rows[] = $row;
   }
   return $rows;  
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
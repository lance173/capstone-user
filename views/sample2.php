<style type="text/css">     
<style>
body{
	background-color: #232323;
	color:#FFF;
	height: 100%;
	margin: 0;
}

@import url(http://netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css);

fieldset, label { margin: 0; padding: 0; }
h1 { font-size: 1.5em; margin: 10px; }
/****** Style Star Rating Widget *****/

.rating { 
  border: none;
  float: left;
  font-size:20px;
}

.rating > input { display: none; } 
.rating > label:before { 
  margin: 5px;
  font-size: 1.25em;
  font-family: FontAwesome;
  display: inline-block;
  content: "\f005";
}

.rating > .half:before { 
  content: "\f089";
  position: absolute;
}

.rating > label { 
  color: #ddd; 
 float: right; 
}

/***** CSS Magic to Highlight Stars on Hover *****/

.rating > input:checked ~ label, /* show gold star when clicked */
.rating:not(:checked) > label:hover, /* hover current star */
.rating:not(:checked) > label:hover ~ label { color: #FFD700;  } /* hover previous stars in list */

.rating > input:checked + label:hover, /* hover current star when changing rating */
.rating > input:checked ~ label:hover,
.rating > label:hover ~ input:checked ~ label, /* lighten current selection */
.rating > input:checked ~ label:hover ~ label { color: #FFED85;  } 

input[type=submit] {
    width: 100%;
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
	font-family: Century Gothic;
	font-size: 16px;
}

input[type=submit]:hover {
    background-color: #45a049;
}

.h_title{
	font-size: 18px;	
	font-family: Century Gothic;
}
</style>

<body> 

<?php
if(isset($_POST['submit'])){

echo '<div class="alert alert-success" role="alert">'."Form has  been submitted"."</div>";
	

		$comment =$_POST['comment'];
		
		
		
	
		try{
			//connect to the database
			$conn= new PDO('mysql:host=localhost;dbname=tajasas','root','');
			
			//prepare the sql statement
			$strsql="INSERT INTO ratings(comment) VALUES(''".$comment."')";
		
		echo '<div class="alert alert-success" role="alert">'."Successfully connected to the database"."</div>";
			echo '<div class="alert alert-info" role="alert">'.$strsql."</div>";

			$stmt= $conn->prepare($strsql);
			
			//execute the sql statement
			$stmt->execute();

			//check the result

			if($stmt->rowCount()){
				echo '<div class="alert alert-success" role="alert">'."Successfully inserted data to the database"."</div>";
			}else
			{
				echo '<div class="alert alert-danger" role="alert">'."Unable to insert data to the database"."</div>";

			}


			//close the database
			$conn=null;
			
		}catch(PDOException $e){
			print "<br/> Error" .$e->getMessage()."<br/>";


			die();
		}
	
	
	
	}else
	{
	
		echo '<div style="background-color: rgba(255,255,255,0.1" role="alert">'."Please fill up form."."</div>";
	}
?>

<form action="" method="POST">
<div style="margin-top: 100px; color:#FFF;">
<center> <h2 style="font-family:Century Gothic"> HELP IMPROVE OUR SERVICES BY FILLING UP THIS FORM. </h2> </center>
</div>

<div style="width:70%; margin: auto; margin-top: 30px; background-color: rgba(255,255,255,0.1);  border-radius: 25px;">

<div class="row" >


<div class="col-xs-6" style="margin-top:15px;">
<div style="margin-right:70px" >
<br>

<span class="h_title"> Leave a Comment</span> <br /> <br />
 <textarea name="comment" placeholder="your comments here" style="color:#000;  border-radius: 4px; width:100%" rows="6.5"></textarea>
<br>
<br>
<input type="submit" name="submit" value="Submit">
</div>
</form>
<br>
</div>
</div>
</div>


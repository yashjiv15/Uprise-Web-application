<?php
session_start();

?>
	

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>News and Blogs</title>
<!-- Font Awesome -->
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
<!-- Google Fonts -->
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Josefin+Sans&display=swap">
<!-- Bootstrap core CSS -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet">
<!-- Material Design Bootstrap -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/css/mdb.min.css" rel="stylesheet"><head>
<style type="text/css">
	body{
		font-family: 'Josefin Sans', Sans-serif;
	}
	img{
		height: 150px;
	}
	.row .col-md-12{
		margin-top: 350px;
	}
</style>

<?php include 'dbcon.php';
 $query="select * from blog";
 $result=mysqli_query($con,$query);
	while($rows=mysqli_fetch_assoc($result))
	{
  ?>

<body>



	<div class="container-fluid">
		<div class="row">
	
			<div class="col-md-12 position-absolute">
				<div class="col-md-6">
					<a onclick="history.back()" class="carousel-control-prev" data-slide="prev">
						<i class="fa fa-chevron-circle-left fa-3x text-primary"></i></a>
				</div>
				 
			</div>
		</div>
		<div id="carousel-item" class="carousel slide mt-5 container z-depth-4 rounded" data-ride="carousel">
			<h1 class="text-center pt-4">News and Blogs</h1><hr>

			<div class="carousel-inner">
				
				<div class="carousel-item active">
					<div class="container-fluid">
						<div class="row flex-center">
							<img src="https://cdn2.iconfinder.com/data/icons/flat-style-svg-icons-part-1/512/user_man_male_profile_account-512.png" class="rounded-circle mb-3">
						</div>
						<div class="row d-block">
							<h1 class="text-center"><?php echo $rows['title']; ?></h1>
							<p class="text-center"><?php echo $rows['news']; ?></p>
							<p class="text-center"><?php echo $rows['blogs']; ?></p>
						</div>
					
					</div>
				</div>

			<br>
			

		</div>
	</div>

<?php
}

?>



</body>
</html>
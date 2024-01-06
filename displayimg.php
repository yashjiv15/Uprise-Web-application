<?php include 'dbcon.php';


$query="select * from project";

   $result= mysqli_query($con, $query);
  
?>
		
<!DOCTYPE html>
<html>
<head>
	<title>Your profile</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
</head>
<body>

<div class="container d-flex justify-content-center mt-5">
<div class="col-md-6 border shadow">

<ul class="nav nav-pills nav-justified">
<li class="nav-item"><a href="#profile-tab" class="nav-link active" data-toggle="pill">Profile</a></li>
<li class="nav-item"><a href="#setting-tab" class="nav-link" data-toggle="pill">Info</a></li>
<li class="nav-item"><a href="#contact-tab" class="nav-link" data-toggle="pill">Contact us</a></li>
<li class="nav-item"><a href="#help-tab" class="nav-link" data-toggle="pill">Help</a></li>
	
</ul>

  <!-- All Tabs Main div -->
	
	<div class="tab-content">

	<!-- Profile tab start -->
		
   <div class="tab-pane show fade active justify-content-center px-5" id="profile-tab">
   <img src="user.png" width="150px" height="150px" class="rounded-circle border border-primary mx-auto d-flex my-2">
   <h2 class="text-center my-3">Your Profile</h2>
   <div class="mx-auto my-3 d-flex justify-content-center">

   	<a class="btn btn-success btn-sm" href="index.php">Home<i class="fas fa-user"></i>
   	</a>
   	<a class="btn btn-info mx-3 btn-sm" href="Regis.php">Log out</a>
   	<a class="btn btn-primary btn-sm" href="Mentors.php">Mentors<i class="fas fa-facebook-messenger"></i></a>
   </div>
<hr>

	<?php
while($rows=mysqli_fetch_assoc($result))
{

?>
<h4>Information</h4>
<img src="<?php echo $rows['img']; ?>">
<div class="float-right" style="margin-left: -200%; margin-right: 5%; ">
<div class="float-right" style="margin-left: -200%; margin-right: 5%; ">
	<h6><i class="fas fa-briefcase"></i>Project</h6>
	<p></p>
</div>








<?php
}
?> 

      

        <!-- Contact us tab start -->


<div class="tab-pane fade px-5 my-4" id="contact-tab">
<h3 class="text-center">Sign up</h3>
<form class="w-75 mx-auto">
	<div class="col-md-12 my-4">
		<label class="form-label">Email</label>
		<input type="email" class="form-control" required="">
	</div>
	<div class="col-md-12">
		<label class="form-label">Password</label>
		<input type="Password" class="form-control" required="">
	</div>
	<div class="col-md-12">
		<a href="#" class="float-right mb-3">Forget Password</a>
	</div>
	<div class="col-12">
		<button type="submit" class="btn btn-primary btn-sm form-control my-3">Sign in</button>
		
	</div>

</form></form>
	
</div>
  
  <!-- Help tab start -->

<div class="tab-pane" id="help-tab">
	<h5 class="text-justify p-4"><button> 

 <a href="index.php" name="button" type="button" class="button">Contact-us</a>

</button>
</h5>
	
</div>





	</div>

</div>
</div>



</body>
</html>
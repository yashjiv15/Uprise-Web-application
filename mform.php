<?php 
session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<title>this is my web page</title>
	<?php include 'mformcss.php' ?>
	<?php include 'dbcon.php' ?>
</head>
<body>	

<?php 	

if(isset($_POST['submit']))
{
	
   $name = mysqli_real_escape_string($con, $_POST['name']);
   $email= mysqli_real_escape_string($con, $_POST['email']);
   $mobile = mysqli_real_escape_string($con, $_POST['mobile']);
   $education = mysqli_real_escape_string($con, $_POST['education']);
   $post= mysqli_real_escape_string($con, $_POST['post']);
   $special = mysqli_real_escape_string($con, $_POST['special']);
   $branch = mysqli_real_escape_string($con, $_POST['branch']);
   $img = mysqli_real_escape_string($con, $_POST['img']);


  	{
  $insertquery ="insert into profilem( name, email , mobile, education,
post, special, branch, img) 
  values('$name','$email','$mobile','$education',
'$post', '$special','$branch','$img')" ;
         $iquery = mysqli_query($con,$insertquery);
      
                
                  
  if($iquery){	        

   ?>
  <script>
	alert("inserted successfully");
location.replace("indexm.php");

</script>
<?php
}

else
{
	?>
<script>
	alert("not inserted");
</script>
<?php
}
}
}
?>

   <div class="form">
		<div class="title-div">
			<h1>Up-rise</h1>
			<form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="POST">
			<p></p>
			<p class="required"></p>
		</div>
<div class="file">
   <input class="bar" type="file" id="myFile" name="img" style="margin-left: 80%;"></div>
		<div class="name-div">
			<div class="name">Your Name<span class="required">*</span></div>
			<div class="input-div"><input type="input" name="name" placeholder="Your answer"></div>
		</div>

		

		<div class="gmail-div">
			<div class="name">Your email<span class="required">*</span></div>
			<div class="input-div"><input type="input" name="email" placeholder="Your email"></div>
		</div>

       	<div class="mobile-div">
			<div class="name">Your mobile</div>
			<div class="input-div"><input type="input" name="mobile" placeholder="Your answer"></div>
		</div>
		

<div class="education-div">
			<div class="name">Your Education</div>
			<div class="input-div"><input type="input" name="education" placeholder="Your answer"></div>
		</div>
		<div class="post-div">
			<div class="name">Your post<span class="required">*</span></div>
			<div class="input-div"><input type="input" name="post" placeholder="Your answer"></div>
		</div>
<div class="special-div">
			<div class="name">Your Specialization<span class="required">*</span></div>
			<div class="input-div"><input type="input" name="special" placeholder="Your answer"></div>
		</div>

		<div class="branch-div">
			<div class="name">Your Branch</div>
			<div class="input-div"><input type="input" name="branch" placeholder="Your answer"></div>

				
  <button type="submit" name="submit" class="button">
<span>Continue Forming Profile</span>
  </button>

		</form>
		</div>
	

</head>
<body>
</div>


		<div class="last-div">
			<p class="never"></p>
			<p class="term"></p>
			<h2>Up-rise Form</h2>
		</div>
		





	</div>

</body>
</html>
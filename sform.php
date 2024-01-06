<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>this is my web page</title>
	<?php include 'Form1css.php' ?>
		<?php include 'dbcon.php' ?>
</head>
<body>

<?php 	

if(isset($_POST['submit']))
{
   $Name = mysqli_real_escape_string($con, $_POST['Name']);
   $Email= mysqli_real_escape_string($con, $_POST['Email']);
   $Mobile = mysqli_real_escape_string($con, $_POST['Mobile']);
   $Roll_no=mysqli_real_escape_string($con, $_POST['Roll_no']);

 $Project = mysqli_real_escape_string($con, $_POST['Project']);
   $Education= mysqli_real_escape_string($con, $_POST['Education']);

   $stream= mysqli_real_escape_string($con, $_POST['stream']);   
 $image = mysqli_real_escape_string($con, $_POST['image']);
  	{
  $insertquery ="insert into profiles( Name, Email , Mobile, Roll_no, Project, Education, stream,image) 
  values('$Name','$Email' ,'$Mobile','$Roll_no','$Project','$Education','$stream','$image')";
         $iquery = mysqli_query($con,$insertquery);
         	
  if($iquery){	        

   ?>
  <script>
	alert("inserted successfully");
  location.replace("index.php"); 
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
   <input class="bar" type="file" id="myFile" name="image" style="margin-left: 80%;"></div>
		<div class="name-div">
			<div class="name">Your Name<span class="required">*</span></div>
			<div class="input-div"><input type="input" name="Name" placeholder="Your answer"></div>
		</div>

		

		<div class="gmail-div">
			<div class="name">Your email<span class="required">*</span></div>
			<div class="input-div"><input type="input" name="Email" placeholder="Your email"></div>
		</div>

       	<div class="mobile-div">
			<div class="name">Your mobile</div>
			<div class="input-div"><input type="input" name="Mobile" placeholder="Your answer"></div>
		</div>

		

<div class="roll-div">
			<div class="name">Your Roll-no</div>
			<div class="input-div"><input type="input" name="Roll_no" placeholder="Your answer"></div>

			</div>
		<div class="project-div">
			<div class="name">Project Done<span class="required">*</span></div>
			<div class="input-div"><input type="input" name="Project" placeholder="Your answer"></div>
		</div>

  <div class="education-div">
			<div class="name">Your Education</div>
			<div class="input-div"><input type="input" name="Education" placeholder="Your answer"></div>
	</div>

		<div class="scope-div">
			<div class="name">Stream</div>
			<div class="input-div"><input type="input" name="stream" placeholder="Your answer"></div>

			</div>
			
			

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
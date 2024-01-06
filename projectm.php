<?php
session_start()
?>


<!DOCTYPE html>
<html>
<head>
	<title>this is my web page</title>
	<?php include 'Form2css.php' ?> 
	<?php include 'dbcon.php' ?>
</head>
<body>

 <?php   

if(isset($_POST['submit']))
{
   $title = mysqli_real_escape_string($con, $_POST['title']);
   $category= mysqli_real_escape_string($con, $_POST['category']);
   $description = mysqli_real_escape_string($con, $_POST['description']);
   $stream=mysqli_real_escape_string($con, $_POST['stream']);

 $team = mysqli_real_escape_string($con, $_POST['team']);
   $Name = mysqli_real_escape_string($con, $_POST['Name']);
   $Email= mysqli_real_escape_string($con, $_POST['Email']);
   $Mobile = mysqli_real_escape_string($con, $_POST['Mobile']);
   

    {
  $insertquery ="insert into project( Name, Email , Mobile,title,category,description,stream,team) 
  values('$Name','$Email' ,'$Mobile','$title','$category','$description','$stream','$team')";
          
$query = mysqli_query($con,$insertquery);
  if($query){          

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
			<h1>Aprise</h1>
			<form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="POST">
			<p></p>
			
			<p class="required"></p>
		</div>

		<div class="name-div">
			<div class="name">Name:-<span class="required">*</span></div>
			<div class="input-div"><input type="input" name="Name" placeholder="Your answer"></div>
		</div>

		<div class="email-div">
			<div class="name">Email:-</div>
			<div class="input-div"><input type="input" name="Email" placeholder="Your answer"></div>
		</div>
<div class="mobile-div">
			<div class="name">Mobile no:-</div>
			<div class="input-div"><input type="input" name="Mobile" placeholder="Your answer"></div>
		</div>
		<div class="tittle-div">
			<div class="name">Project title:-<span class="required">*</span></div>
			<div class="input-div"><input type="input" name="title" placeholder="Your answer"></div>
		</div>

		<div class="category-div">
			<div class="name">Project Category:-</div>
			<div class="input-div"><input type="input" name="category" placeholder="Your answer"></div>
</div>
        <div class="description-div">
			<div class="name">Project Description:-</div>
			<div class="input-div"><input type="input" name="description" placeholder="Your answer"></div>
</div>
			<div class="stream-div">
			<div class="name">Project Stream:-</div>
			<div class="input-div"><input type="input" name="stream" placeholder="Your answer"></div>
</div>
	<div class="team-div">
			<div class="name">Team-mates:-</div>
			<div class="input-div"><input type="input" name="team" placeholder="Your answer"></div>

</div>

		<button type="submit" name="submit" class="button">
			<span>Continue to Aprise</span>
		</button>
</form>
 

		</div>
 
<div class="last-div">
			<p class="never"></p>
			<p class="term"></p>
			<h2>Up-rise Form</h2>
		</div>

</head>





<div>

  
		
</div>




	</div>

</body>
</html>
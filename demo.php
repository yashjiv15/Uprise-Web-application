<!DOCTYPE html>

<html>
<head>
	<title>Slide Navbar</title>
	<?php include 'ss.php' ?>
	<?php include 'dbcon.php' ?>
<link href="https://fonts.googleapis.com/css2?family=Jost:wght@500&display=swap" 
rel="stylesheet">
</head>
<body>


		<div class="main">  	
		<input type="checkbox" id="chk" aria-hidden="true">

			<div class="signup">
				<form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="POST">
					<label for="chk" aria-hidden="true">Sign up</label>
					
					<input type="id" name="id" placeholder="enter id" required="">
			<button type="submit" name="no" class="button1">get data</button>
					
				</form>
			</div>


<?php
   if(isset($_POST['no']))
   {
    $id = $_POST['id'];

 $email_search = "select * from profilem where id='$id' ";
    $query = mysqli_query($con,$email_search);
    $email_count = mysqli_num_rows($query);

    if($email_count)
    {
    $email_pass = mysqli_fetch_assoc($query);
   
 

    if($email_pass)
    {

    ?>

    <script>
   
     alert("displayed successfully");
              
    location.replace("dis.php"); 
    
</script>
<?php
}

else{
 ?>
    <script>	
     alert("invaild password");
</script>
<?php
}
}else
{
 ?>
    <script>	
     alert("invalid mail");
</script>
<?php
}
}

  ?>












</div>
</body>
</html>
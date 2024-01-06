<!DOCTYPE html>

<html>
<head>
  <title>Slide Navbar</title>
  <?php include 'ss.php' ?>
  <?php include 'dbcon.php' ?>
<link href="https://fonts.googleapis.com/css2?family=Jost:wght@500&display=swap" rel="stylesheet">
</head>
<body>		
  <?php
   if(isset($_POST['insert']))
   {
    $email = $_POST['email'];
    $password = $_POST['password'];

 $email_search = "select * from Regis where email='$email' ";
    $query = mysqli_query($con,$email_search);
    $email_count = mysqli_num_rows($query);

    if($email_count){
    $email_pass = mysqli_fetch_assoc($query);
    $db_pass = $email_pass['password'];
    $pass_decode = password_verify($password, $db_pass);
    if($pass_decode)
    {
      ?>
      <script>
     alert("login successful");
</script>
<?php 
}
else{
echo "password incorrect ";
}
}else{
echo "Invalid Email";

}


}
  ?>






			<div class="login">
	   <form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="POST">

					<label for="chk" aria-hidden="true">Login</label>
					<input type="email" name="email" placeholder="Email" required="">
					<input type="password" name="password" placeholder="Password" required="">
					<button type="submit" name="insert" class="button">Login</button>
				</form>
			</div>
	
</body>
</html>

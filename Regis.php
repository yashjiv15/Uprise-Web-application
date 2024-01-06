<?php 
session_start();
?>

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


<?php 	
if(isset($_POST['submit']))
{
   $username = mysqli_real_escape_string($con, $_POST['username']);
   $email = mysqli_real_escape_string($con, $_POST['email']);
   $password = mysqli_real_escape_string($con, $_POST['password']);
   $cpassword = mysqli_real_escape_string($con, $_POST['cpassword']);
   
   $pass = password_hash($password, PASSWORD_BCRYPT);
   $cpass = password_hash($cpassword, PASSWORD_BCRYPT);
   $emailquery = "select * from student where email='$email' ";
   $query = mysqli_query($con, $emailquery);

   $emailcount = mysqli_num_rows($query);
  
if  ($password === 	$cpassword)
    {
     $insertquery ="insert into student( username, email, password ,cpassword) values('$username','$email','$pass' ,'$cpass')" ;
         $iquery = mysqli_query($con,$insertquery);
    
  if($iquery){	
?>
<script>
	alert("inserted successfully");
</script>
<?php
}
else{
	?>
<script>
	alert("not inserted");
</script>
<?php
}


 }else{
?>
<script>
	alert("passwod not matching");
</script>
<?php
 }
}


?>

<?php 	
if(isset($_POST['mentor']))
{
   $username = mysqli_real_escape_string($con, $_POST['username']);
   $email = mysqli_real_escape_string($con, $_POST['email']);
   $password = mysqli_real_escape_string($con, $_POST['password']);
   $cpassword = mysqli_real_escape_string($con, $_POST['cpassword']);
   
   $pass = password_hash($password, PASSWORD_BCRYPT);
   $cpass = password_hash($cpassword, PASSWORD_BCRYPT);
   $emailquery = "select * from mentor where email='$email' ";
   $query = mysqli_query($con, $emailquery);

   $emailcount = mysqli_num_rows($query);
  if($emailcount>0)
  {
   ?>
<script>
	alert("email already exists");
</script>
<?php
  }
 else
{
if  ($password === $cpassword)
    {
     $insertquery ="insert into mentor( username, email, password ,cpassword) values('$username','$email','$pass' ,'$cpass')" ;
         $iquery = mysqli_query($con,$insertquery);
    
  if($iquery){	
?>
<script>
	alert("inserted successfully");
</script>
<?php
}
else{
	?>
<script>
	alert("not inserted");
</script>
<?php
}


 }else{
?>
<script>
	alert("passwod not matching");
</script>
<?php
 }
}
}

?>




	<div class="main">  	
		<input type="checkbox" id="chk" aria-hidden="true">

			<div class="signup">
				<form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="POST">
					<label for="chk" aria-hidden="true">Sign up</label>
					<input type="username" name="username" placeholder="username" required="">
					<input type="email" name="email" placeholder="email" required="">
					<input type="password" name="password" placeholder="password" required ="">
					<input type="password" name="cpassword" placeholder="Repeat password" required="">
			<button type="submit" name="submit" class="button1">Student</button>
					<button type="submit" name="mentor" class="button2">Mentor</button>
				</form>
			</div>


<?php
   if(isset($_POST['insert']))
   {
    $email = $_POST['email'];
    $password = $_POST['password'];

 $email_search = "select * from student where email='$email' ";
    $query = mysqli_query($con,$email_search);
    $email_count = mysqli_num_rows($query);

    if($email_count)
    {
    $email_pass = mysqli_fetch_assoc($query);
    $db_pass = $email_pass['password'];
    $_SESSION['email'] = $email_pass['email'];
    $_SESSION['username'] = $email_pass['username'];
    $pass_decode = password_verify($password, $db_pass);
 

    if($pass_decode)
    {

    ?>

    <script>
   
     alert("login successfully");
              
    location.replace("index.php"); 
    
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
<?php
   if(isset($_POST['insertion']))
   {
    $email = $_POST['email'];
    $password = $_POST['password'];

 $email_search = "select * from mentor where email='$email' ";
    $query = mysqli_query($con,$email_search);
    $email_count = mysqli_num_rows($query);

    if($email_count)
    {
    $email_pass = mysqli_fetch_assoc($query);
    
    $db_pass = $email_pass['password'];
    $_SESSION['email'] = $email_pass['email'];
    $_SESSION['username'] = $email_pass['username'];
       $pass_decode = password_verify($password, $db_pass);
      

    if($pass_decode)
    {
    
    ?>
    <script>    
     alert("Login successfully");
    location.replace("indexm.php"); 
    

</script>
<?php
}

else{
 ?>
    <script>    
     alert("invalid password");
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
 
     

			<div class="login">
				<form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="POST">
					<label for="chk" aria-hidden="true">Login</label>
					<input type="email" name="email" placeholder="Email" required="">
					<input type="password" name="password" placeholder="Password" required="">
					<button type="submit" name="insert" class="button1">Student</button>
					<button type="submit" name="insertion" class="button2">Mentor</button>
				</form>
			</div>
	

</div>
</body>
</html>
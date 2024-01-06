<?php
session_start()
?>
<?php include 'dbcon.php';?>

<!DOCTYPE html>
<html lang="en">
<head>
    
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

      <!-- jQuery library --> 
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

      <!-- Popper JS -->
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

      <!-- Latest compiled JavaScript -->
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
       <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Awesome CSS Hover Cards in Html & CSS</title>

    
   
      <?php include 'mentorcss.php' ?>
      
      <?php
   if(isset($_POST['user_id']))
   {
    $user_id = $_POST['user_id'];
    

 $email_search = "select * from profilem where user_id='$user_id' ";
    $query = mysqli_query($con,$email_search);

    if($query)
    {
    $email_pass = mysqli_fetch_assoc($query);
    $_SESSION['user_id']=$email_pass['user_id'];

    if($email_pass)
    {

    ?>

    <script>
   
     alert("displayed successfully");
              
    location.replace("mentorinfo.php"); 
    
</script>
<?php
}else
{
 ?>
    <script>    
     alert("invalid id");
</script>
<?php
}
}
}

  ?>
  

</head>
<body>
    <?php
$query="select * from profilem";

   $result= mysqli_query($con, $query);
while($rows=mysqli_fetch_assoc($result))

  {  ?>
        <form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="POST">
  <h2> <center>Mentors</center></h2>
  <div id="main">
        <div class="box">
            <img src="Avnimam.png" width="100%" alt="">
            <div class="card_body">
                <div class="card_body_content">
      <a class="title" href="profilem.php" style="text-decoration: none;text-align: inherit; color:black; text-align-last: ; margin-left: 30%; margin-top: 30%; text-decoration: underline;"><tr> <td><?php echo $rows['user_id']; ?></td>
      </a>

             
                </div>
            </div>
        </div>
         <input name="user_id" placeholder="Enter id" value="<?php if(isset($_POST['user_id'])){echo $_POST['user_id'];} ?>" required="">
              <button type="submit" name="no" class="button2">Mentor</button>
        <div class="box">
            <img src="Smitamam.jpg" width="100%" height="85%" alt="">
            <div class="card_body">
                <div class="card_body_content">
                    <a class="title" href="profile.php" style="text-decoration: none;text-align: inherit; color:black; text-align-last: ; margin-left: 30%; margin-top: 30%; text-decoration: underline;"><td><?php echo $rows['user_id']; ?></td></tr></a>

                    <p class="title" style="color: darkcyan;margin-left: 5%; ">H.O.D of Mangement Forum</p>
                </div>
            </div>
        </div>
     
    </div>

</form>

  
</head>
<body>



  </div>

       
       
</div>
    </ul>
      
    </div>
 
  </nav>

</div>
<?php
}
?> 
  </header>




</script>




</body>
</html>
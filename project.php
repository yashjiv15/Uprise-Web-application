<?php 
session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <title>Info Cards with Hover Effects</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

   <?php include'projectcss.php' ?>
<?php include 'dbcon.php' ?>

</head>

</style>

<body>
   <?php   

if(isset($_POST['insert']))
{
   $title = mysqli_real_escape_string($con, $_POST['title']);
   $category= mysqli_real_escape_string($con, $_POST['category']);
   $description = mysqli_real_escape_string($con, $_POST['description']);
   $stream=mysqli_real_escape_string($con, $_POST['stream']);

 $team = mysqli_real_escape_string($con, $_POST['team']);
   $img = mysqli_real_escape_string($con, $_POST['img']);
   

    {
  $insertquery ="insert into project( title,category,description,stream,team,img) 
  values('$title','$category','$description','$stream','$team','$img')";
          
$iquery = mysqli_query($con,$insertquery);
  if($iquery){          

   ?>
  <script>
  alert("inserted successfully");
location.replace("profilem.php"); 
    
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

 <?php   

if(isset($_POST['insertion']))
{
   $title = mysqli_real_escape_string($con, $_POST['title']);
   $category= mysqli_real_escape_string($con, $_POST['category']);
   $description = mysqli_real_escape_string($con, $_POST['description']);
   $stream=mysqli_real_escape_string($con, $_POST['stream']);

 $team = mysqli_real_escape_string($con, $_POST['team']);
   $img = mysqli_real_escape_string($con, $_POST['img']);
   

    {
  $insertquery ="insert into project( title,category,description,stream,team,img) 
  values('$title','$category','$description','$stream','$team','$img')";
          
$iquery = mysqli_query($con,$insertquery);
  if($iquery){          

   ?>
  <script>
  alert("inserted successfully");
location.replace("profile.php"); 
    
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

   <form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="POST">
   <h4 style="text-align: center;margin-top: 1%;color: ghostwhite;">Enter project details</h4>
    <div class="file">
   <input class="bar" type="file" id="myFile" name="img" style="margin-left: 80%;"></div>
   <div class="content">
      <div class="card">
         <i class="fas fa-user-circle icon fa-2x"></i>
         <p class="title">Project Title</p>
         <p>
         <input class="note-text" type="input" name="title" placeholder="  Enter Project Title" style="
   border: none;
  font-size: 1rem;
  height: 70%;
  padding: 10px;
  margin-left: 25px;
  width: 80%;
 
  padding-left: 0px;
  margin-top: 30px;
  align-content: center;
  text-align: center;
  align-items: center;
  " /></p>

      </div> 
      </div>
<button type="submit" name="insert" class="button"
style="margin-left: 80%;">Student</button>
         <div class="content2">

        <div class="card">
         <i class="fas fa-bookmark icon fa-2x"></i>
         <p class="title">Category</p>
          <p>
         <input class="note-text" type="input" name="category" placeholder="Project category" style="
   border: none;
  font-size: 1rem;
  height: 70%;
  padding: 2px;
  margin-left: 60px;
  width: 60%;
  height: 20%;
  padding-left: 0px;
  margin-top: 20px;
  align-content: center;
  text-align: center;
  align-items: center;
  " />
<input class="note-text" type="input" name="description" placeholder="Project Description" style="
   border: none;
  font-size: 1rem;
  height: 70%;
  padding: 2px;
  margin-left: 60px;
  width: 60%;
  height: 20%;
  padding-left: 0px;
  margin-top: 20px;
  align-content: center;
  text-align: center;
  align-items: center;
  " /></p>
      </div>

      <div class="card">

         <i class="fas fa-address-card icon fa-2x"></i>
         <p class="title">Team-mates</p>
         <p>
         <input class="note-text" type="input" name="stream" placeholder="Resource Stream" style="
   border: none;
  font-size: 1rem;
  height: 70%;
  padding: 2px;
  margin-left: 60px;
  width: 60%;
  height: 20%;
  padding-left: 0px;
  margin-top: 20px;
  align-content: center;
  text-align: center;
  align-items: center;
  
  " />

<input class="note-text" type="input" name="team" placeholder="Team-mates" style="
   border: none;
  font-size: 1rem;
  height: 70%;
  padding: 2px;
  margin-left: 60px;
  width: 60%;
  height: 20%;
  padding-left: 0px;
  margin-top: 20px;
  align-content: center;
  text-align: center;
  align-items: center;"/>
</p>

    </div> 
 </div>
    

</form>


</body>
</html>
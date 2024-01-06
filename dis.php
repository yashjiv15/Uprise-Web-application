
<?php include 'dbcon.php';


 $query ="select * from profilem where id='$rows['id'] ";
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
    <a class="btn btn-success btn-sm" href="indexm.php">Home<i class="fas fa-user"></i>
    </a>
    <a class="btn btn-info mx-3 btn-sm" href="logout.php">Log out</a>
    <a class="btn btn-info btn-sm" href="deletepro.php">Delete</a>
   
   </div>

<hr>

  <?php
while($rows=mysqli_fetch_assoc($result))
  
{
?>  
<h4>Information</h4>

<div class="float-right" style="margin-left: -200%; margin-right: 5%; ">
  <h6><i class="fas fa-university"></i>Education</h6>
  <p><?php echo $rows['education']; ?></p>
</div>
<div class="form-group">
  <h6><i class="fas fa-hospital-alt"></i>Post</h6>
  <p><?php echo $rows['post']; ?></p>

<div class="form-group">
<h6><i class="fas fa-code-branch"></i>Branch</h6>
  <p><?php echo $rows['branch']; ?></p>
</div>
<div class="float-right" style="margin-top: -15%; margin-right: -1%">
<h6><i class="fas fa-briefcase"></i>Specialization</h6>
  <p><?php echo $rows['special']; ?></p>
</div>

</div>


   </div>








       <!-- Setting tab start -->

<div class="tab-pane fade p-5" id="setting-tab">


 <h4 class="text-center">Your Info </h4>
  <h6>Name: </h6>

  <p><?php echo $rows['name']; ?><a href="#" class="float-right"></a></p>


  <h6>Email: </h6>
  <p><?php echo $rows['email']; ?><a href="#" class="float-right"></a></p>
  
  <h6>Phone: </h6>
  <p><?php echo $rows['mobile']; ?><a href="#" class="float-right"></a></p>
  
      
</div>

<?php
}
?> 


        <!-- Contact us tab start -->


<div class="tab-pane fade px-5 my-4" id="contact-tab">
<h3 class="text-center"></h3>
<form class="w-75 mx-auto">
  <div class="col-md-12 my-4">
    
  </div>
  <div class="col-md-12">
    
  </div>
  <div class="col-md-12">
  </div>
  <div class="col-12">
    

 <a href="indexm.php" name="button" type="button" class="btn btn-primary btn-sm form-control my-3">Contact</a>

</button>
  </div>

</form>
  
</div>
  
  <!-- Help tab start -->

<div class="tab-pane" id="help-tab">
  <h5 class="text-justify p-4">

<a href="fogpass.php" name="button" type="button" class="btn btn-primary btn-sm form-control my-3">Forgot-passowrd</a>

</button>
</h5>
  
</div>





  </div>

</div>
</div>



</body>
</html>
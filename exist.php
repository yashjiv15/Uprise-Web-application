<?php include'dbcon.php';
 $query="select * from project";
 $result=mysqli_query($con,$query);


 ?>
    <?php
while($rows=mysqli_fetch_assoc($result))
{
  ?>
 

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
   
      <?php include 'existcss.php' ?>

</head>
<body>
  <h2> <center style="margin-top: 5%;">Existing project</center>    </h2>
  <div id="main">
        <div class="box">
           <img src="user.png" width="100px" align="right">
            <div class="card_body">
                <div class="card_body_content" style="margin-top: 8%">
  
    <h4>Name:- </h4>
                      <?php echo $rows['Name']; ?>
                      <br></br>
                     <h4> Email:-</h4> 
                     <?php echo $rows['Email']; ?>
<br></br>
<h5> Mobile-no:-</h5> 
                      <?php echo $rows['Mobile']; ?>
                      <br></br>
                      <h5>Team-Mates:</h5> 
                      <?php echo $rows['team']; ?>
                </div>
            </div>
        </div>

        <div class="box">
           <img src="report.png" width="80px" height="80px" align="right" style="margin-right: 2%; margin-top: 2%;">
            <div class="card_body">
                <div class="card_body_content" style="margin-top: 8%" >
  
    <h4>Post required:- </h4>
                      <?php echo $rows['requirement']; ?>
                      <br></br>
                     <h5>Skills :-</h5> 
                     <?php echo $rows['skills']; ?>
<br></br>
<h5> Experience:-</h5> 
                      <?php echo $rows['exp']; ?>
                      <br></br>
                 
                  
                </div>
            </div>
        </div>



       <div class="box">
           <img src="report.png" width="80px" height="80px" align="right" style="margin-right: 2%; margin-top: 2%;">
            <div class="card_body">
                <div class="card_body_content" style="margin-top: 8%" >
  
    <h4>Project Title: </h4>
                      <?php echo $rows['title']; ?>
                      <br></br>
                     <h5>Category:-</h5> 
                     <?php echo $rows['category']; ?>
<br></br>
<h5> Description:-</h5> 
                      <?php echo $rows['description']; ?>
                      <br></br>
                      <h5> Stream:-</h5> 
                      <?php echo $rows['stream']; ?> 
                  
                </div>
            </div>
        </div>
       
       
       
    </div>

<?php
}?>

</head>
<body>



  </div>

       
       
</div>
    </ul>
      
    </div>
 
  </nav>

</div>
  </header>




</script>




</body>
</html>

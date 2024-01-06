<?php include'dbcon.php';
 $query="select * from project";
 $result=mysqli_query($con,$query);


 ?>
  <?php
while($rows=mysqli_fetch_assoc($result))
{
  ?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
   <?php include 'pcss.php' ?>
  <title>Flip Card</title>
</head>
<body>
  <div id="main">
  <div class="container">
    <div class="card">
      <div class="front" style="text-align: center;align-content: center;">

  <h3 style="margin-top: 15%;">Name: </h3>
                      <?php echo $rows['title']; ?>
                      <br></br>
                     <h4> Email:</h4> 
                     <?php echo $rows['category']; ?>
<br></br>
<h4> Mobile:</h4> 
                      <?php echo $rows['description']; ?>
                      <br></br>
                      <h4> Roll_no:</h4> 
                      <?php echo $rows['stream']; ?>





      </div>
      <div class="back">
        <h1>Back of Card</h1>
        <p>Additional info on the back of the card</p>
      </div>
    </div>
  </div>
  <div class="container">
    <div class="card">
      <div class="front" style="text-align: center; align-content: center;">
  <h3 style="margin-top: 15 %;">Name: </h3>
                      <?php echo $rows['team']; ?>
                      <br></br>
                     




      </div>
      <div class="back">
        <h1>Back of Card</h1>
        <p>Additional info on the back of the card</p>
      </div>
    </div>
  </div>
  
       </div>
       <?php
      }?> 
</body>
</html>
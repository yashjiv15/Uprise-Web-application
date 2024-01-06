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
   <?php include 'studcss.php' ?>
  <title>Flip Card</title>
</head>
<body>
  <div id="main">
  <div class="container">
    <div class="card">
      <div class="front"></div>
      <div class="back">
        <h1>Back of Card</h1>
        <p>Additional info on the back of the card</p>
      </div>
    </div>
  </div>
  <div class="container">
    <div class="card">
      <div class="front"></div>
      <div class="back">
        <h1>Back of Card</h1>
        <p>Additional info on the back of the card</p>
      </div>
    </div>
  </div>
  <?php
      }?> 
       </div>
</body>
</html>
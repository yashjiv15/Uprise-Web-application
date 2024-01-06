<?php include 'dbcon.php';


$query="select * from profiles";


   $result= mysqli_query($con, $query);
  

while($rows=mysqli_fetch_assoc($result))

{

?>
<!DOCTYPE html>
<html lang="en">
<head>
    
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <?php include 'existcss.php'?>

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
   

</head>


</style>

<body>
  <h2> <center>Student</center></h2>
  <div id="main">
        <div class="box">
           <img src=" <?php echo $rows['image']; ?>" width="100px" height="120px" align="right">
            <div class="card_body">
                <div class="card_body_content" style="margin-top: 8%">
  
    <h4>Name: </h3>
                      <?php echo $rows['Name']; ?>
                      <br></br>
                     <h5> Email:</h5> 
                     <?php echo $rows['Email']; ?>
<br></br>
<h5> Mobile:</h5> 
                      <?php echo $rows['Mobile']; ?>
                      <br></br>
                      <h6> Roll_no:</h6> 
                      <?php echo $rows['Roll_no']; ?>
                </div>
            </div>
        </div>
        
       <div class="box">
           <img src="report.png" width="80px" height="80px" align="right" style="margin-right: 2%; margin-top: 2%;">
            <div class="card_body">
                <div class="card_body_content" style="margin-top: 8%" >
  
    <h3>Project: </h3>
                      <?php echo $rows['Project']; ?>
                      <br></br>
                     <h5> Resources:</h5> 
                     <?php echo $rows['Education']; ?>
<br></br>
<h5>Education:</h5> 
                      <?php echo $rows['stream']; ?>
                      <br></br>
                     
                  
                </div>
            </div>
        </div>
       
       
       
    </div>

<?php }?>

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

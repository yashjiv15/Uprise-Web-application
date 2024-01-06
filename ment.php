<?php include 'dbcon.php';


$query="select * from profilem";


   $result= mysqli_query($con, $query);
  

while($rows=mysqli_fetch_assoc($result))

{

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Awesome CSS Hover Cards in Html & CSS</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<style>
    
/*CSS for Hover Cards*/


body {
        padding: 0%;
        margin: 0%;
        font-family: sans-serif;
        background-color: #fff200;
    }

    #main {
        height: 100vh;
        width: 100vw;
        background-color: #fff200;
        display: flex;
        justify-content: space-evenly;
        flex-wrap: wrap;
        align-content: space-around;
        perspective: 600px;
    }

    .box {
        height: 320px;
        width: 270px;
        border-radius: 30px;
        border: 1px solid rgb(255, 255, 255);
        transform: rotateX(20deg) translateZ(0px) scale(1);
        box-shadow: 1px 20px 40px -10px rgb(168, 168, 168);
        transition: .5s cubic-bezier(0.07, 0.77, 0.85, 1.61);
        background-color: #e7e7e7;
    }

    .box img {
        border-radius: 30px 30px 0px 0px;
    }

    .box:hover {
        transform: rotateX(0deg) translateZ(50px) scale(1.05);
        box-shadow: 0px 100px 120px -60px rgba(98, 98, 98, 0.75);
    }

    .card_body {
        display: flex;
        justify-content: center;
    }

    .card_body_content {
        width: 80%;
    }

    .price {
        font-weight: 100;
        float: right;
    }

    .title {
        font-weight: 100;
    }
    
    
    @media only screen and (max-width: 600px) {
        #main {
            height: 1600px;
            width: 100%;
            align-content: space-around;

        }

        #box {
            margin-top: 50px;
        }
    }


</style>

<body>
    <h2><center>Mentors</center>

    </h2>

 
  <div id="main">
        <div class="box">
           <img src=" <?php echo $rows['img']; ?>" width="100px" height="140px" align="right">
            <div class="card_body">
                <div class="card_body_content" style="margin-top: 8%">
  
    <h3>Name:- </h3>
                      <?php echo $rows['name']; ?>
                      <br></br>
                     <h4> Email:-</h4> 
                     <?php echo $rows['email']; ?>
<br></br>
<h4> Mobile:-</h4> 
                      <?php echo $rows['mobile']; ?>
                      <br></br>
                
                      
                </div>
            </div>
        </div>
       <div class="box">
           <img src="report.png" width="80px" height="80px" align="right" style="margin-right: 2%; margin-top: 2%;">
            <div class="card_body">
                <div class="card_body_content" style="margin-top: 8%" >
  
    <h3>Specialization:- </h3>
                     <?php echo $rows['special']; ?>
                      <br></br>
                     <h4> Post:-</h4> 
                     <?php echo $rows['post']; ?>
<br></br>
<h4>Stream:-</h4> 
                      <?php echo $rows['branch']; ?>
                      <br></br>
                     
                     
                </div>
            </div>
        </div>
       
       
       
    </div>



</head>
<body>



  </div>

      <?php
      }
      ?> 
       
</div>
    </ul>
      
    </div>
 
  </nav>

</div>
  </header>




</script>




</body>
</html>























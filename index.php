<?php ini_set('display_errors', 0); ?>
<?php
session_start();

?>
<!DOCTYPE html>
<html>
<head>
<title></title> 
</head> 
<body>
 <?php include 'indexcss.php'?>


 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha512-SfTiTlX6kk+qitfevl/7LibUOeJWlt9rbyDn92a1DqWOw9vWG2MFoays0sgObmWazO5BQPiFucnnEAjpAB+/Sw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <meta name="viewport" content="width=device-width, initial-scale=1">
<header>

  
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
<header>
<nav class="navbar navbar-expand-sm bg-warning navbar-dark">
  <a class="logo" href="#">Up-rise</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link active" href="sform.php">Form</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link active dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-expanded="false">
          Project
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="projects.php">new project</a>
          <a class="dropdown-item" href="exist.php">existing project </a>
          <div class="dropdown-divider"></div>
          
        </div>
      </li>
      
      <li class="nav-item">
        <a class="nav-link active" href="ment.php">Mentors</a>
      </li>

       <li class="nav-item">
        <a class="nav-link active" href="profiles.php">Profile</a>
      </li>

 <li class="nav-item dropdown">
        <a class="nav-link active dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-expanded="false">
          News/blogs
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="blog.php">new blogs</a>
          <a class="dropdown-item" href="blogdisp.php">view blogs</a>
          <div class="dropdown-divider"></div>
          
        </div>
      </li>
          
    </ul> 


<a class="button" type="button" href="logout.php"><?php echo $_SESSION['username'] ?>  -->Sign-out</a>

  </div>
</nav>

<div class="">
  
<h1><marquee bgcolor="" scrollamount=20><font color="darkgrey">Dr. Dy Patil School Of Mca lohegaon Pune</marquee></h1>
<h2></h2>
</div>
  
<footer class="footer" id="footer"> 

    <div class="container text-center text-md-left">

      <div class="row text-center text-md-left">

        <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3">
      <h5 class="text-uppercase mb-4 font-weight-bold text-info text-warning" >About Us</h5>
            <hr class="mb-8">
          <p class="text-light">Dr. Dy Patil School Of Mca Pune was started in the year 2009-10. It is affiliated to Sant Gadge Baba Amravati University, Amravati and recognized by the Govt. of Maharashtra. 

 </p>
          
        </div>

        <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mt-3">
          <div class="title">
          <h5 class="text-uppercase mb-4 font-weight-bold text-warning">Let Us Help</h5>
        </div>
            <hr class="mb-4">
        <p>
          <a href="#" class="text-light" style="text-decoration: none;">New project</a>
        </p>
        <p>
          <a href="#" class="text-light" style="text-decoration: none;">Existing project</a>
        </p>
        <p>
          <a href="#" class="text-light" style="text-decoration: none;"> Mentors</a>
        </p>
        <p>
          <a href="#" class="text-light" style="text-decoration: none;"> Contact</a>
        </p>

        </div>

        <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mt-3">
          <h5 class="text-uppercase mb-4 font-weight-bold text-warning">Brief</h5>
            <hr class="mb-4">
        <p>
          <a href="#" class="text-light" style="text-decoration: none;">Sign up</a>
        </p>
        <p>
          <a href="#" class="text-light" style="text-decoration: none;">Profile</a>
        </p>
        <p>
          <a href="#" class="text-light" style="text-decoration: none;">post projects</a>
        </p>
        
        </div>

        <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mt-3">
          <h5 class="text-uppercase mb-4 font-weight-bold text-warning" >Contact</h5>
            <hr class="mb-4">
          <p class="text-light">
            <i class="fas fa-home mr-3 text-light"></i>Maherbau College akola
          </p>
          <p class="text-light">
            <i class="fas fa-envelope mr-3 text-light"></i>smtmaherbanu@rediffmail.com
          </p>
          <p class="text-light">
            <i class="fas fa-phone mr-3 text-light"></i>+12 3456789
          </p>
          <p class="text-light">
            <i class="fas fa-print   mr-3 text-light"></i>+12 3456789
          </p>
        </div>
        
      </div>

      <hr class="mb-4">
      <div class=" row d-flex justify-content-center">
          <div>
            <p class="text-info"> Copyright ©2020 All rights reserved by:
              <a href="#" style="text-decoration: none;">
                <strong class="text-warning">Up-rise</strong>
              </a>
            </p>
          </div>
      </div>
        <div class="row d-flex justify-content-center">
          <div class="text-center ">

            <ul class="list-unstyled list-inline">
              <li class="list-inline-item">
                <a href="#" class="text-danger" ><i class="fab fa-facebook"></i></a>
              </li>
              <li class="list-inline-item">
                <a href="#" class= "text-danger" ><i class="fab fa-twitter"></i></a>
              </li>
              <li class="list-inline-item">
                <a href="#" class=" text-danger" ><i class="fab fa-google-plus"></i></a>
              </li>
              <li class="list-inline-item">
                <a href="#" class=" text-danger" ><i class="fab fa-linkedin-in"></i></a>
              </li>
              <li class="list-inline-item">
                <a href="#" class=" text-danger" ><i class="fab fa-youtube"></i></a>
              </li>
            </ul>
            
          </div>
          
        </div>
        
      </div>

    </div>
</footer>



 


</header>
</body>
</html>

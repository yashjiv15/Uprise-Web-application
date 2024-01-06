
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Up-Rise</title>
    <link
      href="https://fonts.googleapis.com/css?family=Material+Icons|Material+Icons+Outlined|Material+Icons+Two+Tone|Material+Icons+Round|Material+Icons+Sharp"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="blogcss.css" />


  </head>

  <body>
  <style>
.button {
  border-radius: 4px;
  background-color: black;
  border: none;
  color: blanchedalmond;
  text-align: center;
  font-size: 28px;
  padding: 10px;
  width: 150px;
 outline: none;
  border: none;
  border-radius: 5px;
  transition: .2s ease-in;
 margin-left: 650px;
}
.button:hover{
  background: #D2691E;
} 

.button span {
  cursor: pointer;
  display: inline-block;
  position: relative;
  transition: 0.5s;
}

.button span:after {
  content: '\00bb';
  position: absolute;
  opacity: 0;
  top: 0;
  right: -20px;
  transition: 0.5s;
}

.button:hover span {
  padding-right: 25px;
}

.button:hover span:after {
  opacity: 1;
  right: 0;
}
</style>
<?php
$server = "localhost";
$user = "root";
$password = "";
$db = "signup";

$con = mysqli_connect($server,$user,$password,$db);
if($con){
?>
<script>
  alert("connection successful");
</script>
<?php
}
else{
  ?>
<script>
  alert("no connection ");
</script>
<?php
}




?>
<?php
if(isset($_POST['submit']))
{
   $title = mysqli_real_escape_string($con, $_POST['title']);
   $news= mysqli_real_escape_string($con, $_POST['news']);
   $blogs = mysqli_real_escape_string($con, $_POST['blogs']);
  
    {
  $insertquery ="insert into blog( title, news, blogs) 
  values('$title','$news' ,'$blogs')" ;
         $iquery = mysqli_query($con,$insertquery);
       
  if($iquery){          

   ?>
  <script>
  alert("inserted successfully");
   window.history.go(-2);
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
    <nav>
      <div class="logo-area">
        <div class="tooltip">
          <span class="material-icons-outlined hover">menu</span>
          <span class="tooltip-text">Main Menu</span>
        </div>

        <img
          class="gb_uc gb_7d"
          src="https://www.gstatic.com/images/branding/product/1x/keep_2020q4_48dp.png"
          srcset="
            https://www.gstatic.com/images/branding/product/1x/keep_2020q4_48dp.png 1x,
            https://www.gstatic.com/images/branding/product/2x/keep_2020q4_48dp.png 2x
          "
          alt=""
          aria-hidden="true"
          style="width: 40px; height: 40px;"
        />
        <span class="logo-text">Up-Rise</span>
      </div>

      <div class="search-area">
        <div class="tooltip">
        
        </div>
        
      </div>
      <div class="settings-area">
        <div class="tooltip">
          <span class="material-icons-outlined hover">refresh</span>
          <span class="tooltip-text">Refresh</span>
        </div>
        <div class="tooltip">
          <span class="material-icons-outlined hover">view_agenda</span>
          <span class="tooltip-text">List View</span>
        </div>
        <div class="tooltip">
          <span class="material-icons-outlined hover">settings</span>
          <span class="tooltip-text">Settings</span>
        </div>
      </div>
      <div class="profile-actions-area">
        <div class="tooltip">
          <span class="material-icons-outlined hover">apps</span>
          <span class="tooltip-text">Apps</span>
        </div>
        <div class="tooltip">
          <span class="material-icons-outlined hover">account_circle</span>
          <span class="tooltip-text">Account</span>
        </div>
      </div>
    </nav>
    <main>
      <div class="sidebar">
        <div class="sidebar-item">
          <span class="material-icons-outlined hover active">lightbulb</span>
          <span class="sidebar-text">Notes</span>
        </div>
        <div class="sidebar-item">
          <span class="material-icons-outlined hover">notifications</span>
          <span class="sidebar-text">Reminders</span>
        </div>
        <div class="sidebar-item">
          <span class="material-icons-outlined hover">edit</span>
          <span class="sidebar-text">Edit Labels</span>
        </div>
        <div class="sidebar-item">
          <span class="material-icons-outlined hover">archive</span>
          <span class="sidebar-text">Archive</span>
        </div>
        <div class="sidebar-item">
          <span class="material-icons-outlined hover">delete</span>
          <span class="sidebar-text">Trash</span>
        </div>
      </div>
      <div class="form-container">
          <form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="POST">          
            <input class="note-text" type="text" name="title" placeholder="Title" />
          <div class="form-actions">
            <div class="tooltip">
              <span class="material-icons-outlined hover">check_box</span>
              <span class="tooltip-text">New List</span>
            </div>
            <div class="tooltip">
              <span class="material-icons-outlined hover">brush</span>
              <span class="tooltip-text">New Drawing</span>
            </div>
            <div class="tooltip">
              <span class="material-icons-outlined hover">image</span>
              <span class="tooltip-text">New Image</span>
            </div>
          </div>
         
      </div>

      <div class="form-container active-form">
      
          <input type="text" class="note-title" name="news" placeholder="News" />
          <input class="note-text" type="text" name="blogs" placeholder="blogs" />
          
        </div>
   <div>
          <button class="button" name="submit" type="submit"><span>Continue</span></button>
     </form> 

    </main>


  </body>
</html>

<?php
session_start();
?>

<?php include 'dbcon.php';

$query="DELETE FROM `profilem` WHERE email='{$_SESSION['email']}'";

   $result= mysqli_query($con, $query);


   if($result)
   {	        

   ?>
  <script>
	alert("deleted successfully");
location.replace("logout.php");

</script>
<?php
}

else
{
	?>
<script>
	alert("not deleted");
</script>
<?php
}

?>

 
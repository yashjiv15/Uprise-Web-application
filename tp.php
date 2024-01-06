<?php include 'dbcon.php';

$query="select * from Regis";
   $result= mysqli_query($con, $query);

?>
<!DOCTYPE html>
<html>
<head>
<title></title> 

</head> 
<body>

	<table align="center" border="1px" style="width:600px; line-height: 40px;" >
    <tr><th colspan="4"></th>
    </tr>
    <t>
<th>id</th>
<th>username</th>
<th>email</th>
<th>password</th>

    </t>
<?php
while($rows=mysqli_fetch_assoc($result))
{
	?>
<td><?php echo $rows['id']; ?></td> 
<td><?php echo $rows['username']; ?></td>
<td><?php echo $rows['email']; ?></td>
<td><?php echo $rows['password']; ?></td> 
</tr>
<?php
}
?>		
	</table>
</body>
</html>
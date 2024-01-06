<!DOCTYPE html>
<html>
<head>
	<title>Slide Navbar</title>
	<?php include 'Formstyle.php' ?>
<link href="https://fonts.googleapis.com/css2?family=Jost:wght@500&display=swap" rel="stylesheet">
</head>
<body>
	<div class="main">  	
		<input type="checkbox" id="chk" aria-hidden="true">

			<div class="Form">
				<form>
					<label for="chk" aria-hidden="true">Form</label>
					<input type="text" name="txt" placeholder="Your Branch" required="">
					<input type="email" name="email" placeholder="Idea discription" required="">
					<input type="password" name="pswd" placeholder="Expecting resources" required="">
					<input type="password" name="pswd" placeholder="Expecting teamates" required="">
					<style>
.button {
  border-radius: 4px;
  background-color: black;
  border: none;
  color: blanchedalmond;
  text-align: center;
  font-size: 28px;
  padding: 20px;
  width: 300px;
 outline: none;
	border: none;
	border-radius: 5px;
	transition: .2s ease-in;
	cursor: pointer;
  margin: 25px;
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
</head>
<body>



<a class="button" href="Form2.php"><span>Continue to Aprise</span></a>
				</form>
			</div>

			
	</div>
</body>
</html>
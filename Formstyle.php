
<!DOCTYPE html> 
<html> 
<head>
<title></title> 
<style type="text/css">
body{
	margin: 0;
	padding: 0;
	display: flex;
	justify-content: center;
	align-items: center;
	min-height: 100vh;
	font-family: 'Jost', sans-serif;
	background: #FFD900;
}
.main{
	width: 350px;
	height: 550px;
	background: white;
	overflow: hidden;
	background:;
	border-radius: 10px;
	box-shadow: 5px 20px 50px #000;
}
#chk{
	display: none;
}
.Form{
	position: relative;
	width:100%;
	height: 100%;
}
label{
	color: black;
	font-size: 2.3em;
	justify-content: center;
	display: flex;
	margin: 60px;
	font-weight: bold;
	cursor: pointer;
	transition: .5s ease-in-out;
}
input{
	width: 60%;
	height: 20px;
	background: #e0dede;
	justify-content: center;
	display: flex;
	margin: 20px auto;
	padding: 10px;
	border: none;
	outline: none;
	border-radius: 5px;
}

#chk:checked ~ .signup label{
	transform: scale(.6);
}
</style> 
</head> 

</body> 
</html>
<!---
	1st page
name
phone 
Email
roll no
branch

2nd page
project category
expecting resources
expexting teamates
future scope
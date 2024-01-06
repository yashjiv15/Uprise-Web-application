.<!DOCTYPE html> 
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
	height: 100vh;
	width: 100vw;
	
	font-family: "Karla",sans-serif!important;
	
background:url(log.jpg) no-repeat left/ cover;
background-size: 40% 100%;
position: relative;
	
	
}
.main{
	width: 300px;	
	height: 500px;
	position: absolute;
	margin-left: 800px;
	margin-top: 40px;
	
	overflow: hidden;	
	background-color: #fff;
	border-radius: 20px;
	box-shadow: 15px 40px 60px #696969;
}
#chk{
	display: none;
}
.signup{
	position: relative;
	width:100%;
	height: 100%;
}
label{
	color: #fff;
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
	height: 25px;
	background: #e0dede;
	justify-content: center;
	margin-top: 480px;
	display: flex;
	margin: 20px auto;
	padding: 6px;
	border: none;
	outline: none;
	border-radius: 5px;
}

.button1{
	width: 35%;
	height: 30px;
	margin: 10px auto;
	justify-content: center;
	display: block;
	color: #fff;
	background: #000;
	border-color: crimson;
	font-size: 1em;
	font-weight: bold;
	margin-top: 25px;
	margin-right: 52%;
    outline-color: crimson;
	border-radius: 5px;
	transition: .2s ease-in;
	cursor: pointer;
}
.button1:hover{
	background: #286fdb;
}	


.button2{
	width: 35%;
	height: 30px;
	margin: 10px auto;
	justify-content: center;
	display: block;
	color: #fff;
	background: #000;
	font-size: 1em;
	font-weight: bold;
	margin-top: -40px;
	margin-left: 52%;
	outline-color: crimson;
	border: none;
	border-radius: 5px;
	transition: .2s ease-in;
	cursor: pointer;
	border-color: crimson;
}
.button2:hover{
	background: #286fdb;
}

button{
	width: 60%;
	height: 40px;
	margin: 10px auto;
	justify-content: center;
	display: block;
	color: #fff;
	background: #000;
	border-color: crimson;
	font-size: 1em;
	font-weight: bold;
	margin-top: 20px;
	outline-color: crimson;
	border: none;
	border-radius: 5px;
	transition: .2s ease-in;
	cursor: pointer;

}
button:hover{
	background: #286fdb;
}	
.login{
	height: 460px;
	background: #000;
	border-radius: 60% / 10%;

	transform: translateY(-170px);
	transition: .8s ease-in-out;

}
.login label{
	color: #286fdb;
	transform: scale(.6);
	border-color: black;
}
.signup label{
	color: #286fdb;
	
}

#chk:checked ~ .login{
	transform: translateY(-500px);
}
#chk:checked ~ .login label{
	transform: scale(1);	
}
#chk:checked ~ .signup label{
	transform: scale(.6);
	
}
</style> 
</head> 
<body>
</body> 
</html>
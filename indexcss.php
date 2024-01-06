<!DOCTYPE html> 
<html> 
<head>
<title></title> 
<style type="text/css">
body{
  background : url(ivy.jpg) no-repeat center / cover;
  background-size: cover;
  height: 90vh;
}
.nav-link{
  font-size: 20px;
  margin-left: 20px;
  font-weight: bold;
  color: black;
  text-decoration-color: black;
}
.logo{
  position: relative;
  color: #fff200;
  background: #201f29;
  box-shadow: 0 0 20px #fff200;
  font-size: 24px;
  padding: 15px 30px;
  letter-spacing: 4px;
  text-decoration: none;
  text-transform: uppercase;
  transition: .5s;
}

.logo:hover{
  color:#201f29;
  background-color: #ff8c00;
  text-decoration: none;
  box-shadow: 0 0 30px #fff200, 0 0 50px #fff200;
  
  transition-delay: .5s;
}

.nav-link:hover {
 background-color: #2a56db;

}
.nav-item active{
color: black;
  text-decoration-color: black;

}
.dropdown-menu{
  animation-name: atthover;
  animation-duration: 1s;

}

.dropdown:hover{
  animation-play-state: running;
}
.dropdown:hover> .dropdown-menu{
  display: block;
}

.dropdown-item:hover{
  background-color: #ccc;
}

@keyframes atthover{
  0%{
    opacity: 0;
    margin-top: 30px;
  }
  50%{
    opacity: 1;
    margin-top: 0px;
  }
  100%{
    opacity: 100%;
  }

}

.navbar-dark.scrolled{
  background: #4a4847;
  transition: .5s ease-in-out;
}
.button{
    text-decoration: none;
  background-color:#ffd700;
  border: none;
  color: black;
  padding: 16px 32px;
  text-align: center;
  font-size: 16px;
  margin: 4px 2px;
  transition: 0.3s;
  box-shadow: 15px 40px 60px black;
}
.button:hover {
  background-color: #ff8c00;
  color: white;
 text-decoration: none;
}

.footer{
 margin-top: 40%;
 background-color: black;
 text-decoration: none;

}



.title-div{
color: yellow;
}

</style> 
</head> 

</body> 
</html>
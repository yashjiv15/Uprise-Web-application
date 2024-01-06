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
}

.dropdown-menu{
  animation-name: atthover;
  animation-duration: 1s;
  animation-iteration-count: finite;
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
</style> 
</head> 

</body> 
</html>
<!DOCTYPE html> 
<html> 
<head>
<title></title> 
<style type="text/css">
body

*{ margin: 0; padding: 0; box-sizing: border-box; }
a{color: white; text-decoration: none;}
header{
    margin: 0;
    padding: 0;
    padding-left: 0;
width: 98.8vw; 
height: 100%; 
background : url(mac.jpg);
 position: fixed;
}
nav {
width: 100%; 
height: 15vh; 
display: flex; 
justify-content: space-around; 
align-items: center; 
position: absolute;

}


.logo a{
color: white; 
text-decoration: none; 
font-size: 1.6rem; 
text-transform: uppercase;
}
.menu ul li
{

list-style: none; 
display: inline-block; 
padding: 0 15px
}

.menu ul li 
{
     color: crimson;
text-transform: capitalize;

}

.active, ul li:hover{
border-top: 2px solid crimson; 
border-bottom: 2px solid crimson;
}
.contact-btn
{
background-color: crimson; 
padding: 5px 10px; 
font-style: 14px; 
font-weight: 500; 
border:0px solid transparent; 
text-transform: capitalize;
}

.contact-btn:hover{
background: linear-gradient(to bottom, #615cfd 0%, #d465ef 100%);
}
/*//////center-content III///*/
 .center_content 
{
position: absolute; 
top: 50%; 
left: 50%; 
transform: translate(-50%, -50%);
}

.social_network{
 width: 100px;
 height: auto;
 position: relative;
 right: 0z`;
 top: 40%;
 margin-left: 95%;
}

.fa icons{
width: 40px; 
height: 40px; 
border-radius: 5%; 
background color: crimson;
display: flex; 
justify-content: center; 
align-items: center;
}

.fa_icons:nth-child(even) 
{
margin: 5px 20;
}
.fa_icons :hover
{
 background: linear-gradient(to bottom, #615cfd 0%, #d465ef 100%); 
   
}


</style> 
</head> 

</body> 
</html>
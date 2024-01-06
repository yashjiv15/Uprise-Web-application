<!DOCTYPE html> 
<html> 
<head>
  
<title></title> 
<style>
   
/*Info cards styling*/

body{
   background-color: #597aff;
   font-family: helvetica;
    overflow-x: hidden;
    overflow-y: hidden;
}
.content{
   width: 100%;
   margin-left: 19%;
      padding-top: 0px;
   align-items: center;
   color: #000;
}

.content2{
   width: 100%;
   padding-top: 0px;
margin-left: -20%;
   display: flex;
   justify-content: center;
   align-items: center;
   color: #000;
    border-spacing: 10px;
}


@media screen and (max-width: 767px){
   .content{
      padding-top: 80px;
      flex-direction: column;
   }
}
.card{
   width: 300px;
   height: 280px;
   background-color: #fff;
   margin: 15px;
   position: relative;
   display: flex;
   justify-content: center;
   border-radius: 10px;
   box-shadow: 2px 2px 10px 5px rgba(0,0,0,0.24);
   cursor: pointer;
   border: 0;
   transition: all 0.3s ease;
   background: linear-gradient(45deg , rgba(255,255,255,1) 80% , rgba(35,72,255,1) 82%);
   background-size: 450px;
}

.icon{
   margin: 0 auto;
   width: 100%;
   height: 80px;
   max-width: 80px;
   background: linear-gradient(90deg, rgba(126,148,255,1) 41%,rgba(0,0,0,1) 53%);
   border-radius: 100%;
   display: flex;
   justify-content: center;
   align-items: center;
   color: white;
   transition: all 0.8s ease;
   background-size: 200px;
}
.card .title{
   margin: 0;
   text-align: center;
   margin-top: 30px;
   font-weight: bold;
   text-transform: uppercase;
   letter-spacing: 4px;
}
.card .text{
   width: 80%;
   margin: 0 auto;
   font-size: 13px;
   text-align: center;
   margin-top: 20px;
   letter-spacing: 2px;
   opacity: 0;
   transition: all 0.4s ease-in-out;
}
.card:hover{
   height: 300px;
   background-position: -80px;
}
.card:hover .info{
   height: 90%;
}
.card:hover .text{
   opacity: 1;
   max-height: 40px;
}
.card:hover .icon{
   background-position: -100px;
   transition: all 0.4s ease-in-out;
   color: #2348ff;
}
 .file{
  

 }
 .button {
  border-radius: 1px;
  background-color: #f4511e;
  border: none;
  color: #FFFFFF;
  text-align: center;
  font-size: 16px;
  padding: 10px;
  width: 80px;
  transition: all 0.5s;
  cursor: pointer;
  
  margin-left: 80%;
  text-decoration: none;
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

</head> 
<body>
</body> 
</html>
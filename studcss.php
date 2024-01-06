<!DOCTYPE html> 
<html> 
<head>
    <body>
<title></title> 
<style type="text/css">

    header{
        margin: 0;
        padding: 0;
        font-family: 'josefin sans' , sans-serif;
   
    }
 

    

@media screen  and (max-width:767px){
    .navbar-dark{
        background-color: orange !important;
    }

}


#main {
        height: 80vh;
        width: 100vw;
        background-color: #fff;
        display: flex;
        justify-content: space-evenly;
        flex-wrap: wrap;
        align-content: space-around;
        perspective: 600px;
        border-radius: 2rem;
    }






#main-bar{
    border-radius: 2rem;
    width: 100%;
    top: 8%;
    position: fixed;
    z-index: 0;
    color: crimson;
}
.container {
  width: 350px;
  height: 500px;
  perspective: 800px;
  border-radius: 2rem;
}

.container:hover > .box {
  cursor: pointer;
  transform: rotateY(180deg);
}
.container {
  width: 350px;
  height: 500px;
  perspective: 800px;
}

.container:hover > .card {
  cursor: pointer;
  transform: rotateY(180deg);
}

.card {
  height: 100%;
  width: 100%;
  position: relative;
  transition: transform 1500ms;
  transform-style: preserve-3d;
}

.front,
.back {
  height: 100%;
  width: 100%;
  border-radius: 2rem;
  box-shadow: 0 0 5px 2px rgba(50, 50, 50, 0.25);
  position: absolute;
  backface-visibility: hidden;
  
}

.front {
 
}

.back {
 
  transform: rotateY(180deg);
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;
  gap: 5rem;
}

.box {
        height: 340px;
        width: 270px;
        border-radius: 30px;
        border: 1px solid black;
       
        box-shadow: 15px 40px 60px #FFF;
  transition: transform 1700ms;
  transform-style: preserve-3d;
  border-radius: 2rem;

    }

    .box img {
        border-radius: 20px 20px 20px 20px;
    }

    .box:hover {
        cursor: pointer;
  transform: rotateY(180deg);
}
    }
.card_body,
    .card_body_content {
       height: 100%;
  width: 100%;
  border-radius: 2rem;
  box-shadow: 0 0 5px 2px rgba(50, 50, 50, 0.25);
  position: absolute;
  backface-visibility: hidden;
    }


 .card_body_content {
  background-color: #3a3a3a;
  transform: rotateY(180deg);
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;
  gap: 5rem;
}


    .price {
        font-weight: 100;
        float: right;
    }

    .title {
        font-weight: 100;
    }
    
    
    @media only screen and (max-width: 600px) {
        #main {
            height: 1600px;
            width: 100%;
            align-content: space-around;

        }

        #box {
            margin-top: 50px;
        }
    }



 
    </style> 
</head> 

</body> 
</html>
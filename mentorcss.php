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
    }






#main-bar{
    
    width: 100%;
    top: 10%;
    position: fixed;
    z-index: 0;
    color: crimson;
}




.box {
        height: 320px;
        width: 270px;
        border-radius: 30px;
        border: 1px solid black;
        transform: rotateX(20deg) translateZ(0px) scale(1);
        box-shadow: 15px 40px 60px #FFF;
        transition: .5s cubic-bezier(0.07, 0.77, 0.85, 1.61);
        background-color:#e7e7e7;
    }

    .box img {
        border-radius: 20px 20px 20px 20px;
    }

    .box:hover {
        transform: rotateX(0deg) translateZ(50px) scale(1.05);
        box-shadow: 0px 100px 120px -60px rgba(98, 98, 98, 0.75);
    }

    .card_body {
        display: flex;
        justify-content: center;
    }

    .card_body_content {
        width: 80%;
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
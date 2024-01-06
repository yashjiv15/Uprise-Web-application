 <!DOCTYPE html> 
<html> 
<head>
    <body>
<title></title> 
<style type="text/css">


    * {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}

body {
  height: 100vh;
  overflow: hidden;
  background: linear-gradient(45deg, #061de3, #e306ca);
  font-family: Helvetica, sans-serif;
  color: rgb(211, 211, 211);
  display: flex;
  justify-content: center;
  align-items: center;
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
  background-image: url(https://source.unsplash.com/random/350x500);
}

.back {
  background-color: #3a3a3a;
  transform: rotateY(180deg);
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;
  gap: 5rem;
}





       </style> 
</head> 

</body> 
</html>
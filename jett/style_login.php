<?php header("content-type: text/css")?>

body,html{
	height: 100%;
	margin: 0;
}
.bg{
	background-image: url("imagem3.jpeg");
	background-repeat: no-repeat;
	background-size: cover;
	background-position: center;
	background-attachment: fixed;
}
body{
  margin: 0;
  padding: 0;
  font-family: sans-serif;
  background: #34495e;
}
.box{
  border-radius: 20px;
  width: 300px;
  padding: 40px;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%,-50%);
  background: white;
  text-align: center;
  border: 2px solid ffffff61;
  backdrop-filter:blur(3px);
}
.box h1{
  color: black;
  text-transform: uppercase;
  font-weight: 500;
}
.box input[type = "text"],.box input[type = "password"]{
  border:0;
  background: none;
  display: flex;
  margin: 20px auto;
  text-align: center;
  border: 2px solid black;
  padding: 14px 10px;
  width: 200px;
  outline: none;
  color: black;
  border-radius: 24px;
  transition: 0.25s;
}
.box input[type = "text"]:focus,.box input[type = "password"]:focus{
  width: 280px;
  border-color: black;
}
.box input[type = "submit"]{
  border:0;
  background: none;
  display: flex;
  margin: 20px auto;
  text-align: center;
  border: 2px solid ;
  padding: 14px 40px;
  outline: none;
  color: white;
  border-radius: 24px;
  transition: 0.25s;
  cursor: pointer;
}

.box input[type = "submit"]{
  background: #2ecc71;
}''
.box input::placeholder{
  color: black
}
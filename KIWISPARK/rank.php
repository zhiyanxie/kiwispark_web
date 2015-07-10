<?php

	session_start();
	
	include("connection.php");
	
	$query="SELECT ranktime FROM users WHERE id='".$_SESSION['id']."' LIMIT 1";
	
	$result = mysqli_query($link,$query);
	
    
?>

<!DOCTYPE html>
<html>
<head>
<title>Game</title>
<meta http-equiv="X-UA-Compatible" content="IE=edge" >
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<link rel="apple-touch-icon" sizes="57x57" href="icon/apple-icon-57x57.png">
<link rel="apple-touch-icon" sizes="60x60" href="icon/apple-icon-60x60.png">
<link rel="apple-touch-icon" sizes="72x72" href="icon/apple-icon-72x72.png">
<link rel="apple-touch-icon" sizes="76x76" href="icon/apple-icon-76x76.png">
<link rel="apple-touch-icon" sizes="114x114" href="icon/apple-icon-114x114.png">
<link rel="apple-touch-icon" sizes="120x120" href="icon/apple-icon-120x120.png">
<link rel="apple-touch-icon" sizes="144x144" href="icon/apple-icon-144x144.png">
<link rel="apple-touch-icon" sizes="152x152" href="icon/apple-icon-152x152.png">
<link rel="apple-touch-icon" sizes="180x180" href="icon/apple-icon-180x180.png">
<link rel="icon" type="image/png" sizes="192x192"  href="icon/android-icon-192x192.png">
<link rel="icon" type="image/png" sizes="32x32" href="icon/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="96x96" href="icon/favicon-96x96.png">
<link rel="icon" type="image/png" sizes="16x16" href="icon/favicon-16x16.png">
<link rel="manifest" href="icon/manifest.json">
<meta name="msapplication-TileColor" content="#ffffff">
<meta name="msapplication-TileImage" content="icon/ms-icon-144x144.png">
<meta name="theme-color" content="#ffffff">

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="js/bootstrap.min.js"></script>


<!--Bootstrap-->
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>



<!---c--->

  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

  
  


<!---c--->
<style>
     .navbar-brand{
      font-size:2.0em;}
	  #box{
	  width:100px;
	  height:100px;
	  background-color:red;
	  display:none;
	  position:relative;
	  }

</style>


</head>






<body>
<!--navbar+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++-->

<nav class="navbar navbar-default">	
   <div class="container-fluid">
      <div "navbar-header pull-left">
		 </button>
		 <a class="navbar-brand">RANK GAME</a>
	  </div>
	  <div class="pull-right">
	     <ul class="nav navbar-nav">
		    <li><a href="index.php?logout=1">Log Out</a></li> 
      </div>
   </div> 
</nav>

<!--navbar end+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++-->

<div class="container">
<h1>Test your Reactions!</h1>
<p>Your time:<span id="time"></span></p>
<div id="box"></div>
</div>

</body>






</html>

<script>


var clickedTime; var createdTime;var reactionTime;
var width = (window.innerWidth > 0) ? window.innerWidth : screen.width;
var height = (window.innerHeight > 0) ? window.innerHeight : screen.height;


function getRandomColor() {
    var letters = '0123456789ABCDEF'.split('');
    var color = '#';
    for (var i = 0; i < 6; i++ ) {
        color += letters[Math.floor(Math.random() * 16)];
    }
    return color;
}


function makebox(){
var time=3000*Math.random();
setTimeout(function(){
var top=height*Math.random()*0.5;
var left=width*Math.random()*0.5;

document.getElementById("box").style.top=top+"px";
document.getElementById("box").style.left=left+"px";
document.getElementById("box").style.borderRadius="50px";
document.getElementById("box").style.backgroundColor=getRandomColor();
document.getElementById("box").style.display="block";
createdTime=Date.now();
},time);
}




document.getElementById("box").onclick=function(){
clickedTime=Date.now();
this.style.display="none";
reactionTime=(clickedTime-createdTime)/1000;
document.getElementById("time").innerHTML=reactionTime;


$.ajax({
            url: 'updaterank.php',
            type: 'POST',
            data: {var1: reactionTime},
            success: function(data) {
                //alert("success");
            }
        });



makebox();}

makebox();

var width = (window.innerWidth > 0) ? window.innerWidth : screen.width;


</script>






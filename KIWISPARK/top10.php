
<!DOCTYPE html>
<html>
<head>
<title>About</title>
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


</style>
<style>
table, td, th {
    border: 1px solid green;
}

th {
    background-color: green;
    color: white;
}


table {
	padding-top:20px;
	font-size:1.5em;
    width: 80%;
	height:80%;
}
   .navbar-brand{
      font-size:2em;}
	  #myCarousel{
	  padding:0;
	  margin:0;
	  }
	  .navbar{
	  padding:0;
	  margin:0;
	  }
.slide1{
		 background-image:url("image/background6.jpg"); 
		   background-repeat: no-repeat;
		   background-size: cover;
</style>

</head>






<body>
<!--navbar+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++-->

<nav class="navbar navbar-default">	
   <div class="container-fluid">
      <div "navbar-header">
	     <button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
		 <span class="icon-bar"></span>
		 <span class="icon-bar"></span>
		 <span class="icon-bar"></span>
		 </button>
		 <a class="navbar-brand">Xie</a>
	  </div>
	  <div class="collapse navbar-collapse">
	     <ul class="nav navbar-nav">
		    <li ><a href="index.php">Home</a></li>
			<li ><a href="about.html">About</a></li>
			<li><a href="game.html">Online Game</a></li>
			<li class="active"><a href="top10.php">Top10</a></li>
		 </ul>
	  
	  
	  
	  
	 
      </div>
   </div> 
</nav>

<!--navbar end+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++-->


<!--carousel begin  topContainer+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++-->
<div class="container slide1">


  
 <?php
session_start();
	
	include("connection.php");
	
	$query = "SELECT email,ranktime FROM users ORDER BY ranktime LIMIT 10";

	$result = mysqli_query($link, $query);
	
	
	$index=1;
	
 
	echo  " <table>";

	echo   "<tr><th>rank</th><th>email</th><th>time</th></tr>"; 
	


	while($row = mysqli_fetch_array($result)){  
echo "<tr><td>" . $index . "</td>    <td>" . $row['email'] . "</td>     <td>" . $row['ranktime'] . "</td></tr>"; 
$index=$index+1;
}

	echo "</table>";


?>








  
    
   
</div>


<script>
    
    
		$(".slide1").css("height",$(window).height());
		$(".slide1").css("width",$(window).width());
	
    
    </script>

<!--carousel end+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++-->


</body>

</html>
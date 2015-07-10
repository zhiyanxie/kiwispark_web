<?php include("login.php"); ?>

<!DOCTYPE html>
<html>
<head>
<title>Home</title>
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
  <style>
  .carousel-inner > .item > img,
  .carousel-inner > .item > a > img {
      width:100%;
      margin: 0;
	  padding:0;
  }
  </style>
  
  


<!---c--->
<style>
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
		 background-image:url("image/background1.jpg"); 
		   background-repeat: no-repeat;
		   background-size: cover;
		 
	  }
	  .slide2{
		 background-image:url("image/background5.jpg"); 
		   background-repeat: no-repeat;
		   background-size: cover;
		 
	  }
	  .slide3{
		 background-image:url("image/background3.jpg"); 
		   background-repeat: no-repeat;
		   background-size: cover;
		 
	  }
	  .slide4{
		 background-image:url("image/background4.jpg"); 
		   background-repeat: no-repeat;
		  background-size: cover;
	  }
   		
   	#topRow {
   			margin-top:100px;
	text-align:center;}
	
	.white{
		color:white;
	}
	
	
	  
	  



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
		    <li class="active"><a href="#home">Home</a></li>
			<li><a href="about.html">About</a></li>
			<li><a href="game.html">Online Game</a></li>
			<li><a href="top10.php">Top10</a></li>
		 </ul>
	  
	  <form class="navbar-form navbar-right" method="post">
	      <div class="form-group">
		         <input type="email" name="loginemail" placeholder="Email" class="form-control" value="<?php echo addslashes($_POST['loginemail']); ?>" />
		  </div>
		  
		  <div class="form-group">
		        <input type="password" name="loginpassword" placeholder="Password" class="form-control" value="<?php echo addslashes($_POST['loginpassword']); ?>" />
		  </div>
		  <input type="submit" name= "submit" class="btn btn-success" value="Log In">

	  </form>
	  
	  
	  </div>
   </div>
</nav>

<!--navbar end+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++-->


<!--carousel begin  topContainer+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++-->
  <div id="myCarousel" class="carousel slide" data-interval="10000">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
      <li data-target="#myCarousel" data-slide-to="3"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      <div class="item active slide1" id="crouselimg">
	      <div class="container contentContainer " id="topContainer">
  		      <div class="row">
  		
  			     <div class="col-md-6 col-md-offset-3" id="topRow">
 			 
 			      <h1 class="marginTop white">RANK GAME</h1>
 			 
 			      <p class="lead white">CHECK YOUR REACTION TIME</p>
				  
				  <?php
 			 
 			 	if ($error) {
 			 	
 			 		echo '<div class="alert alert-danger">'.addslashes($error).'</div>';
 			 	
 			 	}
 			 	
 			 	if ($message) {
 			 	
 			 		echo '<div class="alert alert-success">'.addslashes($message).'</div>';
 			 	
 			 	}
 			 
 			    ?>
 			 
 			 
 			      <p class="bold marginTop white">Interested? Sign Up Below!</p>
 			 
 			      <form class="marginTop" method="post"> 
 			  
 			          	<div class="form-group white">
 			 	 
  				        	<label for="email">Email Address</label>
  					
  				            <input type="email" name="email" class="form-control" placeholder="Your Email" value="<? echo addslashes($_POST['email']); ?>" />
  																							   
				        </div>
				
				        <div class="form-group white">
 			 	
  					         <label for="password">Password</label>
  					
  				             <input type="password" name="password" class="form-control" placeholder="Password" value="<? echo addslashes($_POST['password']); ?>" />
  																								  
				        </div>

 			 	         <input type="submit" name="submit" value="Sign Up" class="btn btn-success btn-lg marginTop"/> 
 			 	
 			      </form>
 			 
 			    </div>
 		 
		     </div>
		
           </div>
      </div>

      <div class="item slide2" id="crouselimg">
      </div>
    
      <div class="item slide3" id="crouselimg">
      </div>

      <div class="item slide4" id="crouselimg">
      </div>
	  
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
   
<!--carousel end+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++-->
<script>
       if($(window).width()<700){
		  
		  
		  
		   $(".slide1").css("height",1.4*$(window).height());
		   $(".slide1").css("width",$(window).width());
		   $(".slide2").css("height",1.4*$(window).height());
		   $(".slide2").css("width",$(window).width());
		   $(".slide3").css("height",1.4*$(window).height());
		   $(".slide3").css("width",$(window).width());
		   $(".slide4").css("height",1.4*$(window).height());
		   $(".slide4").css("width",$(window).width());
 
		
         
		 
       
    
		 
		 
		 
		 }else{
   
		

  //  $('#slide1').hover(function() {
 //   $('#myCarousel').carousel('pause');
 //         });
	 
        //$(function(){
       

  //      $("input").focus(function(){
  //     $("#myCarousel").carousel('pause');
  //      }).blur(function() {
  //     $("#myCarousel").carousel('cycle');
  //        });
         // });
    
		$(".slide1").css("height",0.93*$(window).height());
		$(".slide1").css("width",$(window).width());
		$(".slide2").css("height",0.93*$(window).height());
		$(".slide2").css("width",$(window).width());
		$(".slide3").css("height",0.93*$(window).height());
		$(".slide3").css("width",$(window).width());
		$(".slide4").css("height",0.93*$(window).height());
		$(".slide4").css("width",$(window).width());   
		
		
	   
		 }
    
    </script>

</body>
</html>


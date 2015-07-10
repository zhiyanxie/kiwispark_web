<?php
    session_start();
	include("connection.php");
	
	if ($_GET["logout"]==1 AND $_SESSION['id']) { session_destroy();
		
			$message="You have been logged out. Have a nice day!";
		
		}
		
		
    if($_POST['submit']=="Sign Up"){
		if  (!$_POST['email'])    $error.="<br />Please enter your email";
	        else if (!(filter_var($_POST['email'],FILTER_VALIDATE_EMAIL)))   $error.="<br />Please enter a validate email";
		if    (!$_POST['password'])    $error.="<br />Please enter your password";
		   else{
			   if (strlen($_POST['password'])<8)        $error.="<br />please enter at least 8 characters password";
		       if ( !preg_match('`[A-Z]`',$_POST['password']))       $error.="<br />Please enter at least one capital character";
		   
		       }
			   
	    if($error)	$error ="there are errors in your sign up details:".$error;   
	    else{
			
			$query="SELECT * FROM users WHERE email='".mysqli_real_escape_string($link,$_POST['email'])."'";
			$result= mysqli_query($link,$query);
			$results= mysqli_num_rows($result);
			
			if ($results) $error = "That email exists. Do you want to login?";
			else{
			  $query="INSERT into users (`email`,`password`,`ranktime`) VALUES ('".mysqli_real_escape_string($link,$_POST['email'])."','".md5(md5($_POST['email']).$_POST['password'])."','100')";
			mysqli_query($link, $query);
    		
    		$message="You've been signed up!";
    		
    		$_SESSION['id']= mysqli_insert_id($link);
    		
    		header("Location:rank.php");
				
			}
		}	   
		   
		   
		   
	}
	
	if ($_POST['submit']=="Log In"){
		$query="SELECT * FROM users WHERE email='".mysqli_real_escape_string($link,$_POST['loginemail'])."' AND password='".md5(md5($_POST['loginemail']).$_POST['loginpassword'])."' LIMIT 1";
		$result=mysqli_query($link,$query);
		$row=mysqli_fetch_array($result);
		if($row){
			$_SESSION['id']=$row['id'];
			header("Location:rank.php");
		} else{
			$error =  "We could not find a user with that email and password. Please try again.";
		}
		
	}
?>
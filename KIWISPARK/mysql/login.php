<?php
    session_start();
	include("connection.php");
    if($_POST['submit']=="sign up"){
		if  (!$_POST['email'])    $error.="Please enter your email";
	        else if (!(filter_var($_POST['email'],FILTER_VALIDATE_EMAIL)))   $error.="<br />Please enter a validate email";
		if    (!$_POST['password'])    $error.="Please enter your password";
		   else{
			   if (strlen($_POST['password'])<8)        $error.="<br />please enter at least 8 char password";
		       if ( !preg_match('`[A-Z]`',$_POST['password']))       $error.="<br />Please enter at least one cap";
		   
		   }
			   
	    if($error)	echo"<br />there are errors in your sign up details:".$error;   
	    else{
			
			$query="SELECT * FROM users WHERE email='".mysqli_real_escape_string($link,$_POST['email'])."'";
			$result= mysqli_query($link,$query);
			$results= mysqli_num_rows($result);
			echo $results;
			if ($results) echo "That email exists. Do you want to login?";
			else{
			  $query="INSERT into users (`email`,`password`) VALUES ('".mysqli_real_escape_string($link,$_POST['email'])."','".md5(md5($_POST['email']).$_POST['password'])."')";
				mysqli_query($link,$query);
				echo "you have been signed up";
				$_SESSION['id']=mysqli_insert_id($link);
				
				print_r($_SESSION);
				
				//redirect page
				
			}
		}	   
		   
		   
		   
	}
	
	if ($_POST['submit']=="Log in"){
		
		$query="SELECT * FROM users WHERE email='".mysqli_real_escape_string($link,$_POST['loginemail'])."' AND password='".md5(md5($_POST['loginemail']).$_POST['loginpassword'])."' LIMIT 1";
		$result=mysqli_query($link,$query);
		$row=mysqli_fetch_array($result);
		print_r($row);
		if($row){
			$_SESSION['id']=$row['id'];
			//redirect to logged in page;
		} else{
			echo "we could not find with the email or password ";
		}
		
	}
?>
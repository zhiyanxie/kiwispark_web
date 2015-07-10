

<? include("logprocess.php") ?>

<form method="post">
    <input type="email" name="email" id="email" value="<?php echo addslashes($_POST['email']); ?>"/>
	<input type="password" name="password" id="password" value="<?php echo addslashes($_POST['password']); ?>" />
	<input type="submit" name="submit" value="sign up"  />
	
</form>


<form method="post">
    <input type="email" name="loginemail" id="loginemail" value="<?php echo addslashes($_POST['email']); ?>"/>
	<input type="password" name="loginpassword" id="loginpassword" value="<?php echo addslashes($_POST['password']); ?>" />
	<input type="submit" name="submit" value="Log in"  />
	
</form>
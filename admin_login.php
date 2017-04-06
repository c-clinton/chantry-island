<?php
	ini_set('display_errors',1);
	error_reporting(E_ALL);
	
	require_once("admin/phpscripts/init.php");
	
	$ip = $_SERVER["REMOTE_ADDR"];
	
	if(isset($_POST['submit'])) {
		$username = trim($_POST['username']);
		$enteredpass = trim($_POST['password']);
		if($username != "" && $enteredpass != "") {
			$result = logIn($username, $enteredpass, $ip);
			$message = $result;
		}else{
			$message = "Please fill in the required fields.";
		}
	}
	
	
?>
<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Admin Login</title>
<link href="css/foundation.css" rel="stylesheet" type="text/css">
<link href="css/app.css" rel="stylesheet" type="text/css">
</head>
<body>

<div class="container row">

	<section class="small-12 medium-8 medium-centered columns">
	<h1>Admin Login</h1>
    <p>Welcome to your CMS system! Please log in below.</p>
    <?php if(!empty($message)){echo $message;} ?>
	<form id="login" action="admin_login.php" method="post">
    	<label>Username:</label>
    	<input class="box" type="text" name="username" value="">
    	<label >Password:</label>
    	<input class="box" type="password" name="password" value="">
    	<input type="submit" class="submitbut" id="loginbut" name="submit" value="Login">
    </form>
    </section>
    
    <div class="text-center"><a href="index.php">Back</a></div>
    
 </div>
</body>
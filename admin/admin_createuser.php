<?php
	ini_set('display_errors',1);
    error_reporting(E_ALL);
	
	require_once("phpscripts/init.php");
	confirm_logged_in();
	
	if(isset($_POST['submit'])) {

		$fname = trim($_POST['fname']);
		$lname = trim($_POST['lname']);
		$username = trim($_POST['username']);
		$email = trim($_POST['email']);
		$result = createUser($fname, $lname, $username, $email);
		$message = $result;
		
	}

?>

<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Create User</title>
<link href="../css/foundation.css" rel="stylesheet" type="text/css">
<link href="../css/app.css" rel="stylesheet" type="text/css">
</head>

<body>

<div class="container row">

<section class="small-12 medium-8 medium-centered columns">

<h1>Create User</h1>

<h2 class="hidden">Please fill out the fields below.</h2>

<?php if(!empty($message)){echo $message;} ?>


<form action ="admin_createuser.php" method="post">

<div>

<label>First Name:</label>
<input type="text" name="fname" value="<?php if(!empty($fname)){echo $fname;} ?>">
<label>Last Name:</label>
<input name="lname" type="text" value="<?php if(!empty($lname)){echo $lname;} ?>">

</div>

<div>
<label>Username:</label>
<input name="username" type="text" value="<?php if(!empty($username)){echo $username;} ?>">
<label>Email:</label>
<input name="email" type="text" value="<?php if(!empty($email)){echo $email;} ?>">
</div>

<div class="text-center"><input class="brownbut brown importantbut" type="submit" name="submit" value="Create User"></div>
</form>


<div class="text-center backbut"><a href="../admin_index.php">Back</a></div>

</section>

</div>

</body>
</html>

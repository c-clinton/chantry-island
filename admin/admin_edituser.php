<?php
	ini_set('display_errors',1);
    error_reporting(E_ALL);

    require_once("phpscripts/init.php");
	confirm_logged_in();

    $id = $_SESSION['user_id'];
    $populate = getUser($id);
	

	
	if(isset($_POST['submit'])) {
		$fname = trim($_POST['fname']);
		$lname = trim($_POST['lname']);
		$username = trim($_POST['username']);
		$email = trim($_POST['email']);
		$password = trim($_POST['password']);
		
		$result = editUser($fname, $lname, $username, $email, $password, $id);
		$message = $result;
		}

?>

<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Edit User</title>
<link href="../css/foundation.css" rel="stylesheet" type="text/css">
<link href="../css/app.css" rel="stylesheet" type="text/css">
</head>

<body>

<div class="container row">

<section class="small-12 medium-8 medium-centered columns">

<h1>Edit User</h1>

<div class="formsection">

<h2 class="hidden">Please fill out the fields below.</h2>

<?php if(!empty($message)){echo $message;} ?>


<form action ="admin_edituser.php" method="post">
<label>First Name:</label>
<input type="text" name="fname" value="<?php echo $populate['user_fname'];?>">
<label>Last Name:</label>
<input name="lname" type="text" value="<?php echo $populate['user_lname'];?>">
<label>Username:</label>
<input name="username" type="text" value="<?php echo $populate['user_name'];?>">
<label>Email:</label>
<input name="email" type="text" value="<?php echo $populate['user_email'];?>">
<label>Password:</label>
<input name="password" type="text" value="<?php echo $populate['user_pass'];?>">

<div class="text-center"><input class="brownbut brown importantbut" type="submit" name="submit" value="Edit User"></div>
</form>


<div class="text-center backbut"><a href="../admin_index.php">Back</a></div>

</section>

</div>

</body>
</html>

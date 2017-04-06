<?php
	ini_set('display_errors',1);
    error_reporting(E_ALL);
	
	require_once("phpscripts/init.php");
	confirm_logged_in();
	
	$tbl = "tbl_user";
	$users = getAll($tbl);
	
	?>

<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Delete User</title>
<link href="../css/foundation.css" rel="stylesheet" type="text/css">
<link href="../css/app.css" rel="stylesheet" type="text/css">
</head>

<body>
<h1>Delete User</h1>

<div class="container row">

<section class="small-12 medium-8 medium-centered columns">

<p>This page lets you delete users. WARNING: this is a permanent action and cannot be undone! Please have at least one active user account at all times. If you delete the last user, a new one can re-added using the create user page, but only if you don't log out.</p>

<!--Honestly, not sure if I'd offer this feature in the final product because you know how end users can be. Still, I'll leave the feature in just in case there's any demand for it.-->

<?php

while($row=mysqli_fetch_array($users)){
	
	echo "{$row['user_name']}---------<a href=\"phpscripts/caller.php?caller_id=delete&id={$row['user_id']}\">Delete User</a><br>";
	
}

?>
<div class="text-center backbut"><a href="../admin_index.php">Back</a></div>
</section>
</div>
</body>
</html>

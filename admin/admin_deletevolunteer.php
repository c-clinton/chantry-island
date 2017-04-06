<?php
	ini_set('display_errors',1);
    error_reporting(E_ALL);
	
	require_once("phpscripts/init.php");
	confirm_logged_in();
	
	$tbl = "tbl_volunteer";
	$volunteers = getAll($tbl);
	
	?>

<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Delete Volunteer</title>
<link href="../css/foundation.css" rel="stylesheet" type="text/css">
<link href="../css/app.css" rel="stylesheet" type="text/css">
</head>

<body>
<div class="container row">

<section class="small-12 medium-8 medium-centered columns">

<h1>Delete Volunteer</h1>

<p>This page lets you delete volunteers from the volunteers section of the about page. WARNING: this is a permanent action and cannot be undone!</p>

<?php

while($row=mysqli_fetch_array($volunteers)){
	
	echo "{$row['volunteer_name']}---------<a href=\"phpscripts/caller.php?caller_id=deletevolunteer&id={$row['volunteer_id']}\">Delete Volunteer</a><br>";
	
}

?>
<div class="text-center backbut"><a href="../admin_index.php">Back</a></div>
</section>
</div>
</body>
</html>

<?php
	ini_set('display_errors',1);
    error_reporting(E_ALL);
	
	require_once("phpscripts/init.php");
	confirm_logged_in();
	
	$tbl = "tbl_interviews";
	$interviews = getAll($tbl);
	
	?>

<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Delete Interview</title>
<link href="../css/foundation.css" rel="stylesheet" type="text/css">
<link href="../css/app.css" rel="stylesheet" type="text/css">
</head>

<body>
<h1>Delete Interview</h1>

<div class="container row">

<section class="small-12 medium-8 medium-centered columns">

<p>This page lets you delete embedded youtube interviews in the about section. WARNING: this is a permanent action and cannot be undone!</p>

<?php

while($row=mysqli_fetch_array($interviews)){
	
	echo "{$row['interview_name']}---------<a href=\"phpscripts/caller.php?caller_id=deleteinterview&id={$row['interview_id']}\">Delete Interview</a><br>";
	
}

?>
<div class="text-center backbut"><a href="../admin_index.php">Back</a></div>
</section>
</div>
</body>
</html>

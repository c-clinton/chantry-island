<?php
	ini_set('display_errors',1);
    error_reporting(E_ALL);
	
	require_once("phpscripts/init.php");
	confirm_logged_in();
	
	$tbl = "tbl_partners";
	$partners = getAll($tbl);
	
	?>

<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Delete Partner</title>
<link href="../css/foundation.css" rel="stylesheet" type="text/css">
<link href="../css/app.css" rel="stylesheet" type="text/css">
</head>

<body>
<h1>Delete Partner</h1>

<div class="container row">

<section class="small-12 medium-8 medium-centered columns">

<p>This page lets you delete affiliates that show up in the tours section. WARNING: this is a permanent action and cannot be undone!</p>

<?php

while($row=mysqli_fetch_array($partners)){
	
	echo "{$row['partner_name']}---------<a href=\"phpscripts/caller.php?caller_id=deletepartner&id={$row['partner_id']}\">Delete Partner</a><br>";
	
}

?>
<div class="text-center backbut"><a href="../admin_index.php">Back</a></div>
</section>
</div>
</body>
</html>

<?php
	ini_set('display_errors',1);
    error_reporting(E_ALL);
	
	require_once("phpscripts/init.php");
	confirm_logged_in();
	
	$tbl = "tbl_news";
	$news = getAll($tbl);
	
	?>

<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Delete News Entry</title>
<link href="../css/foundation.css" rel="stylesheet" type="text/css">
<link href="../css/app.css" rel="stylesheet" type="text/css">
</head>

<body>
<div class="container row">

<section class="small-12 medium-8 medium-centered columns">

<h1>Delete News Entry</h1>

<p>This page lets you delete news entries in the about section. WARNING: this is a permanent action and cannot be undone!</p>

<?php

while($row=mysqli_fetch_array($news)){
	
	echo "{$row['news_title']}---------<a href=\"phpscripts/caller.php?caller_id=deletenews&id={$row['news_id']}\">Delete News</a><br>";
	
}

?>
<div class="text-center backbut"><a href="../admin_index.php">Back</a></div>
</section>
</div>
</body>
</html>

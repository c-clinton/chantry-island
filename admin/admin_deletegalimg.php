<?php
	ini_set('display_errors',1);
    error_reporting(E_ALL);
	
	require_once("phpscripts/init.php");
	confirm_logged_in();
	
	$tbl = "tbl_galleryimg";
	$images = getAll($tbl);
	
	?>

<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Delete Gallery Images</title>
<link href="../css/foundation.css" rel="stylesheet" type="text/css">
<link href="../css/app.css" rel="stylesheet" type="text/css">
</head>

<body>
<div class="container row">

<section class="small-12 medium-8 medium-centered columns">
<h1>Delete Gallery Images</h1>
<p>Delete gallery images here. WARNING: this action is permanent and cannot be undone!</p>
<?php

while($row=mysqli_fetch_array($images)){
	
	echo "<p id=\"{$row['galleryimg_id']}\" class=\"text-center\">{$row['galleryimg_title']}&nbsp;<a href=\"phpscripts/caller.php?caller_id=deletegalimg&id={$row['galleryimg_id']}\">Delete Image</a></p><div class=\"text-center\"><img class=\"small-3\" src=\"../gallery/{$row['galleryimg_path']}\"></div>";
	
}

?>
<div class="text-center backbut"><a href="../admin_index.php">Back</a></div>
</section>
</div>
</body>
</html>

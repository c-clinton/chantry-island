<?php
	require_once('phpscripts/init.php');
	ini_set('display_errors',1);
    error_reporting(E_ALL);
	confirm_logged_in();
	if(isset($_POST['submit'])) {
		$mimg = $_FILES['galleryimg_path']['name'];
	
		
	$title = $_POST['galleryimg_title'];	
	$desc = $_POST['galleryimg_desc'];
	
	$uploadGalimg = addGalimg($mimg, $title, $desc);
	$message = $uploadGalimg;
	}
?>
<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Add Gallery Image</title>
</head>
<link href="../css/foundation.css" rel="stylesheet" type="text/css">
<link href="../css/app.css" rel="stylesheet" type="text/css">
<body>
<h1>Add Gallery Image</h1>

<div class="container row">

<section class="small-12 medium-8 medium-centered columns">

<p>Add a new gallery image here.</p>

<?php if(!empty($message)){echo $message;} ?>
<form action="admin_addgalimg.php" method="post" enctype="multipart/form-data"> 
<label>Image:</label><br>
<input type="file" name="galleryimg_path" value="" size="32"><br><br>
<label>Title:</label><br>
<input type="text" name="galleryimg_title" value="" size="32"><br><br>
<label>Description:</label><br>
<input type="text" name="galleryimg_desc" value="" size="32"><br><br>
<div class="text-center"><input class="brownbut brown importantbut" type="submit" name="submit" value="Add Image" ></div>
</form>
<div class="text-center backbut"><a href="../admin_index.php">Back</a></div>
</section>
</div>
</body>
</html>
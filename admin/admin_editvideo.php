<?php
	require_once('phpscripts/init.php');
	confirm_logged_in();
	if(isset($_POST['submit'])) {
		$vid = $_FILES['header_video']['name'];
	
	$editvideo = editVideo($vid);
	$message = $editvideo;
	}
	
?>
<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Edit Header Video</title>
<link href="../css/foundation.css" rel="stylesheet" type="text/css">
<link href="../css/app.css" rel="stylesheet" type="text/css">
</head>
<body>
<h1>Edit Header Video</h1>

<!--note to profs: this feature won't work on my machine locally due to file size constraints (I tried changing every relevant setting in php.ini but still no dice), though it WILL work when hosted. You can test it out online at http://www.cjclinton.ca/sites/chantry/admin_login.php. Username and pass should be the same.-->

<div class="container row">

<section class="small-12 medium-8 medium-centered columns">

<p>Upload a new video to show on the home page here. Video format must be in MP4 or MPEG. Do note, upload times may take a while, especially for larger files. Please make sure your video is properly compressed and h.264 encoded. Best results are achieved with videos under 10mb in size.</p>

<div small-12 medium-8 medium-centered columns id="toload">
</div>

<?php if(!empty($message)){echo $message;} ?>
<form action="admin_editvideo.php" method="post" enctype="multipart/form-data">
<label>Select Video:</label><br>
<input type="file" name="header_video" value="" size="32"><br><br>
<div class="text-center"><input class="brownbut brown importantbut" id="loadme" type="submit" name="submit" value="Change Video" ></div>
</form>
<div class="text-center backbut"><a href="../admin_index.php">Back</a></div>
</section>
</div>

<script src="loading.js"></script>
</body>
</html>
<?php
	require_once('phpscripts/init.php');
	ini_set('display_errors',1);
    error_reporting(E_ALL);
	confirm_logged_in();
	if(isset($_POST['submit'])) {
		$mimg = $_FILES['volunteer_imgpath']['name'];

	$name = $_POST['volunteer_name'];
	$position= $_POST['volunteer_position'];
	
	$uploadVolunteer = addVolunteer($mimg,$name,$position);
	$message = $uploadVolunteer;
	}
?>
<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Add Volunteer</title>
<link href="../css/foundation.css" rel="stylesheet" type="text/css">
<link href="../css/app.css" rel="stylesheet" type="text/css">
</head>
<body>
<h1>Add Volunteer</h1>

<div class="container row">

<section class="small-12 medium-8 medium-centered columns">
<p>Add a new volunteer to the about section below.</p>
<?php if(!empty($message)){echo $message;} ?>
<form action="admin_addvolunteer.php" method="post" enctype="multipart/form-data"> <!--looks for multi part files like movies and shit-->
<label>Image:</label><br>
<input type="file" name="volunteer_imgpath" value="" size="32"><br><br>
<label>Name:</label><br>
<input type="text" name="volunteer_name" value="" size="32"><br><br>
<label>Position:</label><br>
<input type="text" name="volunteer_position" value="" size="32"><br><br>
<div class="text-center"><input class="brownbut brown importantbut" type="submit" name="submit" value="Add Volunteer" ></div>
</form>
<div class="text-center backbut"><a href="../admin_index.php">Back</a></div>
</section>
</div>
</body>
</html>
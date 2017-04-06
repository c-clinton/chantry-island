<?php
	require_once('phpscripts/init.php');
	ini_set('display_errors',1);
    error_reporting(E_ALL);
	confirm_logged_in();
	$tbl = "tbl_interviews";

	if(isset($_POST['submit'])) {
		
	$interviewlink = $_POST['link'];	
	$interviewname = $_POST['interview_name'];
	$uploadLink = addInterview($interviewlink, $interviewname);
	$message = $uploadLink;
	}
	
?>
<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Add New Interview</title>
<link href="../css/foundation.css" rel="stylesheet" type="text/css">
<link href="../css/app.css" rel="stylesheet" type="text/css">
</head>
<body>
<h1>Add New Interview</h1>

<div class="container wrapper row">

<section class="small-12 medium-8 medium-centered columns">

<p>Add an embedded youtube link to the about section below. Be sure to copy-paste the entire embed code (from the beginning to the end of the "iframe" tags).</p>

<?php if(!empty($message)){echo $message;} ?>
<form action="admin_addinterview.php" method="post">
<label>Interview Embed Link:</label><br>
<input type="text" name="link" value="" size="32"><br>
<label>Interview Name:</label><br>
<input type="text" name="interview_name" value="" size="32"><br>
<div class="text-center"><input class="brownbut brown importantbut" type="submit" name="submit" value="Add Interview" ></div>
</form>
<div class="text-center backbut"><a href="../admin_index.php">Back</a></div>
</section>
</div>
</body>
</html>
<?php
	require_once('phpscripts/init.php');
	ini_set('display_errors',1);
    error_reporting(E_ALL);
	confirm_logged_in();
	if(isset($_POST['submit'])) {
		$mimg = $_FILES['news_img']['name'];
		
	$date = $_POST['news_date'];	
	$title = $_POST['news_title'];
	$text = $_POST['news_text'];
	
	$uploadNews = addNews($date, $title, $mimg, $text);
	$message = $uploadNews;
	}
?>
<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Add News</title>
<link href="../css/foundation.css" rel="stylesheet" type="text/css">
<link href="../css/app.css" rel="stylesheet" type="text/css">
</head>
<body>
<h1>Add News</h1>

<div class="container wrapper row">

<section class="small-12 medium-8 medium-centered columns">

<p>Update the news section on the about page below.</p>

<?php if(!empty($message)){echo $message;} ?>
<form action="admin_addnews.php" method="post" enctype="multipart/form-data"> <!--looks for multi part files like movies and shit-->
<label>Image:</label><br>
<input type="file" name="news_img" value="" size="32"><br><br>
<label>Date:</label><br>
<input type="text" name="news_date" value="" size="32"><br><br>
<label>Title:</label><br>
<input type="text" name="news_title" value="" size="32"><br><br>
<label>Text:</label><br>
<input type="text" name="news_text" value="" size="32"><br><br>
<div class="text-center"><input class="brownbut brown importantbut" type="submit" name="submit" value="Add News" ></div>
</form>
<div class="text-center backbut"><a href="../admin_index.php">Back</a></div>
</section>
</div>
</body>
</html>
<?php
	ini_set('display_errors',1);
    error_reporting(E_ALL);

    require_once("phpscripts/init.php");
	confirm_logged_in();
	
	ini_set('display_errors', 1);
	error_reporting(E_ALL);
	
	$tbl = "tbl_galleryimg";
	
if (isset($_POST['submit'])) {
	
	$title = $_POST['title'];
	$desc = $_POST['desc'];
	$id = $_POST['id'];
	$updategal = updategal($id, $title, $desc);
	$message = $updategal;
	
	
}

?>

<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Edit Gallery</title>
<link href="../css/foundation.css" rel="stylesheet" type="text/css">
<link href="../css/app.css" rel="stylesheet" type="text/css">
</head>

<body>

<h1>Edit Gallery</h1>

<div class="container row">

<section class="small-12 medium-8 medium-centered columns">

<p>Update the text and titles for gallery images here.</p>

<?php if(!empty($message)){echo $message;} ?>
	<?php 
	
		$images = getAll($tbl);
	
if(!is_string($images)){
	while($row = mysqli_fetch_array($images)){	
			
	echo "<form id=\"{$row['galleryimg_id']}\" action=\"admin_editgallery.php\" method=\"post\">";
	echo "<textarea hidden name=\"id\">{$row['galleryimg_id']}</textarea>";
	echo "<img src=\"../gallery/{$row['galleryimg_path']}\">";
	echo "<textarea name=\"title\">{$row['galleryimg_title']}</textarea>";
	echo "<textarea name=\"desc\">{$row['galleryimg_desc']}</textarea>";
	echo "<div class=\"text-center\"><input class=\"brownbut brown importantbut\" type=\"submit\" name=\"submit\" value = \"Save Content\"></div>";
	echo "</form>";	
	
	}
	
	
	}	
	
		
	?>

<div class="text-center backbut"><a href="../admin_index.php">Back</a></div>

</section>
</div>


</body>
</html>

<?php
	ini_set('display_errors',1);
    error_reporting(E_ALL);

    require_once("phpscripts/init.php");
	confirm_logged_in();
	
	ini_set('display_errors', 1);
	error_reporting(E_ALL);
	
	if(isset($_POST['submit'])) {
		$mimg4 = $_FILES['about_img1']['name'];
		$mimg5 = $_FILES['about_img2']['name'];
		$mimg6 = $_FILES['about_img3']['name'];
		$mimg7 = $_FILES['about_img4']['name'];
		$mimg8 = $_FILES['about_img5']['name'];
		$mimg9 = $_FILES['about_img_4_mobile']['name'];
		$mimg10 = $_FILES['about_img_5_mobile']['name'];
		
		$uploadImages = addAboutimages($mimg4, $mimg5, $mimg6, $mimg7, $mimg8, $mimg9, $mimg10);
	$message = $uploadImages;
	}
	
	$tbl = "tbl_about";
	$col = "about_id";
	$id = 1;
	$getpics = getAll($tbl);

?>

<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Edit About</title>
<link href="../css/foundation.css" rel="stylesheet" type="text/css">
<link href="../css/app.css" rel="stylesheet" type="text/css">
</head>

<body>

<div class="container wrapper row">
<h1>Edit About</h1>
<section class="small-12 medium-centered columns">
<p>Update the text and images for the about page here. Please make sure all images are in .jpg/.jpeg format and properly sized!</p>
<div class="small-12 medium-6 columns">
<h2 class="text-center">Update Images</h2>
<?php if(!empty($message)){echo $message;} ?>
<?php if(!is_string($getpics)){
		while($row = mysqli_fetch_array($getpics)){
			
echo "<form action=\"admin_editabout.php\" method=\"post\" enctype=\"multipart/form-data\">";
echo "<label>About Image 1:</label><br>";
echo "<img class=\"small-4\" src=\"../images/{$row['about_img1']}\">";
echo "<input type=\"file\" name=\"about_img1\" value=\"\" size=\"32\"><br><br>";
echo "<label>About Image 2:</label><br>";
echo "<img class=\"small-4\" src=\"../images/{$row['about_img2']}\">";
echo "<input type=\"file\" name=\"about_img2\" value=\"\" size=\"32\"><br><br>";
echo "<label>About Image 3:</label><br>";
echo "<img class=\"small-4\" src=\"../images/{$row['about_img3']}\">";
echo "<input type=\"file\" name=\"about_img3\" value=\"\" size=\"32\"><br><br>";
echo "<label>About Image 4:</label><br>";
echo "<img class=\"small-4\" src=\"../images/{$row['about_img4']}\">";
echo "<input type=\"file\" name=\"about_img4\" value=\"\" size=\"32\"><br><br>";
echo "<label>About Image 5:</label><br>";
echo "<img class=\"small-4\" src=\"../images/{$row['about_img5']}\">";
echo "<input type=\"file\" name=\"about_img5\" value=\"\" size=\"32\"><br><br>";
echo "<label>About Image 4 (mobile):</label><br>";
echo "<img class=\"small-4\" src=\"../images/{$row['about_img_4_mobile']}\">";
echo "<input type=\"file\" name=\"about_img_4_mobile\" value=\"\" size=\"32\"><br><br>";
echo "<label>About Image 5 (mobile):</label><br>";
echo "<img class=\"small-4\" src=\"../images/{$row['about_img_5_mobile']}\">";
echo "<input type=\"file\" name=\"about_img_5_mobile\" value=\"\" size=\"32\"><br><br>";
echo "<div class=\"text-center\"><input class=\"brownbut brown importantbut\" type=\"submit\" name=\"submit\" value=\"Update Images\" ></div>";
echo "</form>";
}
	}else{
		echo "<p>{$getpics}</p>";
	}
			
			?>

</div>
<div class="small-12 medium-6 columns">
<h2 class="text-center">Update Text</h2>
<?php echo single_edit($tbl, $col, $id); ?>
</div>

</section>
</div>

</body>
</html>

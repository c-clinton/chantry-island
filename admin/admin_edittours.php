<?php

    require_once("phpscripts/init.php");
	confirm_logged_in();
	
	ini_set('display_errors', 1);
	error_reporting(E_ALL);
	
	
	if(isset($_POST['submit'])) {
		$mimg11 = $_FILES['tours_img1']['name'];
		$mimg12 = $_FILES['tours_img2']['name'];
		$mimg13 = $_FILES['tours_img3']['name'];
		$mimg14 = $_FILES['tours_img4']['name'];
	$uploadImages = addToursimages( $mimg11, $mimg12, $mimg13, $mimg14);
	$message = $uploadImages;
	}
	
	$tbl = "tbl_tours";
	$col = "tours_id";
	$id = 1;
	$gettours = getAll($tbl);

?>

<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Edit Tours</title>
<link href="../css/foundation.css" rel="stylesheet" type="text/css">
<link href="../css/app.css" rel="stylesheet" type="text/css">
</head>

<body>

<h1>Edit Tours</h1>

<div class="container wrapper row">

<section class="small-12 medium-centered columns">

<p>Update the text and images for the tours page here. Please make sure all images are in .jpg/.jpeg format and properly sized!</p>

<div class="small-12 medium-6 columns">
<h2 class="text-center">Update Images</h2>
<?php if(!empty($message)){echo $message;} ?>
<?php if(!is_string($gettours)){
		while($row = mysqli_fetch_array($gettours)){
echo "<form action=\"admin_edittours.php\" method=\"post\" enctype=\"multipart/form-data\">";
echo "<label>Tours Image 1:</label><br>";
echo "<img class=\"small-4\" src=\"../images/{$row['tours_img1']}\">";
echo "<input type=\"file\" name=\"tours_img1\" value=\"\" size=\"32\"><br><br>";
echo "<label>Tours Image 2:</label><br>";
echo "<img class=\"small-4\" src=\"../images/{$row['tours_img2']}\">";
echo "<input type=\"file\" name=\"tours_img2\" value=\"\" size=\"32\"><br><br>";
echo "<label>Tours Image 3:</label><br>";
echo "<img class=\"small-4\" src=\"../images/{$row['tours_img3']}\">";
echo "<input type=\"file\" name=\"tours_img3\" value=\"\" size=\"32\"><br><br>";
echo "<label>Tours Image 4:</label><br>";
echo "<img class=\"small-4\" src=\"../images/{$row['tours_img4']}\">";
echo "<input type=\"file\" name=\"tours_img4\" value=\"\" size=\"32\"><br><br>";
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

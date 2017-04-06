<?php
	ini_set('display_errors',1);
    error_reporting(E_ALL);

    require_once("phpscripts/init.php");
	confirm_logged_in();
	
	ini_set('display_errors', 1);
	error_reporting(E_ALL);
	
	
	if(isset($_POST['submit'])) {
		$mimg1 = $_FILES['home_img1']['name'];
		$mimg2 = $_FILES['home_img2']['name'];
		$mimg3 = $_FILES['home_img3']['name'];
		
	$uploadImages = addHomeimages($mimg1, $mimg2, $mimg3);
	$message = $uploadImages;
	}
	
	$tbl = "tbl_home";
	$col = "home_id";
	$id = 1;
	$gethome = getAll($tbl);

?>

<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Edit Home</title>
<link href="../css/foundation.css" rel="stylesheet" type="text/css">
<link href="../css/app.css" rel="stylesheet" type="text/css">
</head>

<body>


<h1>Edit Home</h1>

<div class="container wrapper row">

<section class="small-12 medium-centered columns">

<p>Update the text and images for the home page here. Please make sure all images are in .jpg/.jpeg format and properly sized!</p>

<div class="small-12 medium-6 columns">
<h2 class="text-center">Update Images</h2>
<?php if(!empty($message)){echo $message;} ?>
<?php if(!is_string($gethome)){
		while($row = mysqli_fetch_array($gethome)){
			
echo "<form action=\"admin_edithome.php\" method=\"post\" enctype=\"multipart/form-data\">";
echo "<label>Home Image 1:</label><br>";
echo "<img class=\"small-4\" src=\"../images/{$row['home_img1']}\">";
echo "<input type=\"file\" name=\"home_img1\" value=\"\" size=\"32\"><br><br>";
echo "<label>Home Image 2:</label><br>";
echo "<img class=\"small-4\" src=\"../images/{$row['home_img2']}\">";
echo "<input type=\"file\" name=\"home_img2\" value=\"\" size=\"32\"><br><br>";
echo "<label>Home Image 3:</label><br>";
echo "<img class=\"small-4\" src=\"../images/{$row['home_img3']}\">";
echo "<input type=\"file\" name=\"home_img3\" value=\"\" size=\"32\"><br><br>";
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

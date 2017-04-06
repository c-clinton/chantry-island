<?php
	ini_set('display_errors',1);
    error_reporting(E_ALL);

    require_once("phpscripts/init.php");
	confirm_logged_in();
	
	ini_set('display_errors', 1);
	error_reporting(E_ALL);
	
	if(isset($_POST['submit'])) {
	$mimg = $_FILES['logo_path']['name'];
	$uploadLogo = changeLogo($mimg);
	$message = $uploadLogo;
	}
	
	$tbl = "tbl_logo";
	$getlogo = getAll($tbl);

?>

<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Edit Logo</title>
<link href="../css/foundation.css" rel="stylesheet" type="text/css">
<link href="../css/app.css" rel="stylesheet" type="text/css">
</head>

<body>

<div class="container wrapper row">
<h1>Edit Logo</h1>

<p>This page allows you to upload a new logo. Plase ensure the image is in jpg/jpeg or .png format, and appropriately sized!</p>
<section class="small-12 medium-centered columns">
<div class="small-12 medium-6 columns">
<h2 class="text-center">Update Logo</h2>
<?php if(!empty($message)){echo $message;} ?>
<?php if(!is_string($getlogo)){
		while($row = mysqli_fetch_array($getlogo)){
			
echo "<form action=\"admin_editlogo.php\" method=\"post\" enctype=\"multipart/form-data\">";
echo "<label>Current Logo:</label><br>";
echo "<img class=\"small-4\" src=\"../images/{$row['logo_path']}\">";
echo "<input type=\"file\" name=\"logo_path\" value=\"\" size=\"32\"><br><br>";
echo "<div class=\"text-center\"><input class=\"brownbut brown importantbut\" type=\"submit\" name=\"submit\" value=\"Update Logo\" ></div>";
echo "</form>";
}
	}else{
		echo "<p>{$getlogo}</p>";
	}
			
			?>

</div>
</section>
</div>

<div class="text-center backbut"><a href="../admin_index.php">Back</a></div>

</body>
</html>

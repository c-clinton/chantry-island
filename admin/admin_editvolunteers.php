<?php
	ini_set('display_errors',1);
    error_reporting(E_ALL);

    require_once("phpscripts/init.php");
	confirm_logged_in();
	
	ini_set('display_errors', 1);
	error_reporting(E_ALL);
	
	$tbl = "tbl_volunteer";
	
if (isset($_POST['submit'])) {
	
	$id = $_POST['id'];
	$mimg = $_FILES['volunteer_imgpath']['name'];
	$name = $_POST['volunteer_name'];
	$position = $_POST['volunteer_position'];
	$updatevolunteers = updateVolunteers($id, $mimg, $name, $position);
	$message = $updatevolunteers;
	
	
}

?>

<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Edit Volunteers</title>
<link href="../css/foundation.css" rel="stylesheet" type="text/css">
<link href="../css/app.css" rel="stylesheet" type="text/css">
</head>

<body>

<h1>Edit Volunteers</h1>

<div class="container row">

<section class="small-12 medium-8 medium-centered columns">

<p>This page lets you update the names, images, and positions for the volunteers listed in the About section. Please make sure all images are in .jpg/.jpeg format and properly sized!</p>

<?php if(!empty($message)){echo $message;} ?>
	<?php 
	
		$volunteers = getAll($tbl);
	
if(!is_string($volunteers)){
	while($row = mysqli_fetch_array($volunteers)){	
			
	echo "<form id=\"{$row['volunteer_id']}\" action=\"admin_editvolunteers.php\" method=\"post\" enctype=\"multipart/form-data\">";
	echo "<textarea hidden name=\"id\">{$row['volunteer_id']}</textarea>";
	echo "<input type=\"file\" name=\"volunteer_imgpath\" value=\"\" size=\"32\"><br><br>";
	echo "<textarea name=\"volunteer_name\">{$row['volunteer_name']}</textarea>";
	echo "<textarea name=\"volunteer_position\">{$row['volunteer_position']}</textarea>";
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

<?php
	ini_set('display_errors',1);
    error_reporting(E_ALL);

    require_once("phpscripts/init.php");
	confirm_logged_in();
	
	ini_set('display_errors', 1);
	error_reporting(E_ALL);
	
	$tbl = "tbl_headerhome";
	$tbl1 = "tbl_headerabout";
	$tbl2 = "tbl_headertours";
	$tbl3 = "tbl_headergallery";
	$tbl4 = "tbl_headercontact";
	
if (isset($_POST['submit'])) {
	
	$id1 = $_POST['headerhome_id'];
	$mimg1 = $_FILES['headerhome_path']['name'];
	$name1 = $_POST['headerhome_name'];
	
	$id2 = $_POST['headerabout_id'];
	$mimg2 = $_FILES['headerabout_path']['name'];
	$name2 = $_POST['headerabout_name'];
	
	$id3 = $_POST['headertours_id'];
	$mimg3 = $_FILES['headertours_path']['name'];
	$name3 = $_POST['headertours_name'];
	
	$id4 = $_POST['headergallery_id'];
	$mimg4 = $_FILES['headergallery_path']['name'];
	$name4 = $_POST['headergallery_name'];
	
	$id5 = $_POST['headercontact_id'];
	$mimg5 = $_FILES['headercontact_path']['name'];
	$name5 = $_POST['headercontact_name'];
	
	$updateheader1 = updateHeaders1($id1, $mimg1, $name1);
	$message1 = $updateheader1;
	
	$updateheader2 = updateHeader2($id2, $mimg2, $name2);
	$message2 = $updateheader2;
	
	$updateheader3 = updateHeader3($id3, $mimg3, $name3);
	$message3 = $updateheader3;
	
	$updateheader4 = updateHeader4($id4, $mimg4, $name4);
	$message4 = $updateheader4;
	
	
	$updateheader5 = updateHeader5($id5, $mimg5, $name5);
	$message5 = $updateheader5;
	
	
}
	


?>

<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Edit Headers</title>
<link href="../css/foundation.css" rel="stylesheet" type="text/css">
<link href="../css/app.css" rel="stylesheet" type="text/css">
</head>

<body>

<h1>Edit Headers</h1>

<div class="container row">

<section class="small-12 medium-8 medium-centered columns">

<p>Update the headers for each section of the website here. Please make sure all images are in .jpg/.jpeg format and properly sized!</p>

<?php if(!empty($message1)){echo $message1;}

		$headerhome = getAll($tbl);
	
if(!is_string($headerhome)){
	while($row = mysqli_fetch_array($headerhome)){	
			
	echo "<form id=\"{$row['headerhome_id']}\" action=\"admin_editheaders.php\" method=\"post\" enctype=\"multipart/form-data\">";
	echo "<textarea hidden name=\"headerhome_id\">{$row['headerhome_id']}</textarea>";
	echo "<img src=\"../images/{$row['headerhome_path']}\">";
	echo "<input type=\"file\" name=\"headerhome_path\" value=\"\" size=\"32\"><br><br>";
	echo "<textarea name=\"headerhome_name\">{$row['headerhome_name']}</textarea>";
	
	}
	
	
	}	
	
		
	?>
    
    <?php if(!empty($message2)){echo $message2;}

		$headerabout = getAll($tbl1);
	
if(!is_string($headerabout)){
	while($row = mysqli_fetch_array($headerabout)){	
			
	echo "<form id=\"{$row['headerabout_id']}\" action=\"admin_editheaders.php\" method=\"post\" enctype=\"multipart/form-data\">";
	echo "<textarea hidden name=\"headerabout_id\">{$row['headerabout_id']}</textarea>";
	echo "<img src=\"../images/{$row['headerabout_path']}\">";
	echo "<input type=\"file\" name=\"headerabout_path\" value=\"\" size=\"32\"><br><br>";
	echo "<textarea name=\"headerabout_name\">{$row['headerabout_name']}</textarea>";
	}
	
	
	}	
	
		
	?>
    
     <?php if(!empty($message3)){echo $message3;}

		$headertours = getAll($tbl2);
	
if(!is_string($headertours)){
	while($row = mysqli_fetch_array($headertours)){	
			
	echo "<form id=\"{$row['headertours_id']}\" action=\"admin_editheaders.php\" method=\"post\" enctype=\"multipart/form-data\">";
	echo "<textarea hidden name=\"headertours_id\">{$row['headertours_id']}</textarea>";
	echo "<img src=\"../images/{$row['headertours_path']}\">";
	echo "<input type=\"file\" name=\"headertours_path\" value=\"\" size=\"32\"><br><br>";
	echo "<textarea name=\"headertours_name\">{$row['headertours_name']}</textarea>";
	}
	
	
	}	
	
		
	?>
    
    <?php if(!empty($message4)){echo $message4;}

		$headergallery = getAll($tbl3);
	
if(!is_string($headergallery)){
	while($row = mysqli_fetch_array($headergallery)){	
			
	echo "<form id=\"{$row['headergallery_id']}\" action=\"admin_editheaders.php\" method=\"post\" enctype=\"multipart/form-data\">";
	echo "<textarea hidden name=\"headergallery_id\">{$row['headergallery_id']}</textarea>";
	echo "<img src=\"../images/{$row['headergallery_path']}\">";
	echo "<input type=\"file\" name=\"headergallery_path\" value=\"\" size=\"32\"><br><br>";
	echo "<textarea name=\"headergallery_name\">{$row['headergallery_name']}</textarea>";
	
	}
	
	
	}	
	
		
	?>
    
    <?php if(!empty($message5)){echo $message5;}

		$headercontact = getAll($tbl4);
	
if(!is_string($headercontact)){
	while($row = mysqli_fetch_array($headercontact)){	
			
	echo "<form id=\"{$row['headercontact_id']}\" action=\"admin_editheaders.php\" method=\"post\" enctype=\"multipart/form-data\">";
	echo "<textarea hidden name=\"headercontact_id\">{$row['headercontact_id']}</textarea>";
	echo "<img src=\"../images/{$row['headercontact_path']}\">";
	echo "<input type=\"file\" name=\"headercontact_path\" value=\"\" size=\"32\"><br><br>";
	echo "<textarea name=\"headercontact_name\">{$row['headercontact_name']}</textarea>";
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

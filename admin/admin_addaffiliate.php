<?php
	require_once('phpscripts/init.php');
	ini_set('display_errors',1);
    error_reporting(E_ALL);
	confirm_logged_in();
	if(isset($_POST['submit'])) {
		$mimg = $_FILES['affiliate_img']['name'];
			
		$thumb = "TH_".$mimg;
		

	$name = $_POST['affiliate_name'];
	$sitelink = $_POST['affiliate_link'];	
	$info = $_POST['affiliate_info'];
	
	$uploadPartner = addPartner($mimg, $name, $sitelink, $info, $thumb);
	$message = $uploadPartner;
	}
?>
<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Add Partner Site</title>
<link href="../css/foundation.css" rel="stylesheet" type="text/css">
<link href="../css/app.css" rel="stylesheet" type="text/css">
</head>
<body>
<h1>Add Partner Site</h1>

<div class="container row">

<section class="small-12 medium-8 medium-centered columns">

<p>Add a new partner site for the In and Around Chantry Island section of the tours page.</p>

<?php if(!empty($message)){echo $message;} ?>
<form action="admin_addaffiliate.php" method="post" enctype="multipart/form-data"> <!--looks for multi part files like movies and shit-->
<label>Image:</label><br>
<input type="file" name="affiliate_img" value="" size="32"><br><br>
<label>Name:</label><br>
<input type="text" name="affiliate_name" value="" size="32"><br><br>
<label>Website:</label><br>
<input type="text" name="affiliate_link" value="" size="32"><br><br>
<label>Info:</label><br>
<input type="text" name="affiliate_info" value="" size="32"><br><br>
<div class="text-center"><input class="brownbut brown importantbut" type="submit" name="submit" value="Add Partner" ></div>
</form>
<div class="text-center backbut"><a href="../admin_index.php">Back</a></div>
</section>
</div>
</body>
</html>
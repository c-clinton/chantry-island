<?php 

include 'config.php';

	$mysqli = new mysqli($config['mysql_server'], $config['mysql_user'], $config['mysql_password'], $config['mysql_db']);
	if ($mysqli->connect_errno) {
		printf("Connection failed: %s \n", $mysqli->connect_error);
		exit();
	}
	
	
	$mysqli->set_charset("utf8");

	$images = $_GET["galleryimg_id"];
	$imagequery = "SELECT * FROM tbl_galleryimg WHERE galleryimg_id = $images";
	$result = mysqli_query($mysqli, $imagequery);
	$row = mysqli_fetch_assoc($result);	
	echo json_encode($row);	
			
?>	

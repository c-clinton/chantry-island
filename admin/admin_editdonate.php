<?php
	ini_set('display_errors',1);
    error_reporting(E_ALL);

    require_once("phpscripts/init.php");
	confirm_logged_in();
	
	ini_set('display_errors', 1);
	error_reporting(E_ALL);
	
	$tbl = "tbl_donate";
	$col = "donate_id";
	$id = 1;

?>

<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Update Donation Section</title>
<link href="../css/foundation.css" rel="stylesheet" type="text/css">
<link href="../css/app.css" rel="stylesheet" type="text/css">
</head>

<body>

<h1>Update Donation Section</h1>

<div class="container row">

<section class="small-12 medium-8 medium-centered columns">

<p>Update the text for the donation section of the contact page here.</p>

<?php echo single_edit($tbl, $col, $id); ?>


</section>

</div>


</body>
</html>

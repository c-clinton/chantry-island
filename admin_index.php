<?php
	require_once("admin/phpscripts/init.php");
	confirm_logged_in();
?>

<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Welcome to your Admin Panel</title>
<link href="css/foundation.css" rel="stylesheet" type="text/css">
<link href="css/app.css" rel="stylesheet" type="text/css">
</head>
<body>

<div class="admin">

	<h1> <span id="greeting"></span><?php
    
    echo $_SESSION['user_name']; ?>. </h1> 
    
    <p class="text-center">The current date is: <?php 
	
	$date = date('Y-m-d');
	
	$time = time('h');
	
	echo $date;
	
	
	?> Your last session was:
	
	<?php 
	
	echo $_SESSION['user_lastlogin'];
	
	?>
    </p>
    
    <h1>What would you like to do?</h1>

    <div class="row">
    
    <div class="small-12 medium-4 column">
    <h1>Add</h1>
    
    <ul class="text-center">
    
    <li><a class="link" href="admin/admin_createuser.php">Create User</a></li>
    
    <li><a class="link" href="admin/admin_addnews.php">Add News Entry</a></li>
    
    <li><a class="link" href="admin/admin_addgalimg.php">Add Gallery Image</a></li>
    
    <li><a class="link" href="admin/admin_addvolunteer.php">Add Volunteer</a></li>
    
    <li><a class="link" href="admin/admin_addaffiliate.php">Add Affiliate</a></li>
    
    <li><a class="link" href="admin/admin_addinterview.php">Add Interview</a></li>
    
    </ul>
    
    </div>
    
    <div class="small-12 medium-4 column">
    
     <h1>Edit</h1>
    
   <ul class="text-center">
    
    <li><a class="link" href="admin/admin_edituser.php">Edit User</a></li>
    
    <li><a class="link" href="admin/admin_edithome.php">Update Home</a></li>
     
    <li><a class="link" href="admin/admin_editabout.php">Update About</a></li>
      
    <li><a class="link" href="admin/admin_edittours.php">Update Tours</a></li>
    
    <li><a class="link" href="admin/admin_editdonate.php">Update Donation Section</a></li>
    
    <li><a class="link" href="admin/admin_editgallery.php">Edit Gallery Content</a></li>
    
    <li><a class="link" href="admin/admin_editvolunteers.php">Edit Volunteers</a></li>
    
    <li><a class="link" href="admin/admin_editlogo.php">Edit Logo</a></li>
    
     <li><a class="link" href="admin/admin_editheaders.php">Edit Headers</a></li>
     
      <li><a class="link" href="admin/admin_editvideo.php">Edit Video</a></li>
    </ul>
    
    </div>
    
    <div class="small-12 medium-4 column">
    
    <h1>Remove</h1>
    
     <ul class="text-center">
    
    <li><a class="link" href="admin/admin_deleteuser.php">Delete User</a></li>
    
    <li><a class="link" href="admin/admin_deletenews.php">Remove News Entry</a></li>
    
    <li><a class="link" href="admin/admin_deletegalimg.php">Remove Gallery Images</a></li>
    
 	<li><a class="link" href="admin/admin_deletevolunteer">Remove Volunteer</a></li>
    
     <li><a class="link" href="admin/admin_deleteaffiliate.php">Remove Affiliate</a></li>
     
     <li><a class="link" href="admin/admin_deleteinterview.php">Remove Interview</a></li>
     
     </ul>
     
     </div>

   </div>
   
   <div class="smallbut importantbut text-center"><a href="admin/phpscripts/caller.php?caller_id=logout">Log Out</a></div>
   
   </div>
    
   <script src="js/date.js"></script>
</body>
</html>
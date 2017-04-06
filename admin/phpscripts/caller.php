<?php
	ini_set('display_errors',1);
    error_reporting(E_ALL);

	require_once('init.php');
	
	if(isset($_GET['caller_id'])) {
		$dir = $_GET['caller_id'];
		if($dir == "logout") {
			logged_out();	
		}else if($dir == "delete"){
		$id = $_GET['id'];
		deleteUser($id);		
		}else if($dir == "deletevolunteer"){
		$id = $_GET['id'];
		deleteVolunteer($id);		
		}else if($dir == "deletenews"){
		$id = $_GET['id'];
		deleteNews($id);		
		}else if($dir == "deletegalimg"){
		$id = $_GET['id'];
		deleteGalimg($id);		
		}else if($dir == "deletepartner"){
		$id = $_GET['id'];
		deletePartner($id);		
		}else if($dir == "deleteinterview"){
		$id = $_GET['id'];
		deleteInterview($id);		
		}
	}

?>
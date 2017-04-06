<?php
	
	session_start();
	
	function confirm_logged_in(){
		
		if(!isset($_SESSION['user_id'])){
		
			redirect_to("../admin_login.php");	
			
		}
		
	}
	
	function logged_out(){
		
		include('connect.php');
		
		$date = date('y/m/d h:i:s', time());
		$updateDate = "UPDATE tbl_user SET user_lastlogin='{$date}' WHERE user_id='{$_SESSION['user_id']}'";
		$updateDb = mysqli_query($link, $updateDate);

		session_destroy();
		redirect_to("../../admin_login.php");
		
	}

?>
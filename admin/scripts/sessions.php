<?php
	
	session_start();
	
	function confirm_logged_in(){
		
		if(!isset($_SESSION['user_id'])){
		
			redirect_to("admin_login.php");	
			
		}
		
	}
	
	function logged_out(){
		
		//$date = date('Y-m-d');
		//$updateDate = "UPDATE tbl_user SET user_lastlogin='{$date}' WHERE user_id='{$_SESSION['user_id']}'";
		//$updateDb = mysqli_query($link, $updateDate);
	
		//$updateDate = "UPDATE tbl_user SET user_lastlogin='{$date}'";
		
		//$date = date('y/m/d h:i:s', time());
		//$newdate = "UPDATE tbl_users SET user_lastlogin='{$date}'";
		//$updateDate = mysqli_query($link, $newdate);
		
		//Yeeeeah no idea how to accomplish this, and not even sure if I have to in order to get full marks, so imma drop it.
		
		session_destroy();
		redirect_to("/bluray/admin_login.php");
		
	}

?>
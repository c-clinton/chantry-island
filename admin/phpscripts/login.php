<?php 

	ini_set('display_errors',1);
    error_reporting(E_ALL);


	function logIn($username, $password, $ip) {
		require("connect.php");

		$username = mysqli_real_escape_string($link, $username); 
		
		$password = mysqli_real_escape_string($link, $password);
		$login = "SELECT * FROM tbl_user WHERE user_name='{$username}' AND user_pass='{$password}'";
	
		$userinfo = mysqli_query($link, $login);
		
		if(mysqli_num_rows($userinfo)) {
			
			$user = mysqli_fetch_array($userinfo, MYSQLI_ASSOC); 
			
			$id = $user['user_id'];
			$_SESSION['user_id'] = $id;
			$_SESSION['user_name'] = $user['user_name'];
			$_SESSION['user_lastlogin'] = $user['user_lastlogin'];
		
			 if(mysqli_query($link, $login)) { 
				
				$updateString = "UPDATE tbl_user SET user_ip='{$ip}', user_attempts = 0 WHERE user_id={$id}";
				
				$updateQuery = mysqli_query($link, $updateString);
				
				redirect_to("admin_index.php");
			}else{
			
			$message = "Username/Password are incorrect. Please check your spelling and capitalization.";
			
			return $message;
			
			$updateAttempts = "UPDATE tbl_user SET user_attempts = +1 WHERE user_id={$id}"; 
			
			$updateDb = mysqli_query($link, $updateAttempts);
			}
		
		mysqli_close($link);
		
	}
	} 
		
?>

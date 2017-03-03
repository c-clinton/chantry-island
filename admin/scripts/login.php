<?php 

	ini_set('display_errors',1);
    error_reporting(E_ALL);


	function logIn($username, $password, $ip) { //start login
		require_once("connect.php");

		$username = mysqli_real_escape_string($link, $username); //protects against injection commands by treating them as strings. Requires a connection to the database through $link to run using mysqli.
		
		$password = mysqli_real_escape_string($link, $password);
		$loginString = "SELECT * FROM tbl_user WHERE user_name='{$username}' AND user_pass='{$password}'";
		
		
		//okay, so first I tried to run a query on the index page itself, but I figured it would be much more expedient to grab the last login's timestamp along with the rest of the user info and reference it on the index page.
			
		//echo $loginString;
		//echo $timestamp; 
		
		$user_set = mysqli_query($link, $loginString);
		if(mysqli_num_rows($user_set)) { //start user set
			$found_user = mysqli_fetch_array($user_set, MYSQLI_ASSOC); 
			$id = $found_user['user_id'];
			$_SESSION['user_id'] = $id;
			$_SESSION['user_name'] = $found_user['user_name'];
			
			$_SESSION['user_lastlogin'] = $found_user['user_lastlogin']; 
			
			//I'm assuming if I wanted to commit the current login time as the last login time in the database, I'd have to insert the date of the last login into the DB using UPDATE. Trick is ensuring it doesn't display the current login date as previous login date when the user logs in -- I was thinking of something like the top post in this thread http://stackoverflow.com/questions/35800310/php-logout-and-update-database but I have no idea how to implement any of it so it's actuall functional. It's a bit outside of my scope of understanding at the moment.
		
			$userinfo = "SELECT * FROM tbl_user WHERE user_id={$id}";
			$data = mysqli_query($link, $userinfo);
			
			if(!is_string($data)) { //start query
    		while ($row = mysqli_fetch_array($data)) { //start row
				
       		 $attempts = $row['user_attempts'];
			 if($attempts>=3){ //start lockout
			
				$lockoutMsg = "You have used up all your login attempts. Please come back later."; 
				return $lockoutMsg;
		/*end lockout*/	}else if(mysqli_query($link, $loginString)) { //start login
				$updateString = "UPDATE tbl_user SET user_ip='{$ip}' WHERE user_name={$username} AND SET user_attempts = 0 WHERE user_name={$username}";
				$updateQuery = mysqli_query($link, $updateString);
				redirect_to("admin_index.php");
			/*end login*/}else{//start error msg
			$message = "Username/Password were incorrect.<br>Please check your spelling and capitalization.";
			return $message;
			$attempts++;
			$updateAttempts = "UPDATE tbl_user SET user_attempts = user_attempts + 1 WHERE user_name={$username}"; //okay, this works in PhPmyAdmin to incrementally increase the value of the row by 1 and I have NO idea why it's refusing to run in the browser. Which sucks, because if it did, this thing would probably be fully functional.
			//Every other query I ran only updated exact integers instead of incrementing each time it was run. I.e, if I put "SET user_attempts = + 1" like I saw all over stackoverflow, it would only change the value once.
			//I have no idea how to get around this, and none of the stuff I googled was very helpful. I'm gonna leave it be for now, since this week is a busy week,
			
			$updateDb = mysqli_query($link, $updateAttempts);
			} //end error msg
	
			}//end row
			}//end query
			
	
			
		
		mysqli_close($link);
		
	}//end user set
	} //end login
		
?>

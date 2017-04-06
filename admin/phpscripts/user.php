<?php

function getUser($id) {


require_once('connect.php');

$userstring = "SELECT * FROM tbl_user WHERE user_id = {$id}";
$userquery = mysqli_query($link, $userstring);

if($userquery) {

	$found_user = mysqli_fetch_array($userquery, MYSQLI_ASSOC);
	return $found_user;


}else{

$message = "There was a problem changing this account. Please contact web admin for help.";

}
}

function createUser($fname, $lname, $username, $email){
	
		include('connect.php');
		$ip=0;		
		$password = bin2hex(openssl_random_pseudo_bytes(16));
		
		mailNewUser($fname, $lname, $username, $email, $password);
		
		$userstring = "INSERT INTO tbl_user VALUES(DEFAULT, '{$fname}', '{$lname}', '{$username}', '{$email}', '{$password}', '{$ip}', DEFAULT, DEFAULT, 0)"; 
		$userquery = mysqli_query($link, $userstring);
		if($userquery) {
		
		redirect_to("../admin_index.php?");	
		}else{
			
			$message = "There was a problem creating up this user...";
			return $message;
			
		}
			 
	mysqli_close($link);
}

function deleteUser($id) {
	
	include('connect.php');
	
	$delstring = "DELETE FROM tbl_user WHERE user_id={$id}";
	$delquery = mysqli_query($link, $delstring);
	
	if($delquery){
	
		redirect_to("../admin_deleteuser.php");	
		
	}else{
		
		$message = "DON'T CRY FOR ME. I'M ALREADY DEAD.";
		
	}
	
	mysqli_close($link);
	
}

function editUser($fname, $lname, $username, $email, $password, $id) {

	include('connect.php');
	$updatestring = "UPDATE tbl_user SET user_fname='{$fname}', user_lname='{$lname}', user_name='{$username}', user_email='{$email}', user_pass='{$password}' WHERE user_id={$id}";
	$updatequery = mysqli_query($link, $updatestring);

	if($updatequery){

		redirect_to("../admin_index.php");


	}else{

		$message = "There was a problem changing your account settings. Please contact your web admin.";
		return $message;

	}

	mysqli_close($link);
}


function mailNewUser($fname, $lname, $username, $email, $password){
	
	
$to = $email;

$subject = "Welcome to the Chantry Island Team!";

$message = "Good day, {$fname} {$lname}! Welcome to the new and improved Chantry Island web site. Your username is {$username}. You can log in to our admin panel at http://www.chantryisland.com/admin_login using the secure password {$password}.";

mail($to,$subject,$message);	
	
	
}

?>
<?php

function sendMail($to, $subject, $name, $email, $phone, $message, $bot) {

	if(!$bot){
		
		$headers = "Message from {$name} at {$email} and {$phone}";
	
		mail($to, $headers, $subject, $message);
		
	}
}

	
	
	function redirect_to($location) {
		if($location != NULL) {
			header("Location:{$location}");
			exit;
		}
	}
	
	function addVolunteer($mimg,$name,$position) {
		
		include('connect.php');
		$mimg = mysqli_real_escape_string($link, $mimg);
		if($_FILES['volunteer_imgpath']['type'] === "image/jpg" || $_FILES['volunteer_imgpath']['type'] === "image/jpeg"){ 
		
		$targetpath = "../images/{$mimg}"; 
		
		if(move_uploaded_file($_FILES['volunteer_imgpath']['tmp_name'],$targetpath)){ 
			
			$newfile = "../images/".$mimg;

			
			if(!copy($newfile)) {
			
			echo "Failed to copy...";	
				
			}
	
			$qstring = "INSERT INTO tbl_volunteer VALUES(NULL, 'images/{$mimg}', '{$name}', '{$position}')"; 
			$result = mysqli_query($link, $qstring);

			if($result==1){

			redirect_to("../admin_index.php");
			}
	
		}
		}
	
	}
	
	
	function addInterview($interviewlink, $interviewname) {
		
		include('connect.php');
		
			$qstring = "INSERT INTO tbl_interviews VALUES(NULL, '{$interviewlink}', '{$interviewname}')";
			$result = mysqli_query($link, $qstring);

			if($result==1){

			redirect_to("../admin_index.php");
		
		
		}
	
	}
	
	function addNews($date, $title, $mimg, $text) {
		
		include('connect.php');
		$mimg = mysqli_real_escape_string($link, $mimg);
		if($_FILES['news_img']['type'] === "image/jpg" || $_FILES['news_img']['type'] === "image/jpeg"){ 
		
		$targetpath = "../images/{$mimg}"; 
		
		if(move_uploaded_file($_FILES['news_img']['tmp_name'],$targetpath)){ 
		
			$newfile = "../images/".$mimg;
			
			
			if(!copy($newfile)) {
			
			echo "Failed to copy...";	
				
			}

			$qstring = "INSERT INTO tbl_news VALUES(NULL, '{$date}', '{$title}', 'images/{$mimg}', '{$text}')"; 
			$result = mysqli_query($link, $qstring);

			if($result==1){

			redirect_to("../admin_index.php");
			}
	
		}
		}
	
	}
	
	function addPartner($mimg, $name, $sitelink, $info) {
		
		include('connect.php');
		$mimg = mysqli_real_escape_string($link, $mimg);
		if($_FILES['affiliate_img']['type'] === "image/jpg" || $_FILES['affiliate_img']['type'] === "image/jpeg"){ 
		
		$targetpath = "../images/{$mimg}"; 
		
		if(move_uploaded_file($_FILES['affiliate_img']['tmp_name'],$targetpath)){
		
			$orig = "../images/".$mimg;
			$th_copy = "../images/".$thumb;
			
			if(!copy($orig, $th_copy)) {
			
			echo "Failed to copy...";	
				
			}

			$qstring = "INSERT INTO tbl_partners VALUES(NULL, '{$mimg}', '{$sitelink}', '{$name}', '{$info}')"; 
			$result = mysqli_query($link, $qstring);

			if($result==1){

			redirect_to("../admin_index.php");
			}
	
		}
		}
	
	}
	
		function addGalimg($mimg, $title, $desc) {
		
		include('connect.php');
		$mimg = mysqli_real_escape_string($link, $mimg);
		
		if($_FILES['galleryimg_path']['type'] === "image/jpg" || $_FILES['galleryimg_path']['type'] === "image/jpeg"){ 
		
		$targetpath = "../gallery/{$mimg}"; 
		
		if(move_uploaded_file($_FILES['galleryimg_path']['tmp_name'],$targetpath)){
		
		
		
			$newfile = "../gallery/".$mimg;
			
			
			if(!copy($newfile)) {
			
			echo "Failed to copy...";	
				
			}
			
				$resetid = "ALTER TABLE tbl_galleryimg AUTO_INCREMENT=1";
				$resetquery_id = mysqli_query($link, $resetid);

			$qstring = "INSERT INTO tbl_galleryimg VALUES(NULL, '{$mimg}', '{$title}', '{$desc}')"; 
			$result = mysqli_query($link, $qstring);

			if($result==1){

			redirect_to("../admin_index.php");
			}
	
		}
		}
	
	}
	
	function updateVolunteers($id, $mimg, $name, $position) {
		
		include('connect.php');
		$mimg = mysqli_real_escape_string($link, $mimg);
		
		if($_FILES['volunteer_imgpath']['type'] === "image/jpg" || $_FILES['volunteer_imgpath']['type'] === "image/jpeg"){ 
		
		$targetpath = "../images/{$mimg}"; 
		
		if(move_uploaded_file($_FILES['volunteer_imgpath']['tmp_name'],$targetpath)){ 
		
			
			$newfile = "../images/".$mimg;
			$newfile = "../images/".$mimg;
			
			
			 $qstring0 = "UPDATE tbl_volunteer SET volunteer_imgpath='images/{$mimg}' WHERE volunteer_id={$id}";  			$result0 = mysqli_query($link, $qstring0);
			if(!copy($newfile, $newfile)) {
			
			echo "Failed to copy...";	
				
			}
		}
		
		}
		
			$qstring = "UPDATE tbl_volunteer SET volunteer_name='{$name}', volunteer_position='{$position}' WHERE volunteer_id={$id}"; 
		$result = mysqli_query($link, $qstring);

			if($result==1){

			redirect_to("admin_editvolunteers.php#{$id}");
		}
		
	
	}
	
	
	function changeLogo($mimg) {
		
		include('connect.php');
		$mimg = mysqli_real_escape_string($link, $mimg);
		
		if($_FILES['logo_path']['type'] === "image/jpg" || $_FILES['logo_path']['type'] === "image/jpeg" || $_FILES['logo_path']['type'] === "image/png"){ 
		
		$targetpath = "../images/{$mimg}"; 
		
		if(move_uploaded_file($_FILES['logo_path']['tmp_name'],$targetpath)){ 
		
				
			$newfile = "../images/".$mimg;
			$qstring = "UPDATE tbl_logo SET logo_path = '{$mimg}' WHERE logo_id=1"; 
			$result = mysqli_query($link, $qstring);

			if($result==1){

			redirect_to("../admin_index.php");
			}
			
			if(!copy($newfile)) {
			
			echo "Failed to copy...";	
				
			}
	
	
		}
		}
	
	}
	
	function addHomeimages($mimg1, $mimg2, $mimg3) {
		
		include('connect.php');
		$mimg1 = mysqli_real_escape_string($link, $mimg1);
		$mimg2 = mysqli_real_escape_string($link, $mimg2);
		$mimg3 = mysqli_real_escape_string($link, $mimg3);
		if($_FILES['home_img1']['type'] === "image/jpg" || $_FILES['home_img1']['type'] === "image/jpeg" || $_FILES['home_img2']['type'] === "image/jpg" || $_FILES['home_img2']['type'] === "image/jpeg" || $_FILES['home_img3']['type'] === "image/jpg" || $_FILES['home_img3']['type'] === "image/jpeg"){ 

		
		$targetpath1 = "../images/{$mimg1}"; 
		$targetpath2 = "../images/{$mimg2}";
		$targetpath3 = "../images/{$mimg3}"; 
		
		if(move_uploaded_file($_FILES['home_img1']['tmp_name'],$targetpath1)){ 
			
			$newfile = "../images/".$mimg1;
		
			
			if(!copy($newfile)) {
			
			echo "Failed to copy...";	
				
			}
			$qstring = "UPDATE tbl_home SET home_img1 = '{$mimg1}' WHERE home_id = 1;"; 
			$result = mysqli_query($link, $qstring);

			if($result==1){

			redirect_to("admin_edithome.php");
			}
		}
			
			if(move_uploaded_file($_FILES['home_img2']['tmp_name'],$targetpath2)){ 
		
			
		
			$newfile = "../images/".$mimg2;
			
			if(!copy($newfile)) {
			
			echo "Failed to copy...";	
				
			}
			$qstring = "UPDATE tbl_home SET home_img2 = '{$mimg2}' WHERE home_id = 1;";
			$result = mysqli_query($link, $qstring);

			if($result==1){

			redirect_to("admin_edithome.php");
			}
			}
			
			if(move_uploaded_file($_FILES['home_img3']['tmp_name'],$targetpath3)){ 
		
			$newfile = "../images/".$mimg3;
			
			
			if(!copy($newfile)) {
			
			echo "Failed to copy...";	
				
			}
			$qstring = "UPDATE tbl_home SET home_img3 = '{$mimg3}' WHERE home_id = 1;";
			$result = mysqli_query($link, $qstring);

			if($result==1){

			redirect_to("admin_edithome.php");
			}
			}

		}

		}
		
		function addAboutimages($mimg4, $mimg5, $mimg6, $mimg7, $mimg8, $mimg9, $mimg10) {
		
		include('connect.php');
		$mimg4 = mysqli_real_escape_string($link, $mimg4);
		$mimg5 = mysqli_real_escape_string($link, $mimg5);
		$mimg6 = mysqli_real_escape_string($link, $mimg6);
		$mimg7 = mysqli_real_escape_string($link, $mimg7);
		$mimg8 = mysqli_real_escape_string($link, $mimg8);
		$mimg9 = mysqli_real_escape_string($link, $mimg9);
		$mimg10 = mysqli_real_escape_string($link, $mimg10);
		if($_FILES['about_img1']['type'] === "image/jpg" || $_FILES['about_img1']['type'] === "image/jpeg" || $_FILES['about_img2']['type'] === "image/jpg" || $_FILES['about_img2']['type'] === "image/jpeg" || $_FILES['about_img3']['type'] === "image/jpg" || $_FILES['about_img3']['type'] === "image/jpeg" || $_FILES['about_img4']['type'] === "image/jpg" || $_FILES['about_img4']['type'] === "image/jpeg" || $_FILES['about_img5']['type'] === "image/jpg" || $_FILES['about_img5']['type'] === "image/jpeg" || $_FILES['about_img_4_mobile']['type'] === "image/jpg" || $_FILES['about_img_4_mobile']['type'] === "image/jpeg" || $_FILES['about_img_5_mobile']['type'] === "image/jpg" || $_FILES['about_img_5_mobile']['type'] === "image/jpeg"){ 
		 
		$targetpath4 = "../images/{$mimg4}"; 
		$targetpath5 = "../images/{$mimg5}";
		$targetpath6 = "../images/{$mimg6}"; 
		$targetpath7 = "../images/{$mimg7}"; 
		$targetpath8 = "../images/{$mimg8}";
		$targetpath9 = "../images/{$mimg9}"; 
		$targetpath10 = "../images/{$mimg10}"; 
		
		if(move_uploaded_file($_FILES['about_img1']['tmp_name'],$targetpath4)){
		
			$newfile = "../images/".$mimg4;
		
			if(!copy($newfile)) {
			
			echo "Failed to copy...";	
				
			}
			$qstring = "UPDATE tbl_about SET about_img1 = '{$mimg4}' WHERE about_id = 1;"; 
			$result = mysqli_query($link, $qstring);

			if($result==1){

			redirect_to("admin_editabout.php");
			}
		}
			
			if(move_uploaded_file($_FILES['about_img2']['tmp_name'],$targetpath5)){
		
			
		
			$newfile = "../images/".$mimg5;
			
			
			if(!copy($newfile)) {
			
			echo "Failed to copy...";	
				
			}
			$qstring = "UPDATE tbl_about SET about_img2 = '{$mimg5}' WHERE about_id = 1;";
			$result = mysqli_query($link, $qstring);

			if($result==1){

			redirect_to("admin_editabout.php");
			}
			}
			
			if(move_uploaded_file($_FILES['about_img3']['tmp_name'],$targetpath6)){ 
		
			$thumb = "TH_".$mimg6;
		
			$newfile = "../images/".$mimg6;
			
			
			if(!copy($newfile)) {
			
			echo "Failed to copy...";	
				
			}
			$qstring = "UPDATE tbl_about SET about_img3 = '{$mimg6}' WHERE about_id = 1;"; 
			$result = mysqli_query($link, $qstring);

			if($result==1){

			redirect_to("admin_editabout.php");
			}
			}
			
			if(move_uploaded_file($_FILES['about_img4']['tmp_name'],$targetpath7)){ 
		
			$thumb = "TH_".$mimg7;
		
			$newfile = "../images/".$mimg7;
			
			
			if(!copy($newfile)) {
			
			echo "Failed to copy...";	
				
			}
			$qstring = "UPDATE tbl_about SET about_img4 = '{$mimg7}' WHERE about_id = 1;";
			$result = mysqli_query($link, $qstring);

			if($result==1){

			redirect_to("admin_editabout.php");
			}
			}
			
			if(move_uploaded_file($_FILES['about_img5']['tmp_name'],$targetpath8)){
		
			$thumb = "TH_".$mimg8;
		
			$newfile = "../images/".$mimg8;
			
			
			if(!copy($newfile)) {
			
			echo "Failed to copy...";	
				
			}
			$qstring = "UPDATE tbl_about SET about_img5 = '{$mimg8}' WHERE about_id = 1;"; 
			$result = mysqli_query($link, $qstring);

			if($result==1){

			redirect_to("admin_editabout.php");
			}
			}
			
			if(move_uploaded_file($_FILES['about_img_4_mobile']['tmp_name'],$targetpath9)){
		
			$thumb = "TH_".$mimg9;
		
			$newfile = "../images/".$mimg9;
			
			
			if(!copy($newfile)) {
			
			echo "Failed to copy...";	
				
			}
			$qstring = "UPDATE tbl_about SET about_img_4_mobile = '{$mimg9}' WHERE about_id = 1;";
			$result = mysqli_query($link, $qstring);

			if($result==1){

			redirect_to("admin_editabout.php");
			}
			}
			
			if(move_uploaded_file($_FILES['about_img_5_mobile']['tmp_name'],$targetpath10)){ 
		
			$thumb = "TH_".$mimg10;
		
			$newfile = "../images/".$mimg10;
			
			
			if(!copy($newfile)) {
			
			echo "Failed to copy...";	
				
			}
			$qstring = "UPDATE tbl_about SET about_img_5_mobile = '{$mimg10}' WHERE about_id = 1;";
			$result = mysqli_query($link, $qstring);

			if($result==1){

			redirect_to("admin_editabout.php");
			}
			}
		}
	

		}
		
		function addToursimages($mimg11, $mimg12, $mimg13, $mimg14) {
		
		include('connect.php');
		$mimg11 = mysqli_real_escape_string($link, $mimg11);
		$mimg12 = mysqli_real_escape_string($link, $mimg12);
		$mimg13 = mysqli_real_escape_string($link, $mimg13);
		$mimg14 = mysqli_real_escape_string($link, $mimg14);
		if($_FILES['tours_img1']['type'] === "image/jpg" || $_FILES['tours_img1']['type'] === "image/jpeg" || $_FILES['tours_img2']['type'] === "image/jpg" || $_FILES['tours_img2']['type'] === "image/jpeg" || $_FILES['tours_img3']['type'] === "image/jpg" || $_FILES['tours_img3']['type'] === "image/jpeg" || $_FILES['tours_img4']['type'] === "image/jpg" || $_FILES['tours_img4']['type'] === "image/jpeg"){ 

		
		$targetpath11 = "../images/{$mimg11}"; 
		$targetpath12 = "../images/{$mimg12}";
		$targetpath13 = "../images/{$mimg13}"; 
		$targetpath14 = "../images/{$mimg14}"; 
		
			
			if(move_uploaded_file($_FILES['tours_img1']['tmp_name'],$targetpath11)){ 
			$thumb = "TH_".$mimg11;
		
			$newfile = "../images/".$mimg11;
			
			
			if(!copy($newfile)) {
			
			echo "Failed to copy...";	
				
			}
			$qstring = "UPDATE tbl_tours SET tours_img1 = '{$mimg11}' WHERE tours_id = 1"; 
			$result = mysqli_query($link, $qstring);

			if($result==1){

			redirect_to("admin_edittours.php");
			}
		}
			
			if(move_uploaded_file($_FILES['tours_img2']['tmp_name'],$targetpath12)){ 
		
			$thumb = "TH_".$mimg12;
		
			$newfile = "../images/".$mimg12;
			
			
			if(!copy($newfile)) {
			
			echo "Failed to copy...";	
				
			}
			$qstring = "UPDATE tbl_tours SET tours_img2 = '{$mimg12}' WHERE tours_id = 1;"; 
			$result = mysqli_query($link, $qstring);

			if($result==1){

			redirect_to("admin_edittours.php");
			}
			}
			
			if(move_uploaded_file($_FILES['tours_img3']['tmp_name'],$targetpath13)){ 
		
			$thumb = "TH_".$mimg13;
		
			$newfile = "../images/".$mimg13;
			
			
			if(!copy($newfile)) {
			
			echo "Failed to copy...";	
				
			}
			$qstring = "UPDATE tbl_tours SET tours_img3 = '{$mimg13}' WHERE tours_id = 1;";
			$result = mysqli_query($link, $qstring);

			if($result==1){

			redirect_to("admin_edittours.php");
			}
			}
			
			if(move_uploaded_file($_FILES['tours_img4']['tmp_name'],$targetpath14)){
		
			$thumb = "TH_".$mimg14;
		
			$newfile = "../images/".$mimg14;
			
			
			if(!copy($newfile)) {
			
			echo "Failed to copy...";	
				
			}
			$qstring = "UPDATE tbl_tours SET tours_img4 = '{$mimg14}' WHERE tours_id = 1";
			$result = mysqli_query($link, $qstring);

			if($result==1){

			redirect_to("admin_edittours.php");
			}
			}
			
		}

		}
	
	function deleteVolunteer($id) {
	
	include('connect.php');
	
	$delvolunteer = "DELETE FROM tbl_volunteer WHERE volunteer_id={$id}";
	$delquery = mysqli_query($link, $delvolunteer);
	
	if($delquery){
	
		redirect_to("../admin_deletevolunteer.php");	
		
	}else{
		
		$message = "DON'T CRY FOR ME. I'M ALREADY DEAD.";
		
	}
	
	mysqli_close($link);
	
}

function deleteInterview($id) {
	
	include('connect.php');
	
	$delvolunteer = "DELETE FROM tbl_interviews WHERE interview_id={$id}";
	$delquery = mysqli_query($link, $delvolunteer);
	
	if($delquery){
	
		redirect_to("../admin_deleteinterview.php");	
		
	}else{
		
		$message = "DON'T CRY FOR ME. I'M ALREADY DEAD.";
		
	}
	
	mysqli_close($link);
	
}

function deleteNews($id) {
	
	include('connect.php');
	
	$delnews = "DELETE FROM tbl_news WHERE news_id={$id}";
	$delquery = mysqli_query($link, $delnews);
	
	if($delquery){
	
		redirect_to("../admin_deletenews.php");	
		
	}else{
		
		$message = "DON'T CRY FOR ME. I'M ALREADY DEAD.";
		
	}
	
	mysqli_close($link);
	
}
function deleteGalimg($id) {
	
	include('connect.php');
	
	$delgalimg = "DELETE FROM tbl_galleryimg WHERE galleryimg_id={$id};";
	$delgalquery = mysqli_query($link, $delgalimg);
	$resetid = "ALTER TABLE tbl_galleryimg AUTO_INCREMENT=1";
	$resetquery_id = mysqli_query($link, $resetid);
	$resettbl = "ALTER TABLE tbl_galleryimg AUTO_INCREMENT={$id}";
	$resetquery_t = mysqli_query($link, $resettbl);
	
	if($resetquery_t){

		redirect_to("../admin_deletegalimg.php#{$id}");	
		
	}else{
		
		$message = "DON'T CRY FOR ME. I'M ALREADY DEAD.";
		
	}
	
	mysqli_close($link);
	
}

function deletePartner($id) {
	
	include('connect.php');
	
	$delpartner = "DELETE FROM tbl_partners WHERE partner_id={$id};";
	$delpartnerquery = mysqli_query($link, $delpartner);
	$resetid = "ALTER TABLE tbl_partners AUTO_INCREMENT=1";
	$resetquery_id = mysqli_query($link, $resetid);
	$resettbl = "ALTER TABLE tbl_partners AUTO_INCREMENT={$id}";
	$resetquery_t = mysqli_query($link, $resettbl);
	
	if($resetquery_t){

		redirect_to("../admin_deleteaffiliate.php");	
		
	}else{
		
		$message = "DON'T CRY FOR ME. I'M ALREADY DEAD.";
		
	}
	
	mysqli_close($link);
	
}


function updategal($id, $title, $desc){
	
	include("connect.php");
	$title = str_replace("'","''", $title);
	$desc = str_replace("'","''", $desc);
	$update= "UPDATE tbl_galleryimg SET galleryimg_title = '{$title}', galleryimg_desc = '{$desc}' WHERE galleryimg_id = {$id}";

    mysqli_query($link, $update);
	
if($update){
	
	header("Location: admin_editgallery.php#{$id}");
	
	}else{
	
	echo "Update failed.";
	
}

mysqli_close($link);

}


function updateHeaders1($id1, $mimg1, $name1) {
		
		include('connect.php');
		$mimg1 = mysqli_real_escape_string($link, $mimg1);
		
		if($_FILES['headerhome_path']['type'] === "image/jpg" || $_FILES['headerhome_path']['type'] === "image/jpeg"){ 
		
		$targetpath = "../images/{$mimg1}"; 
		
		if(move_uploaded_file($_FILES['headerhome_path']['tmp_name'],$targetpath)){ 
		
			$thumb = "TH_".$mimg1;
		
			$newfile = "../images/".$mimg1;
			
					$qstring = "UPDATE tbl_headerhome SET headerhome_path='{$mimg1}', headerhome_name='{$name1}' WHERE headerhome_id={$id1}";
		$result = mysqli_query($link, $qstring);

			if($result==1){

			redirect_to("../index.php");
				
			}
			if(!copy($newfile)) {
			
			echo "Failed to copy...";	
		}
		
		}
		
			
		}
		
	
}

	
	function updateHeader2($id2, $mimg2, $name2) {
		
		include('connect.php');
		$mimg1 = mysqli_real_escape_string($link, $mimg2);
		
		if($_FILES['headerabout_path']['type'] === "image/jpg" || $_FILES['headerabout_path']['type'] === "image/jpeg"){ 
		
		$targetpath = "../images/{$mimg2}"; 
		
		if(move_uploaded_file($_FILES['headerabout_path']['tmp_name'],$targetpath)){ 
		
			$thumb = "TH_".$mimg2;
		
			$newfile = "../images/".$mimg2;
			
				$qstring = "UPDATE tbl_headerabout SET headerabout_path='{$mimg2}', headerabout_name='{$name2}' WHERE headerabout_id={$id2}"; 
		$result = mysqli_query($link, $qstring);

			if($result==1){

			redirect_to("../about.php");	
				
			}
			if(!copy($newfile)) {
			
			echo "Failed to copy...";
		}
		
		}
	
		}
		
	}
	
	function updateHeader3($id3, $mimg3, $name3) {
		
		include('connect.php');
		$mimg1 = mysqli_real_escape_string($link, $mimg3);
		
		if($_FILES['headertours_path']['type'] === "image/jpg" || $_FILES['headertours_path']['type'] === "image/jpeg"){ 
		
		$targetpath = "../images/{$mimg3}"; 
		
		
		if(move_uploaded_file($_FILES['headertours_path']['tmp_name'],$targetpath)){ 
		
			$thumb = "TH_".$mimg3;
		
			$newfile = "../images/".$mimg3;
			
			$qstring = "UPDATE tbl_headertours SET headertours_path='{$mimg3}', headertours_name='{$name3}' WHERE headertours_id={$id3}"; 
		$result = mysqli_query($link, $qstring);

			if($result==1){

			redirect_to("../tours.php");
		}	
			if(!copy($newfile)) {
			
			echo "Failed to copy...";
			}
		}
		
		}

	}
	
	function updateHeader4($id4, $mimg4, $name4) {
		
		include('connect.php');
		$mimg1 = mysqli_real_escape_string($link, $mimg4);
		
		if($_FILES['headergallery_path']['type'] === "image/jpg" || $_FILES['headergallery_path']['type'] === "image/jpeg"){ 
		
		$targetpath = "../images/{$mimg4}"; 
		
		if(move_uploaded_file($_FILES['headergallery_path']['tmp_name'],$targetpath)){ 
			$thumb = "TH_".$mimg4;
		
			$newfile = "../images/".$mimg4;
			
			$qstring = "UPDATE tbl_headergallery SET headergallery_path='{$mimg4}', headergallery_name='{$name4}' WHERE headergallery_id={$id4}"; 
		$result = mysqli_query($link, $qstring);

			if($result==1){

			redirect_to("../gallery.php");
		}	
			if(!copy($newfile)) {
			
			echo "Failed to copy...";
				
			}
		}
		
		}
	
	
	}
	
		function updateHeader5($id5, $mimg5, $name5) {
		
		include('connect.php');
		$mimg1 = mysqli_real_escape_string($link, $mimg5);
		
		if($_FILES['headercontact_path']['type'] === "image/jpg" || $_FILES['headercontact_path']['type'] === "image/jpeg"){ 
		
		$targetpath = "../images/{$mimg5}"; 
		
		if(move_uploaded_file($_FILES['headercontact_path']['tmp_name'],$targetpath)){ 
		
			
		
			$newfile = "../images/".$mimg5;
			
			$qstring = "UPDATE tbl_headercontact SET headercontact_path='{$mimg5}', headercontact_name='{$name5}' WHERE headercontact_id={$id5}"; 
		$result = mysqli_query($link, $qstring);

			if($result==1){

			redirect_to("../contact.php");
		}
			if(!copy($newfile)) {
			
			echo "Failed to copy...";	
				
			}
		}
		
		}
		
	
	}
	
	
	function editVideo($vid) {
	
		
		include('connect.php');
		$vid = mysqli_real_escape_string($link, $vid);
		
		
		if($_FILES['header_video']['type'] === "video/mp4" || $_FILES['header_video']['type'] === "videos/mpeg"){ 
		
		$targetpath = "../videos/{$vid}"; 
		
		if(move_uploaded_file($_FILES['header_video']['tmp_name'],$targetpath)){
			$thumb = "TH_".$vid;
			$newfile = "../videos/".$vid;
			$th_copy = "../videos/".$thumb;
			
			
			if(!copy($newfile)) {
			
			echo "Failed to copy...";	
				
			}
		}
		
		}
		
		$qstring = "UPDATE tbl_video SET video_path='{$vid}' WHERE video_id=1"; 
		$result = mysqli_query($link, $qstring);

			if($result==1){

			redirect_to("../index.php");
		}
		
	
	}
	
	
?>
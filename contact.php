<?php

require_once('admin/phpscripts/init.php');

$tbl = "tbl_donate";
$getDonate = getAll($tbl);

$tbl2 = "tbl_headercontact";
$getHeaders = getAll($tbl2);


if(isset($_POST['submit'])) {
	$to = "chantryisland@bmts.com";	
	$subject = $_POST['subject'];	
	$name = $_POST['name'];	
	$email = $_POST['email'];
	$phone = $_POST['phone'];
	$message = $_POST['message'];
	$bot = $_POST['isbot'];
	$mailTo = sendMail($to, $subject, $name, $email, $phone, $message, $bot);
	$text = $mailTo;
	}

?>

<!doctype html>
<html class="no-js" lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chantry Island Alpha</title>
    <link rel="stylesheet" href="css/foundation.css">
    <link rel="stylesheet" href="css/app.css">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" rel="stylesheet">
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyALNcGXttZj_0EtbTCacAlHKN1L8xdf_Jo"></script>
    
  </head>
  <body>
  
  <div class="wrapper">

                    <?php
					
					require("includes/nav.html");
					
					
					?>
                    
                    <section class="brown changepadding contactheader" id="header">
                    <div class="row">
                    <div class="small-12 medium-10 medium-pull-4 column">
                   <?php include("includes/logo.php");?>
                    </div>
                    
                    <div class="small-12 medium-10 columns">
                     <?php
                    if(!is_string($getHeaders)){
		while($row6 = mysqli_fetch_array($getHeaders)){
                    
                    echo "<section id=\"fetchheader\" class=\"hidden\">";
                    echo "{$row6['headercontact_path']}";
                    echo "</section>";
					echo   "<h1 class=\"bold animopacity bigtitle pull-up\">{$row6['headercontact_name']}</h1>";
					}
	}else{
		echo "<p>{$getHeaders}</p>";
	} ?>

                    </div>
                    </div>
                    </section>
                    
                    <section class="row">
                    <div class="small-12 column">
                    <h1>Directions</h1>
                    </div>
                    
                   <div class="row">
                    <div class="stats show-for-small-only smasll-12 columns"><p>Click the MHS marker to view our full address, or enter your own address for directions.</p></div>
                    </div>
                    
                    <div class="map-wrapper small-12">
                    <div id="mapcon" class="medium-10 medium-push-1 row">
                    <h4 class="geocode-header show-for-medium hide-for-large">Where to Find Us</h4>
                    <div class="preloadcon">
                    <div class="preload-wrapper medium-5 medium-pull-2  columns">
					<i class="fa fa-spinner fa-spin columns"></i><span>Loading map, please wait...</span>
					</div>
                    </div>
                     <div id="map" class="small-12 small-centered medium-5 medium-uncentered medium-pull-2 columns"></div> 
                     
                     <div id="mapcontrols" class="show-for-medium medium-7 medium-push-7">
                    <h4 class="geocode-header show-for-large">Where to Find Us</h4>
                    <input type="text" class="address medium-8">
					<input class="mapbut geocode" id="geocode1" type="submit" value="Set&#13;&#10;Address">
                     <input class="mapbut removeoverlay" type="button" value="Remove&#13;&#10;Overlay">
      <input class="mapbut addoverlay" type="button" value="Add&#13;&#10;Overlay">
      				<div class="stats" id="statslarge">Click the MHS marker to view our full address, or enter your own address for directions.</div>
                    </div>
                    </div>
                    <div id="mapcontrolsmobile" class="small-centered text-center show-for-small-only">
                    <input type="text" class="address small-12">
                    <div class="row">
                    <input class="mapbut geocode" id="geocode2" type="submit" value="Set&#13;&#10;Address">
                     <input class="mapbut removeoverlay" type="button" value="Remove&#13;&#10;Overlay">
      <input class="mapbut addoverlay" type="button" value="Add&#13;&#10;Overlay">
      </div>
                    </div>
                    </div>
                    </section>
                    
                    <section class="row">
                    <div class="small-12 column">
                    <h1>Contact Us</h1>
                    </div>
                    
                    <div class="row">
                    <div class="column">
                    <?php if(!empty($text)){echo $text;} ?>
                    <form class="small-12 medium-7 medium-push-3 column" action="contact.php" method="post">
                      <div class="input-group">
                      <label class="input-group-label" for="to">To:</label>
                   	 <input class="input-group-field" id="to" name="to" type="text" size="30" value="chantryisland@bmts.com" required/>
                     </div>
                   
                   	 <div class="input-group">
                     <label class="input-group-label" for="subject">Subject:</label>
                     <input class="input-group-field" id="subject" name="subject" type="text" value="" size="30"required />
                     </div>
                     
                     <div class="input-group">
                     <label class="input-group-label" for="name">Name:</label>
                     <input class="input-group-field" id="name" name="name" type="text" value="" size="30" required/>
                     </div>
                     
                     <div class="input-group">
                     <label class="input-group-label" for="email">Email:</label>
                     <input class="input-group-field" id="email" name="email" type="email" value="" size="30" required/>
                     </div>
                     
                     <div class="input-group">
                     <label class="input-group-label" for="phone">Phone:</label>
                     <input class="input-group-field" id="phone" name="phone" type="tel" value="" size="30" required/>
                     </div>
                    
                     <div class="input-group">
                     <label class="input-group-label" for="message">Message:</label>
                     <textarea class="input-group-field" id="message" name="message" rows="7" cols="30" required></textarea>
                     </div>
                     
					<input type="text" name="isbot" class="hidden">
                     
                     <input class="submitbut" class="brown" name="submit" type="submit" value="SUBMIT"/>
                       
                    </form>
                    
                   </div>
                    </div>
                    </section>
                    
                       <?php
					
					if(!is_string($getDonate)){
		while($row = mysqli_fetch_array($getDonate)){
			
					echo "<section class=\"centered row\">
                    <div class=\"small-12 column\">
                    <h1 id=\"donate\">{$row['donate_title']}</h1>
                    </div>
                    
                    <div class=\"small-12 medium-10 medium-push-1 column\">
                    <p>{$row['donate_p1']}</p>
                    <p>{$row['donate_p2']}</p>
                    <p class=\"bold\">{$row['donate_p3']}</p>
					<p>{$row['donate_p4']}</p>
                    </div>

                    <div id=\"donorcat\" class=\"small-12 column\">
                    <h2>{$row['donate_sub1']}</h2>
                    </div>
	
					<table class=\"tg\">
  					<tr>
    				<th class=\"tg-7oof\">Level<br></th>
    				<th class=\"tg-yw4 tg-7oof\">Amount<br></th>
  					</tr>
  					<tr>
    				<td class=\"tg-yw4l\">{$row['donate_level_1']}</td>
   					<td class=\"tg-yw4l\">{$row['donate_amount_1']}</td>
 					</tr>
					<tr>
    				<td class=\"tg-yw4l\">{$row['donate_level_2']}</td>
   					<td class=\"tg-yw4l\">{$row['donate_amount_2']}</td>
 					</tr>
					<tr>
    				<td class=\"tg-yw4l\">{$row['donate_level_3']}</td>
   					<td class=\"tg-yw4l\">{$row['donate_amount_3']}</td>
 					</tr>
					<tr>
    				<td class=\"tg-yw4l\">{$row['donate_level_4']}</td>
   					<td class=\"tg-yw4l\">{$row['donate_amount_4']}</td>
 					</tr>
					<tr>
    				<td class=\"tg-yw4l\">{$row['donate_level_5']}</td>
   					<td class=\"tg-yw4l\">{$row['donate_amount_5']}</td>
 					</tr>
					<tr>
    				<td class=\"tg-yw4l\">{$row['donate_level_6']}</td>
   					<td class=\"tg-yw4l\">{$row['donate_amount_6']}</td>
 					</tr>
					</table>
                    
                    </section>";
			
			}
					}else{
					echo "<p>{$getDonate}</p>";
					}
					?>

                      <?php
					
					include("includes/lowerban.html");
					
					
					?>

                   
                    
                    
                       <?php
					
					require("includes/footer.html");
					
					
					?>
                    
					</div>
  

    <script src="js/vendor/jquery.js"></script>
    <script src="js/vendor/what-input.js"></script>
    <script src="js/vendor/foundation.js"></script>
    <script src="js/app.js"></script>
    <script src="js/TweenMax.min.js"></script>
    <script src="js/ScrollToPlugin.min.js"></script>
    <script src="js/map.js"></script>
  </body>
</html>

<?php

require_once('admin/phpscripts/init.php');

$tbl = "tbl_home";
$getHome = getAll($tbl);

	$tbl1 = "tbl_headerhome";
	$getHeaders = getAll($tbl1);
	
$tbl2 = "tbl_video";
$getVids = getAll($tbl2);

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
  </head>
  <body>
  
  <div class="wrapper">

					<?php
					
					require("includes/nav.html");
					
					
					?>
                    
                    <div id="videocon" class="row">
                    <video id="video" class="show-for-medium small-12 columns" autoplay>
                    </video>
                     <p class="text-center"><a id="skip" href="#">Skip</a></p>
                    </div>
                    
                    <div class="hidden" id="vidphp">
                    <?php 
					if(!is_string($getVids)){
					while($row3 = mysqli_fetch_array($getVids)){
					echo "<source src=\"videos/{$row3['video_path']}\" type=\"video/mp4\">Your browser does not support HTML5 video. Please consider updating.";
					}
					} 
					else {
						echo "<p>{$getVids}</p>";
					}
				 	?>
                    </div>
                    
                      
                    <section class="brown mainheader" id="header">
                    <div class="row">
                    <div class="small-12 column">

                   <?php include("includes/logo.php");?>
                    </div>
                    
                   <?php
                    if(!is_string($getHeaders)){
		while($row6 = mysqli_fetch_array($getHeaders)){
                    
                    echo "<section id=\"fetchheader\" class=\"hidden\">";
                    echo "{$row6['headerhome_path']}";
                    echo " </section>";
				   echo "<h1 class=\"bold animopacity bigtitle\">{$row6['headerhome_name']}</h1>";
				   }
				}else{
		echo "<p>{$getHeaders}</p>";
					} ?>

                    
                    </div>
                    </section>
                    
                    <h1 class="hidden">Welcome</h1>
                                       
                    <p class="centered dingbat">5</p>

                    
                     <?php
					
					if(!is_string($getHome)){
		while($row = mysqli_fetch_array($getHome)){
                   
			 		echo "<section class=\"row\">
					 <h1>{$row['home_title']}</h1>
			 		<div class=\"small-12 medium-5 medium-push-1 column\">
                    <img src=\"images/{$row['home_img1']}\" alt=\"{$row['home_title1']}\">
                    </div>";
					
			echo "
			
					<div class=\"small-12 medium-5 medium-pull-1 column\">
                    <p>{$row['home_intro']}</p>
                    </div>
                    
                    </section>
			
			";
			
			echo   "<section class=\"row\">
                    
                    <div class=\"small-12 medium-8 medium-centered column\">
                    <h1>{$row['home_title1']}</h1>
                    </div>
                    
                    <div class=\"small-12 medium-2 medium-push-8 small-push-3 column\">
                    <img src=\"images/{$row['home_img2']}\" alt=\"Marine Heritage Society Logo\">
                    </div>
                    
                    <div class=\"small-12 medium-7 medium-pull-4 column\">
                    <p>{$row['home_p1']}</p>
                    </div>
                    
                    </section>";
					
					
			 echo "<section class=\"row\">
                    
                    <div class=\"small-12 medium-8 medium-centered column\">
                    <h1>{$row['home_title2']}</h1>
                    </div>
                    
                    <div class=\"small-12 medium-10 medium-pull-1 column\">
                    <img src=\"images/{$row['home_img3']}\" alt=\"An aerial view of the island\">
                    <p>{$row['home_p2']}</p>
 
<p>{$row['home_p3']}</p>
                    <h2 class=\"text-center\">Book a Tour</h2>
                    <p>{$row['home_p4']}</p>
 
<p>{$row['home_p5']}</p>
                    </div>
                    </section>";
			
			}
	}else{
		echo "<p>{$getHome}</p>";
	}
			?>
                    
                    <section class="brown" id="promo">
                    <div class="small-12 medium-8 medium-push-2">
                   <h1 id="promotitle"><span class="dingbat small show-for-medium">1</span>Pre-book Now<span class="dingbat small show-for-medium">2</span></h1>
                   <p class="bold centered">Call: <a href="#" class="white">519-797-5862</a></p>
					<p class="bold centered">Toll Free: <a href="#" class="white">1-866-797-5862</a></p>
                    </div>
                    </section>
                    
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
    <script src="js/video.js"></script>
  </body>
</html>

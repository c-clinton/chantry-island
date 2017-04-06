<?php

require_once("admin/phpscripts/init.php");
	$tbl = "tbl_galleryimg";
	$col = "galleryimg_id";
	$id=1;
	$getSingle = getSingle($tbl, $col, $id);
	
	if(isset($_GET['filter'])){
	$filter = $_GET['filter'];
	echo "SELECT * FROM {$tbl} WHERE {$tbl}.{$col}='{$filter}'";
	}else{
		$getthumbs = getAll($tbl);
	}
	
	$tbl1 = "tbl_headergallery";
	$getHeaders = getAll($tbl1);

    
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
    <link rel="stylesheet" href="css/jquery.mThumbnailScroller.css">
  </head>
  <body>
  
  <div class="wrapper">
  
                     <div id="overlaybig" class="hidden show-for-medium">
                    <div id="overlayinner">
                    <p class="text-right" id="close"><a href="#">X</a></p>
                    <img src="gallery/chantryisland1.jpg" class="galimg medium-10 medium-push-1" alt="gallery image">
                    </div>
                    </div>

					
                   <?php
					
					require("includes/nav.html");
					
					
					?>
                  
                    <!-- /Navigation -->
                    
                <section class="brown changepadding galleryheader" id="header">
                    <div class="row">
                    <div class="small-12 medium-10 medium-pull-4 column">
                    <?php include("includes/logo.php");?>
                    </div>
                    
                   
                    
                    <div class="small-12 medium-10 columns">
                   
					
					 <?php
                    if(!is_string($getHeaders)){
		while($row3 = mysqli_fetch_array($getHeaders)){
                    
                    echo "<section id=\"fetchheader\" class=\"hidden\">";
                    echo "{$row3['headergallery_path']}";
                    echo " </section>";
					
                    echo "<h1 class=\"bold animopacity bigtitle pull-up\">{$row3['headergallery_name']}</h1>
                    </div>
                    </div>
                    </section>";
					}
				}else{
		echo "<p>{$getHeaders}</p>";
	} ?>

                    <section class="nosideborder row">
                    <h1 class="hidden">Gallery</h1>
                    <div class="row">
                    <div class="small-12 column">
                     <p class="centered dingbat">5</p>
                    </div>
                    </div>
                     <?php
                    if(!is_string($getSingle)){
					$row2 = mysqli_fetch_array($getSingle);
                    echo "<h3 class=\"imagetitle text-center\">{$row2['galleryimg_title']}</h3>
                    <div id=\"galbg\">
                    <div id=\"overlaycon\">
                    <div id=\"galoverlay\" class=\"show-for-medium\">
                    <a href=\"#\" class=\"text-right show-for-medium\" id=\"zoombut\"><img src=\"images/zoom.svg\" alt=\"zoom in\"></a><p class=\"centered imagedesc\">{$row2['galleryimg_desc']}</p>
                    </div>
                    </div>
                    <a href=\"#\"><img src=\"gallery/{$row2['galleryimg_path']}\" class=\"galimg medium-10 medium-push-1\" alt=\"gallery image\"></a>
                    </div>
                    
                    <div class=\"centered show-for-small-only small-12 columns\">
                    <p class=\"imagedesc\">{$row2['galleryimg_desc']}</p>
                    </div>";
					
			}else{
				echo "<p>{$getdefaults}</p>";
			} ?>
                    
                    <div id="nosideborder" class="centered small-12 column">
    
				<div class='small-12 columns'>
				<ul id="thumbnails-list">
                  <?php
				if(!is_string($getthumbs)) {
				while($row = mysqli_fetch_array($getthumbs)) {
				echo "<li><img src=\"gallery/{$row['galleryimg_path']}\" class=\"small-3 thumbnail columns\" id=\"{$row['galleryimg_id']}\" alt=\"{$row['galleryimg_title']}\"></li>";
				}
			}else{
				echo "<p>{$getthumbs}</p>";
			} ?>
		
				</ul>
				</div>	
			
		
        
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
    <script src="js/ScrollToPlugin.min.js"></script>
     <script src="js/ajaxgallery.js"></script>
     <script src="js/jquery.mThumbnailScroller.js"></script>
  </body>
</html>


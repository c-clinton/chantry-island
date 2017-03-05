<?php

require_once("admin/scripts/init.php");
	$tbl = "tbl_galleryimg";
	if(isset($_GET['filter'])){
	$filter = $_GET['filter'];
	$col = "galleryimg_path";
	
	echo "SELECT * FROM {$tbl} WHERE {$tbl}.{$col}='{$filter}'";
	}else{
		$getthumbs = getAll($tbl);
	}
    
 ?>


<!doctype html>
<html class="no-js" lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chantry Island Early Build</title>
    <link rel="stylesheet" href="css/foundation.css">
    <link rel="stylesheet" href="css/app.css">
  </head>
  <body>			
  					
                    
                    
                     <div id="overlaybig" class="hidden show-for-medium">
                    <div id="overlayinner">
                    <p class="text-right" id="close"><a href="#">X</a></p>
                    <img src="gallery/chantryisland1.jpg" class="galimg medium-10 medium-push-1" alt="gallery image">
                    </div>
                    </div>

					
                    <div data-hide-for="medium" data-responsive-toggle="mainMenu" class="title-bar">
                        <button data-toggle="" type="button" class="menu-icon float-right"></button>

                    </div>
                    
                    <div class="small-12 wrapper">
					
                    
                    <nav class="top-bar" id="mainMenu">
                      <div class="top-bar brown">
                      <h1 class="hidden">Main Navigation</h1>
                        <ul class="menu topmenu medium-11 medium-push-1 large-12 large-push-1 row" data-responsive-menu="accordion">
                         <li class="bold"><a href="index.html" class="but">HOME</a></li>
                          <li class="bold"><a href="about.html" class="but">ABOUT</a></li>
                          <li class="bold"><a href="tours.html" class="but">TOURS</a></li>
                           <li class="bold"><a href="gallery.html" class="but">GALLERY</a></li>
                           <li class="bold"><a href="contact.html" class="but">CONTACT</a></li>
                           <li class="facebook"><a href="#" class="narrowmargin"><img src="images/facebook.png" alt="facebook"></a></li>
                           <li id="youtube"><a href="#" class="narrowmargin"><img src="images/youtube.png" alt="youtube"></a></li>
                           <li id="adminlink"><a href="#" class="narrowmargin">Admin Sign In</a></li>
                        </ul>
                        
                     
                        
                      </div>
                    </nav>
                  
                    <!-- /Navigation -->
                    
                <section class="brown changepadding galleryheader" id="header">
                    <div class="row">
                    <div class="small-12 small-push-1 medium-10 medium-push-0 column">
                    <img id="logo" class="animopacity" src="images/mhs-logo.png" alt="Marine Heritage Society logo">
                    </div>
                    
                    <div class="small-12 medium-10 columns">
                    <h1 class="bold animopacity bigtitle pull-up">PHOTO GALLERY</h1>
                    </div>
                    </div>
                    </section>

                    <section class="nosideborder row">
                    <h1 class="hidden">Gallery</h1>
                    <div class="row">
                    <div class="small-12 column">
                     <p class="centered dingbat">5</p>
                    </div>
                    </div>
                    <h3 class="imagetitle">Image Title</h3>
                    <div id="galbg">
                    <div id="overlaycon">
                    <div id="galoverlay" class="show-for-medium">
                    <a href="#" class="text-right show-for-medium" id="zoombut"><img src="images/zoom.svg" alt="zoom in"></a><p class="centered imagedesc">Image desc goes here</p>
                    </div>
                    </div>
                    <a href="#"><img src="gallery/chantryisland1.jpg" class="galimg medium-10 medium-push-1" alt="gallery image"></a>
                    </div>
                    
                    <div class="centered show-for-small-only small-12 columns">
                    <p class="imagedesc">Image desc goes here.</p>
                    </div>
                    
                    <div id="nosideborder" class="centered small-12 column">
                    
                    <!--<img src="images/arrowleft.png" class="thumbnail arrow show-for-medium medium-1 column" alt="left arrow">
                  
                    <img src="images/arrowright.png" class="thumbnail arrow show-for-medium medium-1 column" alt="right arrow">-->
                       <?php
			if(!is_string($getthumbs)) {
				//echo "Object";
			while($row = mysqli_fetch_array($getthumbs)) {
				echo "<div class='small-12'>";
				echo "<img src=\"gallery/{$row['galleryimg_path']}\" class=\"small-3 thumbnail columns\" id=\"{$row['galleryimg_id']}\" alt={$row['galleryimg_title']}";
				echo "</div>";	
			}
			}else{
				//echo "String";
				echo "<p>{$getthumbs}</p>";
			}
		
		?>
        
                    </div>
                    
                    </section>

                 	<div class="border">
                    <section class="nosideborder row">
                    <h1 class="hidden">Contact Us</h1>
                    <div class="small-6 medium-3 medium-push-3 column">
                    <p class="bold">Marine Heritage Society</p> <p>86 Saugeen Street</p>
					<p>Southampton,</p> 
                    <p>Ontario Canada, N0H 2L0</p>
                    </div>
                    
                    <div class="small-6 medium-push-1 column">
                    <p class="bold">Call: <a href="#">519-797-5862</a></p>
					<p class="bold">Toll Free: <a href="#">1-866-797-5862</a></p>
					<p class="bold">Email:</p> <p><a class="bold" href="contact.html">Contact Us</a></p>
                    </div>
                    </section>
                    </div>

                    <footer class="brown">
                    
                    
                     <nav class="row" id="footerMenu">
                       
                       	<ul class="menu medium-push-2" data-responsive-menu="accordion">
                          <li class="bold"><a href="index.html" class="but">HOME</a></li>
                          <li class="bold"><a href="about.html" class="but">ABOUT</a></li>
                          <li class="bold"><a href="tours.html" class="but">TOURS</a></li>
                           <li class="bold"><a href="gallery.html" class="but">GALLERY</a></li>
                           <li class="bold"><a href="contact.html" class="but">CONTACT</a></li>
                           <li class="facebook"><a href="#"><img src="images/facebook.png" alt="facebook"></a></li>
                           <li><a href="#"><img src="images/youtube.png" alt="youtube"></a></li>
                        </ul>
                       </nav>
                    
                    <div data-hide-for="medium" data-responsive-toggle="footerMenu" class="title-bar">
                        <button data-toggle="" type="button" id="footericon" class="menu-icon small-push-6"></button>

                    </div>

						<div class="text-center black">

                            <p class="copyright">Copyright &copy; Marine Heritage Society 2017</p>

                	    </div>
                      



                    </footer>
					</div>




    <script src="js/vendor/jquery.js"></script>
    <script src="js/vendor/what-input.js"></script>
    <script src="js/vendor/foundation.js"></script>
    <script src="js/app.js"></script>
    <script src="js/TweenMax.min.js"></script>
    <script src="js/ScrollToPlugin.min.js"></script>
     <script src="js/ajaxgallery.js"></script>
  </body>
</html>


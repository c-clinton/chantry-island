<?php

require_once('admin/phpscripts/init.php');

$tbl = "tbl_about";
$getAbout = getAll($tbl);


$tbl2 = "tbl_volunteer";
$getVolunteers = getAll($tbl2);

$tbl3 = "tbl_news";
$getNews = getAll($tbl3);

$tbl5 = "tbl_interviews";
$getLinks = getAll($tbl5);

$tbl6 = "tbl_headerabout";
$getHeaders = getAll($tbl6);

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
                    
                    <section class="brown changepadding" id="header">
                    <div class="row">
                    <div class="small-12 medium-10 medium-pull-4 column">
                    <?php include("includes/logo.php");?>
                    </div>
                    
                    <div class="small-12 medium-10 columns">
                    
                         
                    <?php
                    if(!is_string($getHeaders)){
		while($row6 = mysqli_fetch_array($getHeaders)){
                    
                    echo "<section id=\"fetchheader\" class=\"hidden\">";
                    echo "{$row6['headerabout_path']}";
                    echo " </section>";
					
					
                   echo  "<h1 class=\"bold animopacity bigtitle pull-up\">{$row6['headerabout_name']}</h1>
                    </div>
                    </div>
                    </section>";
               
					}
			}else{
			echo "<p>{$getHeaders}</p>";
					} ?>
                    
                   <section class="row">
                    <div class="small-12 column">
                    <h1>News and Events</h1>
                 	</div>
                    
                    <div class="small-12  medium-10 column">
                    
                    
                    
                    <div class="column">
                    
                    <?php
                    
                    if(!is_string($getNews)){
		while($row3 = mysqli_fetch_array($getNews)){
			
					echo "<div class=\"row\">
					<div class=\"small-12 medium-2 column\">
                    <p class=\"text-center\"><a href=\"#\"><img src=\"{$row3['news_img']}\" alt=\"{$row3['news_title']}\"></a></p>
                    </div>
                  
                    
                   <div class=\"small-12 medium-10 column\">
                    <p>{$row3['news_date']}</p>
                    <h2>{$row3['news_title']}</h2>
                    <p>{$row3['news_text']}</p>
                    </div>
                    
                    </div>";
                    
			
			
			}
	}else{
		echo "<p>{$getNews}</p>";
	}
	
	?>
			
			
                                     
                 	</div>
                    </div>
                    
                    </section>
                    
                    <?php
					if(!is_string($getAbout)){
		while($row = mysqli_fetch_array($getAbout)){
			echo "<section class=\"row\">
                    
                    <div class=\"large-12 large-push-0 column\">
                    
                    <div class=\"row\">
                    <div class=\"small-12 large-push-3 large-5 column\">
                    <h1>{$row['about_title']}</h1>
                 	</div>
                    </div>
                   	
                    <div class=\"row\">
                    <div class=\"small-12 medium-6 medium-push-5 column\">
                    <img src=\"images/{$row['about_img1']}\" alt=\"{$row['about_title']}\">
                    </div>
                    
                    <div class=\"small-12 medium-4 medium-pull-5 column\">
                    <p>{$row['about_p1']}</p>
					</div> 
                    <div class=\"small-12 medium-10 medium-pull-1 column\">
                    <p>{$row['about_p2']}</p>
					</div>
                    </div>
                    
                    <div class=\"row\">
                    <div class=\"small-12 medium-10 medium-push-1 column\">
					<p>{$row['about_p3']}</p>
                    <img src=\"images/{$row['about_img2']}\" alt=\"{$row['about_title']}\" class=\"show-for-medium\">
                    <p>{$row['about_p4']}</p>
                    <p>{$row['about_p5']}</p>
                 	</div>
                    </div>
                    </div>
                    </section>";
					
					echo " <section class=\"row\">
                    <div class=\"large-12 large-push-0 column\">
                    <div class=\"small-12 column\">
                    <h1>{$row['about_title2']}</h1>
                 	</div>
                    
                    <div class=\"small-12 column\">
                    <div class=\"row\">
                    <img class=\"small-12 medium-4 medium-push-1 column\" src=\"images/{$row['about_img3']}\" alt=\"{$row['about_title2']}\">
                    <p class=\"small-12 medium-6 medium-push-1 column\">{$row['about_p6']}</p> 
                    
                    <p class=\"small-12 medium-10 medium-push-1 large-6 column\">{$row['about_p7']}</p> 
					<p class=\"small-12 medium-10 medium-push-1 column\">{$row['about_p8']}</p>
					<p class=\"small-12 medium-10 medium-pull-1 column\">{$row['about_p9']}</p>
                    </div>
                    </div>
					</div>
                 	</section>";
					
					echo "  <section class=\"row\">
                    <div class=\"medium-10 medium-push-1 large-12 large-push-0 column\">
                    <div class=\"small-12 column\">
                    <h1>{$row['about_title3']}</h1>
                 	</div>

                    <div class=\"small-12 large-10 large-pull-1 column\">
                    <p>{$row['about_p10']}</p>
                    <h2 class=\"centered\">{$row['about_sub1']}</h2>
                    <img class=\"show-for-small-only small-6 small-push-3\" src=\"images/{$row['about_img_4_mobile']}\" alt=\"{$row['about_sub1']}\">
                    <img class=\"show-for-medium\" src=\"images/{$row['about_img4']}\" alt=\"{$row['about_sub1']}\">
                    <p>{$row['about_p11']}</p>
                    <h2 class=\"centered\">{$row['about_sub2']}</h2>
                    
                    <div class=\"row\">
                    <img class=\"show-for-medium medium-6 column\" src=\"images/{$row['about_img5']}\" alt=\"{$row['about_sub2']}\">
                    <div class=\"small-12 medium-6 column\">
                    <p>{$row['about_p12']}</p>
					</div>
                    <img src=\"images/{$row['about_img_5_mobile']}\" class=\"small-12 show-for-small-only column\" alt=\"CHANGE ME\">
                    <div class=\"small-12 large-6 column\">
                    <p>{$row['about_p13']}</p>
					<p>{$row['about_p14']}</p>
					</div>
					</div>
					</div>
                 	</div>
                    </section>";
			
			
			}
	}else{
		echo "<p>{$getAbout}</p>";
	}
			?>

                    <section class="row">
                    <div class="medium-10 medium-push-1 column">
                    <div class="small-12 column">
                    <h1>MHS Volunteers</h1>
                 	</div>
                    
                     
            	 <div class="small-12 column">
                    <p>The Marine Heritage Society is a not-for-profit group of volunteers dedicated to the preservation and enhancement of our community's marine history. Since so many people volunteer their time and energy to help our organization function, this section is dedicated to our wonderful volunteers. Thank you all very much, this would not be possible without your time and donations. </p>
                 	</div>
					
					<?php
					
					if(!is_string($getVolunteers)){
		while($row2 = mysqli_fetch_array($getVolunteers)){
			
			echo "<div class=\"row\">";	
			foreach ($getVolunteers as $row2) {
			$i=0;
			$i++;
			echo "<div class=\"small-6 large-4 column\">";	
			echo "<img src=\"{$row2['volunteer_imgpath']}\" alt=\"{$row2['volunteer_name']}\">";
			echo "<p class=\"bold\">{$row2['volunteer_name']}</p>";
		echo "<p>{$row2['volunteer_position']}</p>";
			if($i % 3 == 0) {echo "</div></div><div class=\"row\">";}	
			else {
			echo "</div>";
			}	
			}
			echo '</div>';
			}}
					?>
                    
                     <section class="row">
                    <div class="medium-10 medium-push-1 column">
                    <div class="small-12 column">
                    <h1>Volunteer Interviews</h1>
                 	</div>
                    
                    <div class="medium-10 medium-pull-1  column">
                    
                    <div class="row">
                    
                     <?php
                    if(!is_string($getLinks)){
		while($row5 = mysqli_fetch_array($getLinks)){
                    
                    echo "<div class=\"flex-video small-12 column\">";
                    echo "{$row5['interview_embed_link']}";
                    echo "</div>";
					}
	}else{
		echo "<p>{$getLinks}</p>";
	} ?>
              
                    
                    </div>
                    
                    </div>
                    </section>
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
  </body>
</html>

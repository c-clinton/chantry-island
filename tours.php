<?php

require_once('admin/phpscripts/init.php');

$tbl = "tbl_tours";
$getTours = getAll($tbl);

$tbl2 = "tbl_partners";
$getPartners = getAll($tbl2);

$tbl3 = "tbl_headertours";
$getHeaders = getAll($tbl3);

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
  
 
                    <!-- Navigation -->
                    
                    <?php
					
					require("includes/nav.html");
					
					
					?>
                    
                    
                    <!--------------->
                    
                    <section class="brown changepadding tourheader" id="header">
                    <div class="row">
                    <div class="small-12 medium-10 medium-pull-4 column">
                   <?php include("includes/logo.php");?>
                    </div>
                    
                    <div class="small-12 medium-10 columns">
                    
                          <?php
                    if(!is_string($getHeaders)){
		while($row = mysqli_fetch_array($getHeaders)){
                    
                    echo "<section id=\"fetchheader\" class=\"hidden\">";
                    echo "{$row['headertours_path']}";
                    echo " </section>";
					echo "<h1 class=\"bold animopacity bigtitle pull-up\">{$row['headertours_name']}</h1>";
					}
				}else{
				echo "<p>{$getHeaders}</p>";
					} ?>
  
                    </div>
                    </div>
                    </section>
                    

                    <section class="row">
                    
                     <div class="medium-10 medium-push-1 column">
                    
                    <div class="row">
                    <div class="small-12 column">
                    <h1>Schedule</h1>
                    </div>
                    </div>
                    
                    <div class="row">
                    <div class="small-3 columns">
                    <a href="#" id="callink1" class="1">Back</a>
                    </div>
                    <div class="small-5 medium-6 text-center columns"><h3 class="month">May</h3></div>
                    <div class="small-4 medium-3 medium-push-2  columns"><a href="#" id="callink2" class="2">Forward</a></div>
                    </div>

                    <div class="small-12 column">
                    <p class="text-center">Tours leave at: <span class="tours">1:00PM and 3:00PM</span></p>
                    <table class="tg calendar">
  <tr>
     <th class="tg-yw4l show-for-medium">Sunday</th>
    <th class="tg-yw4l show-for-medium">Monday</th>
    <th class="tg-yw4l show-for-medium">Tuesday</th>
    <th class="tg-yw4l show-for-medium">Wednesday</th>
    <th class="tg-yw4l show-for-medium">Thursday</th>
    <th class="tg-yw4l show-for-medium">Friday</th>
    <th class="tg-yw4l show-for-medium">Saturday</th>
    <th class="tg-yw4l show-for-small-only">S</th>
    <th class="tg-yw4l show-for-small-only">M</th>
    <th class="tg-yw4l show-for-small-only">T</th>
    <th class="tg-yw4l show-for-small-only">W</th>
    <th class="tg-yw4l show-for-small-only">T</th>
    <th class="tg-yw4l show-for-small-only">F</th>
    <th class="tg-yw4l show-for-small-only">S</th>
  </tr>
  <tr>
    <td class="tg-yw4l"></td>
    <td class="tg-yw4l">1</td>
    <td class="tg-yw4l">2</td>
    <td class="tg-yw4l">3</td>
    <td class="tg-yw4l">4</td>
    <td class="tg-yw4l">5</td>
    <td class="tg-yw4l">6</td>
  </tr>
  <tr>
    <td class="tg-yw4l">7</td>
    <td class="tg-yw4l">8</td>
    <td class="tg-yw4l">9</td>
    <td class="tg-yw4l">10</td>
    <td class="tg-yw4l">11</td>
    <td class="tg-yw4l">12</td>
    <td class="tg-yw4l">13</td>
  </tr>
  <tr>
    <td class="tg-yw4l">14</td>
    <td class="tg-yw4l">15</td>
    <td class="tg-yw4l">16</td>
    <td class="tg-yw4l">17</td>
    <td class="tg-yw4l">18</td>
    <td class="tg-yw4l">19</td>
    <td class="tg-yw4l">20</td>
  </tr>
  <tr>
    <td class="tg-yw4l">21</td>
    <td class="tg-yw4l">22</td>
    <td class="tg-yw4l">23</td>
    <td class="tg-yw4l">24</td>
    <td class="tg-yw4l">25</td>
    <td class="tg-yw4l">26</td>
    <td class="tg-yw4l">27</td>
  </tr>
  <tr>
    <td class="tg-yw4l">28</td>
    <td class="tg-yw4l">29</td>
    <td class="tg-yw4l">30</td>
    <td class="tg-yw4l">31</td>
    <td class="tg-yw4l"></td>
    <td class="tg-yw4l"></td>
    <td class="tg-yw4l"></td>
  </tr>
    <tr>
    <td class="tg-yw4l"></td>
    <td class="tg-yw4l"></td>
    <td class="tg-yw4l"></td>
    <td class="tg-yw4l"></td>
    <td class="tg-yw4l"></td>
    <td class="tg-yw4l"></td>
    <td class="tg-yw4l"></td>
  </tr>
</table>
                    </div>
                    
                     <?php
					
					if(!is_string($getTours)){
		while($row = mysqli_fetch_array($getTours)){
                    
                    echo "<div class=\"small-12 column\">
                     <p>{$row['tours_p1']}</p>
 
					<p>{$row['tours_p2']}</p>
                    </div>
                    
                    </div>
                    </section>";

					echo "<section class=\"row\">
                    
                     <div class=\"medium-10 medium-push-1 column\">
                    
                    <div class=\"row\">
                    <div class=\"small-12 column\">
                    <h1>{$row['tours_title1']}</h1>
                    </div>
                    </div>
                    
                    <div class=\"small-12 column\">
                    <p>{$row['tours_p3']}</p>
                    <div class=\"row\">
                    <div class=\"small-12 medium-9 medium-push-3 column\">
					<img id=\"mastercard\" class=\"small-4 medium-3 column\" src=\"images/{$row['tours_img1']}\" alt=
					\"mastercard\"><img id=\"visa\" class=\"small-4 medium-3 column\" src=\"images/{$row['tours_img2']}\" alt=\"visa\"><img id=\"debit\" class=\"small-4 medium-3 medium-pull-2 column\" src=\"images/{$row['tours_img3']}\" alt=\"debit\">
                    </div>
                    </div>
                    </div>
                    
                    </div>
                    </section>";
					
					echo "<section class=\"row\">
                    
                    <div class=\"medium-10 medium-push-1 column\">
                    
                    <div class=\"row\">
                    <div class=\"small-12 column\">
                    <h1>{$row['tours_title2']}</h1>
                    </div>
                    </div>
                    
                    <div class=\"small-12 medium-6 column\">
                    <p>{$row['tours_p4']}</p>
                    </div>
                    <img class=\"small-12 medium-5 large-6 column\" src=\"images/{$row['tours_img4']}\" alt=\"tourboat\">
                    <div class=\"largefix medium-10 large-6 column\">
					<p>{$row['tours_p5']}</p>
                    <p>{$row['tours_p6']}</p>
                    </div>
                    <div class=\"small-12 column\">
                    <p>T{$row['tours_p7']}</p>
                    </div>
                    
                    </div>
                    </section>";
			
					}
					}else{
					echo "<p>{$getTours}</p>";
					}
					?>
                    
                 <section class="centered row">
                    
                    <div class="row">
                    <div class="small-12 column">
                    <h1>In &amp; Around Chantry Island</h1>
                    </div>
                    </div>
                    
                                        <?php
					
					if(!is_string($getPartners)){
		while($row2 = mysqli_fetch_array($getPartners)){
			
					echo "<div class=\"row\">";
                    echo "<div class=\"small-10 small-centered medium-push-1 column\">";
                    echo "<a href=\"{$row2['partner_link']}\"><img class=\"small-6 small-centered medium-uncentered medium-2 column\" src=\"images/{$row2['partner_img']}\" alt=\"Saugeen Shores\"></a>";
                    echo "<div class=\"medium-7 medium-pull-3 column\">";
					echo "<p class=\"bold\">{$row2['partner_name']}</p>";
                    echo "<p>{$row2['partner_info']}</p>";
                    echo "</div>";
                    echo "</div>";
                    echo "</div>";
			
			}
					}else{
					echo "<p>{$getPartners}</p>";
					}
					?>  
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
    <script src="js/calendar.js"></script>
    <script src="js/calendardates.js"></script>
  </body>
</html>

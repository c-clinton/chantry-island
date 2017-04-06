 <?php
 $tbllogo = "tbl_logo";
$getLogo = getAll($tbllogo);
                    if(!is_string($getLogo)){
		while($row4 = mysqli_fetch_array($getLogo)){
                    echo "<p class=\"text-center\"><img id=\"logo\" class=\"animopacity\"  src=\"images/{$row4['logo_path']}\" alt=\"Marine Heritage Society logo\"></p>";}
	}else{
		echo "<p>{$getLogo}</p>";
	}
					?>
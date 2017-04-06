<?php

function single_edit($tbl, $col, $id){

$result = getSingle($tbl, $col, $id);
$getResult = mysqli_fetch_array($result); 
for($i=0; $i<mysqli_num_fields($result); $i++) { 
	$dataType = mysqli_fetch_field_direct($result,$i);
	$fieldName = $dataType->name;
	$fieldType = $dataType->type;
	if($fieldName !=$col){
	
	if (strpos($fieldName, 'img') !== false){ 
			
		echo ""; 
		
	}else{
	echo "<form action=\"phpscripts/edit.php\" method=\"post\" enctype=\"multipart/form-data\">"; 
	echo "<input hidden name = \"tbl\" value=\"{$tbl}\">";
	echo "<input hidden name = \"col\" value=\"{$col}\">";
	echo "<input hidden name = \"id\" value=\"{$id}\">";
	echo "<label>{$fieldName}</label>";	
	echo "<textarea name=\"$fieldName\">{$getResult[$i]}</textarea><br><br>";	
		
	}
		
	}
		
	}
	
	echo "<div class=\"text-center\"><input class=\"brownbut brown importantbut\" type=\"submit\" value = \"Save Content\"></div>";

echo "</form>";

echo "<div class=\"backbut text-center\"><a href=\"../admin_index.php\">Back</a></div>";
	
}

?>
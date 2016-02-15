<?php$fontsize = "normal";
 if(isset($_GET['fontsize']))
 $fontsize = $_GET['fontsize'];
 if(!($fontsize == "huge"||$fontsize == "big"||$fontsize == "normal")){
 $fontsize = "normal";
 }
 if(isset($_GET['style']))
    $style = $_GET['style'];
 else
	$style = "smokey";
 if(!($style == "smokey"||$style == "misty"||$style == "night"||$style == "zombies")){
 $style = "smokey";}?>
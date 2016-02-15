<?php
$hints = "";
$solution = "";
if(isset($_GET['hints'])){
if(($_GET['hints']== "all"))
	$hints = "all";
 else{
	$hints = "";
}
}
if(isset($_GET['solution'])){
	 if(($_GET['solution']))
	 $solution = "all";
	 else{
	 $solution = "";
	 }
}
if(isset($_GET['hints'])){
 $hints = $_GET['hints'];
};
 $fontsize = "normal";
 if(isset($_GET['fontsize']))
 $fontsize = $_GET['fontsize'];
 if(!($fontsize == "huge"||$fontsize == "big"||$fontsize == "normal")){
 $fontsize = "normal";
 }
if(isset($_GET['solution'])){
 $solution = $_GET['solution'];
}
 if(isset($_GET['style']))
    $style = $_GET['style'];
 else
	$style = "smokey";
 if(!($style == "smokey"||$style == "misty"||$style == "night"||$style == "zombies"))
	 $style = "smokey";
 $title = "Raadsel";
 include 'head.php';
?>
<body class="<?php echo $style ?>" id="<?php echo $fontsize ?>">
	<div class="frame">
		<?php
			include 'header.php';
			include 'menu.php';
		?>
		<div class="content">
			<?php include 'getriddle.php';
			      if(isset($_GET['hints'])){
		          if($hints == "all")include 'gethints.php' ;
				  };
				  if(isset($_GET['solution'])){
		          if($solution == "all")include 'getsolution.php';
				  }?>
		</div>
		<?php
			include 'footer.php'
		?>
	</div>
</body>
</html>
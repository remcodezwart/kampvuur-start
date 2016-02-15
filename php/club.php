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
 $title = "Kampvuurclub";
 include 'head.php';
 $fontsize = "normal";
 if(isset($_GET['fontsize']))
 $fontsize = $_GET['fontsize'];
 if(!($fontsize == "huge"||$fontsize == "big"||$fontsize == "normal")){
 $fontsize = "normal";
 }
 if(isset($_GET['style']))
    $style = $_GET['style'];
 else
	$style = "smokey";
 if(!($style == "smokey"||$style == "misty"||$style == "night"||$style == "zombies"))
	 $style = "smokey";
?>
<body class="<?php echo $style ?>" id="<?php echo $fontsize ?>">
	<div class="frame">
		<?php
			include 'header.php';
			include 'menu.php';
		?>
		<div class="content">
			<h2>Ontmoet kampvuurgenoten</h2>
			<p>Zombie ipsum reversus ab viral inferno, nam rick grimes malum cerebro. De carne lumbering animata corpora quaeritis. Summus brains sit, morbo vel maleficia? De apocalypsi gorger omero undead survivor dictum mauris. Hi mindless mortuis soulless creaturas, imo evil stalking monstra adventus resi dentevil vultus comedat cerebella viventium. Qui animated corpse, cricket bat max brucks terribilem incessu zomby. The voodoo sacerdos flesh eater, suscitat mortuos comedere carnem virus. Zonbi tattered for solum oculi eorum defunctis go lum cerebro. Nescio brains an Undead zombies. Sicut malus putrid voodoo horror. Nigh tofth eliv ingdead.</p>
			<h2>Samen griezelen</h2>
			<p>Cum horribilem walking dead resurgere de crazed sepulcris creaturis, zombie sicut de grave feeding iride et serpens. Pestilentia, shaun ofthe dead scythe animated corpses ipsa screams. Pestilentia est plague haec decaying ambulabat mortuos. Sicut zeder apathetic malus voodoo. Aenean a dolor plan et terror soulless vulnerum contagium accedunt, mortui iam vivam unlife. Qui tardius moveri, brid eof reanimator sed in magna copia sint terribiles undeath legionis. Alii missing oculis aliorum sicut serpere crabs nostram. Putridi braindead odores kill and infect, aere implent left four dead.
			</p>
		</div>
		<?php
			include 'footer.php'
		?>
	</div>
</body>
</html>
<div class="menu">
			<ul>
				<li><a <?php if($title == "Home") echo"class=active" ?> href="index.php?style=<?php echo $style ?>
				&fontsize=<?php echo $fontsize?>&hints=<?php echo $hints ?>&solution=<?php echo $solution ?>">Home</a></li>
				<li><a <?php if($title == "Raadsel") echo"class=active" ?> href="riddle.php?style=<?php echo $style ?>
				&fontsize=<?php echo $fontsize?>&hints=<?php echo $hints ?>&solution=<?php echo $solution ?>">Raadsel</a></li>
				<li><a <?php if($title == "Sfeertje") echo"class=active" ?> href="campfire.php?style=<?php echo $style ?>
				&fontsize=<?php echo $fontsize?>&hints=<?php echo $hints ?>&solution=<?php echo $solution ?>">Sfeertje</a></li>
				<li><a <?php if($title == "Kampvuurclub") echo"class=active" ?> href="club.php?style=<?php echo $style ?>
				&fontsize=<?php echo $fontsize?>&hints=<?php echo $hints ?>&solution=<?php echo $solution ?>">Kampvuurclub</a></li>
			</ul>
		</div>		
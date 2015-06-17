<?php
	include 'connect.php';
	$upit = "SELECT id, question
			FROM polls";
	$rez = mysql_query($upit, $k);
	while ($r = mysql_fetch_object($rez)) {
			$polls[] = $r;
			
	}

	
?>
<div id="footer">
	<div class="left">
		<ul class="navFooter">
			<li><a href="index.php">Home</a></li>
			<li><a href="about.php">About</a></li>
			<li><a href="green.php">Think Green</a></li>
			<li><a href="gallery.php">Gallery</a></li>
			<li><a href="contact.php">Contact</a></li>
			<li><a href="dokumentacija.pdf">Documentation</a></li>
			<li><a href="sitemap.xml">Sitemap</a></li>
			<div class="clear"></div>
		</ul>
	</div>
	<div class="left">
		<ul class="navFooter" >
			<li><a href="green.php" class="footerHead">Think Green</a></li>
			<li><a href="susTourism.php">Sustainable tourism</a></li>
			<li><a href="green.php">Green traveler</a></li>
			<li><a href="serbia.php">Serbia</a></li>
			<li><a href="destinations.php">Greece</a></li>
		</ul>
	</div>
	
	<div class="left followme">
		<h3>Follow me!</h3><br>
		<div class="social">
			<i class="fa fa-facebook"></i>
			<i class="fa fa-twitter"></i>
			<i class="fa fa-pinterest-p"></i>
			<i class="fa fa-instagram"></i>
		</div>
	</div>
	<div class="left followme">
		<?php
			if (!empty($polls)):
			
		?>
		<ul class="navFooter">
			
			<?php foreach ($polls as $p) : ?>
				<li>Today's poll:
					<a href="poll.php?p=<?php echo $p->id; ?>" class="poll-link">
					<?php echo $p->question ?>
					</a>
				</li>
			<?php endforeach; ?>
		</ul>
		<?php
			else:
		?>
		<p>Sorry no polls available</p>
		<?php endif; ?>
		
	</div>
	<div class="clear"></div>
	
</div>
<div class="blogPost">
	<div id="blogHeading">
		<h1>
		<?php
			include 'connect.php';
			$upit = 'SELECT title FROM post WHERE id = 2';
			$rez = mysql_query($upit, $k);
			while ($r = mysql_fetch_array($rez)) {
				echo $r['title'];
			}
		?>
		</h1>
		<h2>
		<?php
			include 'connect.php';
			$upit = 'SELECT date FROM post WHERE id = 2';
			$rez = mysql_query($upit, $k);
			while ($r = mysql_fetch_array($rez)) {
				echo $r['date'];
			}
		?>
		</h2>
	</div>
	<div id="blogPhoto">
		<img src="img/photo9.jpg" alt="tourismEcology" />
	</div>
	<div class="blogText-blog">
		<p>
			<?php
					include 'connect.php';
					$upit = 'SELECT body FROM post WHERE id = 2';
					$rez = mysql_query($upit, $k);
					while ($r = mysql_fetch_array($rez)) {
						$skraceno = substr($r['body'], 0,400);
						echo $skraceno;
					}
			?>
		</p>
	</div>
	<div class="blogButton">
		<a href="blogPage2.php"><input type="button" class="blogBtn" name="blogBtn" value="read full article"></a>
	</div>
	<div id="blogSocial">
		<div class="social">
			<i class="fa fa-facebook"></i>
			<i class="fa fa-twitter"></i>
			<i class="fa fa-pinterest-p"></i>
			<i class="fa fa-instagram"></i>
		</div>
		<div id="blogRss" class="right">
			<a href="rss.xml"><i class="fa fa-rss fa-2x"></i>Follow RSS</a>
		</div>
	</div>
</div>
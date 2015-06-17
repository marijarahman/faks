<?php @session_start(); 
	$korisnik =  $_SESSION['korisnicko_ime'];
?>
<?php 
include 'dropdown.inc';
include 'connect.php';
 ?>
<!doctype html>
<html>
	<head>
		<script src="output.min.js" type="text/javascript" charset="utf-8"></script>
		<script type="text/javascript" src="script.js"></script>
		<link rel="stylesheet" type="text/css" href="style.css">
		<link rel="stylesheet" href="font-awesome-4.3.0/font-awesome-4.3.0/css/font-awesome.min.css">
		<link href='http://fonts.googleapis.com/css?family=Raleway:500,600,700,400,200,300' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
		<link rel="icon" href="img/favicon.png" type="image/png" sizes="16x16">
		<title>Eco Tourism | Home</title>
		<meta charset="UTF-8">
		<meta name="description" content="Blog o eko turizmu">
		<meta name="keywords" content="ecology,greece,serbia,trip,tourism,awarness,destinations,enviromental,eco"> <!-- Optimizovati keywords -->
		<meta name="author" content="Marija Rahman">
	</head>
	<body>
		<?php include 'header.php'; ?>
		<div id="blogContainer">
			<div class="blogPost">
				<div id="blogHeading">
					<h1>
					<?php
						include 'connect.php';
						$upit = 'SELECT title FROM post WHERE id = 1';
						$rez = mysql_query($upit, $k);
						while ($r = mysql_fetch_array($rez)) {
							echo $r['title'];
						}
					?>
					</h1>
					<h2>
					<?php
						include 'connect.php';
						$upit = 'SELECT date FROM post WHERE id = 1';
						$rez = mysql_query($upit, $k);
						while ($r = mysql_fetch_array($rez)) {
							echo $r['date'];
						}
					?>
					</h2>
				</div>
				<div id="blogPhoto">
					<img src="img/photo6-copy.jpg" alt="blogTourism" />
				</div>
				<div class="blogText-blog">
					<p>
						<?php
							include 'connect.php';
							$upit = 'SELECT body FROM post WHERE id = 1';
							$rez = mysql_query($upit, $k);
							while ($r = mysql_fetch_array($rez)) {
								echo $r['body'];
							}
						?>
					</p>
					<div class="blogButton">
						<a href="susTourism.php"><input type="button" class="blogBtn" name="blogBtn" value="go back"></a>
					</div>
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

			<form class="blogComment" method="POST" action="<?php print $_SERVER['PHP_SELF'];?>">
				<h4 class="page-heading">Leave a comment</h4>
				<textarea name="comment" id="" cols="100" rows="10"></textarea>
				<div><input type="submit" name="btnComment" class="btn1" value="Submit" /></div>
			</form>
			 <?php 
			 	$idBlog = 1;
			 	$kom = "SELECT komentar FROM komentari WHERE id_blog = $idBlog";
			 	$rezKom = mysql_query($kom, $k);
			 	if (mysql_num_rows($rezKom) != 0) {
			 		
			  ?>
			 <table class="comments">
			 	<?php while ($row = mysql_fetch_array($rezKom)) { ?>
			 	<tr class="comments-item">	
			 		<td style="padding: 10px; "><?php echo $row['komentar'];?> 
					<td style="padding: 10px; ">by: <?php echo $korisnik; ?></td>
					<?php
			 		  } 					
			 		 ?>
			 		</td>
					
			 	</tr>
			 </table>
			 <?php } ?>
			<?php 
				if (isset($_POST['btnComment'])) {
					$comment = $_POST['comment'];
					$idBlog = 1;
					$upit = "INSERT INTO komentari VALUES ('', '$comment', $idBlog)";
					$r = mysql_query($upit, $k);
					if ($r) {
						echo "<p class='success'>Success!!!</p>";
					}
					else {
						echo "Error";
					}
				}
			 ?>
			
		</div>
		<?php include 'footer.php'; ?>
	</body>
</html>
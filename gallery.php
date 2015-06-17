<?php include 'dropdown.inc'; ?>
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
		<div id="containerGal">

			<h1>Gallery</h1>
			<h2>Lorem ipsum dolor sit amet</h2>
			
			<div class="gallery">
				<?php 
					include 'connect.php';	
					$upitSlike = "SELECT * FROM images";
					$rezSlike = mysql_query($upitSlike, $k);
					while ($row = mysql_fetch_array($rezSlike)) {											
				?>
				<div class="picture-container">
					<img class="picture" src="<?php echo $row['href']; ?>" alt="nature" />
				</div>
				<?php } ?>
			</div>
		</div>
		<?php include 'footer.php'; ?>
	</body>
</html>
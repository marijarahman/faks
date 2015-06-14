<?php @session_start(); ?>
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
		
		<?php include 'header.php' ?>
		<div id="containerAbout">
			<div id="aboutHeading">
				<h1>About me</h1>
			</div>
			<div id="aboutWrap">
				<div id="aboutPhoto" class="left">
					<img src="img/photo8.png" alt="author" />
				</div>
				<div id="aboutText" class="right">
					<p>My name is Marija Rahman, student from Belgrade. I'm currently 2<sup>nd</sup> year of ICT College. I'm intrested in <b>web design</b> and <b>web development</b>. Currently I am specializing skills such as HTML, CSS, JS, SQL and Ruby.<br> Besides programming I also like photography, hanging out with my friends and traveling.</p>
				</div>
				<div class="clear"></div>
			</div>
		</div>
		<?php include 'footer.php'; ?>
	</body>
</html>

<?php include 'dropdown.inc'; ?>
<!doctype html>
<html>
	<head>
		<script src="jquery-2.1.4.min.js"></script>
		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
		<script type="text/javascript" src="script.js"></script>
		<script src="output.min.js" type="text/javascript" charset="utf-8"></script>		
		<link rel="stylesheet" type="text/css" href="style.css">
		<link rel="stylesheet" href="font-awesome-4.3.0/font-awesome-4.3.0/css/font-awesome.min.css">
		<link href='http://fonts.googleapis.com/css?family=Raleway:500,600,700,400,200,300' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
		<link rel="icon" href="img/favicon.png" type="image/png" sizes="16x16">
		<title>Eco Tourism | Home</title>
		<meta charset="UTF-8">
		<meta name="description" content="Blog o eko turizmu">
		<meta name="keywords" content="ecology,greece,serbia,trip,tourism,awarness,destinations,enviromental,eco">
		<meta name="author" content="Marija Rahman">
	</head>
	<body>

		<?php include 'header.php'; ?>
		<div id="containerIndex">
			
			<div id="central">
				<ul id="slider">
					<li class="slide"><img src="img/photo1.jpg" alt="slide1" /></li>
					<li class="slide"><img src="img/photo2.jpg" alt="Slide2" /></li>
					<li class="slide"><img src="img/photo3.jpg" alt="Slide3" /></li>
					<li class="slide"><img src="img/photo4.jpg" alt="Slide4" /></li>
				</ul>
			</div>
			<div id="quote">
			<blockquote>The environment is in us, not outside of us. The trees are our lungs, the rivers our bloodstream. We are all interconnected, and what you do to the environment ultimately you do to yourself.<br>Ian Samerhalerd</blockquote>
		</div>
		<div id="content">
			<div id="three">
				<div class="box">
					<div class="icon">
						<img src="img/travel-copy.png" alt="travel"><br>
						<p>Travel tips</p>
						<p>Read about where I travelled and let me share with you my travel tips & tricks for the best trip experience.</p>
					</div>
				</div>
				<div class="box">
					<div class="icon">
						<img src="img/postcard-copy.png" alt="destination"><br>
						<p>Destinations</p>
						<p>I will provide guide to the best destinations in Serbia and Greece</p>
					</div>
				</div>
				<div class="box">
					<div class="icon">
						<img src="img/eco.png" alt="ecology"><br>
						<p>Ecology</p>
						<p>Be a responsible traveler! Build enviromental and cultural awareness and respect and also financial benefits of eco tourism.</p>
					</div>
				</div>
			</div>
			<div class="clear"></div>
			<div id="latest">
				<h1>Latest posts</h1>
			</div>
			<div id="blogPost">
				<div id="first">
					<div class="post">
						<img src="img/photo5-copy.jpg" alt="greece"><br>
						<h2 class="heading">Thessaloniki</h2>
						<p class="blogText">Read about where I travelled and let me share with you my travel tips & tricks for the best trip experience.</p>
						<a href="blogPage.html"><input type="button" class="btn" name="btn" value="read more"></a>
					</div>
					<div class="post">
						<img src="img/photo5-copy.jpg" alt="serbia"><br>
						<h2 class="heading">Novi Sad</h2>
						<p class="blogText">Read about where I travelled and let me share with you my travel tips & tricks for the best trip experience.</p>
						<a href="blogPage2.html"><input type="button" class="btn" name="btn" value="read more"></a>
					</div>
					<div class="post">
						<img src="img/photo5-copy.jpg" alt="greeceKavala"><br>
						<h2 class="heading">Kavala</h2>
						<p class="blogText">Read about where I travelled and let me share with you my travel tips & tricks for the best trip experience.</p>
						<a href="blogPage.html"><input type="button" class="btn" name="btn" value="read more"></a></div>
					</div>
				</div>
				<div class="clear"></div>
			</div>
		</div>
	</div>
	<?php include 'footer.php'; ?>
</body>
</html>
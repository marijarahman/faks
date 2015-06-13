<?php include 'dropdown.inc'; ?>
<html>
	<head>
		<script src="output.min.js" type="text/javascript" charset="utf-8"></script>
		<script type="text/javascript" src="script.js"></script>
		<link rel="stylesheet" type="text/css" href="style.css">
		<link rel="stylesheet" href="font-awesome-4.3.0/font-awesome-4.3.0/css/font-awesome.min.css">
		<link href='http://fonts.googleapis.com/css?family=Raleway:500,600,700,400,200,300' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
		<link rel="icon" href="img/favicon.png" type="image/png" sizes="16x16">
		<title>Eco Tourism | Contact </title>
		<meta charset="UTF-8">
		<meta name="description" content="Blog o eko turizmu">
		<meta name="keywords" content="ecology,greece,serbia,trip,tourism,awarness,destinations,enviromental,eco"> <!-- Optimizovati keywords -->
		<meta name="author" content="Marija Rahman">
	</head>
	<body>
		<?php include 'header.php'; ?>
		
		<div class="container">
			<form id="contact" action="" method="post">
				<h1>Contact me</h3>
				<fieldset>
					<input placeholder="Your name *" type="text" id="txtName" required class="contactField"><span id="errorName"></span>
				</fieldset>
				<fieldset>
					<input placeholder="Your last name *" type="text" id="txtLast" class="contactField"><span id="errorLast"></span>
				</fieldset>
				<fieldset>
					<input placeholder="Your email address *" type="text" id="txtEmail" class="contactField"><span id="errorEmail"></span>
				</fieldset>
				<fieldset>
					<textarea placeholder="Type your Message Here...." tabindex="5" required class="contactField"></textarea>
				</fieldset>
				<fieldset>
					<input name="btnSend" type="button" id="btnSend" value="Send" onclick="check();"></input>
				</fieldset>
			</form>
			
			
		</div>
		<?php include 'footer.php'; ?>
	</body>
</html>
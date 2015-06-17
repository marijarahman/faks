<?php @session_start(); ?>
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
		<meta name="keywords" content="ecology,greece,serbia,trip,tourism,awarness,destinations,enviromental,eco">
		<meta name="author" content="Marija Rahman">
	</head>
	<body>
		<?php include 'header.php'; ?>
		<div id="containerIndex">
			<div class="container">
				<form id="contact" action="" method="post">
					<h2 class="page-heading">Hello <?php echo $_GET['kor_ime']; ?>, edit your profile</h2>
					
					<fieldset>
						<input placeholder="E-mail address" name="email" type="text" id="txtName" class="contactField"><span id="errorName"></span>
					</fieldset>
					<fieldset>
						<input placeholder="Username" name="user" type="text" id="txtLast" class="contactField"><span id="errorLast"></span>
					</fieldset>
					<fieldset>
						<input placeholder="Password" name="pass" type="text" id="txtEmail" class="contactField"><span id="errorEmail"></span>
					</fieldset>
					<input type="submit" class="btn1" name="btnUpdate" value="Update Profile">
				</form>
				<?php
				
				
					if (isset($_REQUEST['btnUpdate'])) {
						$email = $_REQUEST['email'];
						$user = $_REQUEST['user'];
						$pass = $_REQUEST['pass'];
						$id = $_GET['id'];
						
						$izmeni = "UPDATE korisnici SET korisnicko_ime = '$user', lozinka = '$pass', email = '$email' WHERE id_korisnik = $id";
					$rezIzmeni = mysql_query($izmeni, $k);
						if ($rezIzmeni) {
							echo "<p class='success'>You have successfully updated your profile!</p>";
						}
						else {
							$greske[] = mysql_error();
						}
					}
				?>
			</div>
		</div>
		<?php include 'footer.php'; ?>
	</body>
</html>
<?php @session_start();
include 'connect.php';
	if (isset($_REQUEST['btnLog'])) {
		$ime = trim($_REQUEST['tbName']);
		$pass = md5(trim($_REQUEST['tbPass']));
		$upit = "SELECT * FROM korisnici k
		JOIN korisnik_uloga ku
		ON k.id_korisnik=ku.id_korisnik
		JOIN uloge u
		ON u.id_uloga=ku.id_uloga
		WHERE k.korisnicko_ime = '$ime' AND k.lozinka = '$pass'";
		$rez = mysql_query($upit, $k);
		$greske = array();
		if (mysql_num_rows($rez) == 0) {
			$greske[] = "Ne postoji nalog sa tim podacima!";
		}
		else {
			$korisnik = mysql_fetch_array($rez);
			$kor_ime = $korisnik['korisnicko_ime'];
			$ime_prezime = $korisnik['ime_prezime'];
			$lozinka = $korisnik['lozinka'];
			$id_uloga = $korisnik['id_uloga'];
			$naziv_uloge = $korisnik['naziv_uloge'];
			$_SESSION['idU'] = $id_uloga;
			$_SESSION['korisnicko_ime'] = $korisnicko_ime;
			setcookie($korisnicko_ime, $ime_prezime, time() + (86400*30), "/");
			switch ($naziv_uloge) {
				case 'admin':
					header("Location:ulogovan.php");
					break;
				
				case 'student':
					header("Location:about.php");
					break;
			}
		}
	}
?>
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
		<meta name="description" content="BSign o eko turizmu">
		<meta name="keywords" content="ecology,greece,serbia,trip,tourism,awarness,destinations,enviromental,eco"> <!-- Optimizovati keywords -->
		<meta name="author" content="Marija Rahman">
	</head>
	<body>
		<?php include 'header.php'; ?>
		<?php
		if(count($greske) > 0) {
		foreach($greske as $g) {
			echo $g."<br/>";
			}
		}
		?>
		
		<div class="login-box">
			<div class="lb-header">
				<a href="#" class="active" id="login-box-link">Sign in</a>
				<a href="#" id="signup-box-link">Sign Up</a>
			</div>
			
			<form class="email-login" method="POST" action="<?php print $_SERVER['PHP_SELF'];?>">
				<div class="u-form-group">
					<input type="text" placeholder="Username" id="tbEmail" name="tbName" />
				</div>
				<div class="u-form-group">
					<input type="password" placeholder="Password" id="tbPass" name="tbPass" />
				</div>
				<div class="u-form-group">
					<button onclick="signIn();" name="btnLog">Sign in</button>
				</div>
				
			</form>
			<form class="email-signup">
				
				<div class="u-form-group">
					<input type="email" placeholder="Email" id="signUpEmail"/>
					<div id="errorUpEmail"></div>
				</div>
				<div class="u-form-group">
					<input type="text" placeholder="Username" id="signUpUser"/>
					<div id="errorUpUser"></div>
				</div>
				<div class="u-form-group">
					<input type="password" placeholder="Password" id="signUpPass" />
					<div id="errorUpPass"></div>
				</div>
				<div class="u-form-group">
					<input type="password" placeholder="Confirm Password" id="signUpPass2"/>
					<div id="errorUpPass2"></div>
				</div>
				<div class="u-form-group">
					<button onclick="signUp();" name="btnRegister">Sign Up</button>
				</div>
			</form>
		</div>
		
		<?php include 'footer.php'; ?>
	</body>
</html>
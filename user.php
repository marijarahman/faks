<?php @session_start(); ?>
<?php
include 'functions.php';
admin_protect();
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
		<title>Eco Tourism | Users </title>
		<meta charset="UTF-8">
		<meta name="description" content="Blog o eko turizmu">
		<meta name="keywords" content="ecology,greece,serbia,trip,tourism,awarness,destinations,enviromental,eco">
		<meta name="author" content="Marija Rahman">
	</head>
	<body>
		<?php include 'header.php'; ?>
		<div id="content">
			<h2 class="page-heading">Users: </h2>
			
			<?php
				$upitLista = "SELECT id_korisnik, korisnicko_ime FROM korisnici";
				$rezLista = mysql_query($upitLista);
				if (mysql_num_rows($rezLista) != 0) {
					while ($row = mysql_fetch_array($rezLista)) {
						$id = $row['id_korisnik'];
						$user = $row['korisnicko_ime'];
			?>
			
			<table class="list_of_users">
				<tr>
					<td class="user"><?php echo $user; ?></td> <td class="user">
						<?php echo "<a href='delete.php?id=$id' class='btn1' name='delete'>DELETE USER</a>" ?>
					</td>
				</tr>
			</table>
			<?php 
				}
					} ?>
		</div>
		
		
		
		<?php include 'footer.php'; ?>
	</body>
</html>
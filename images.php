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
			<h2 class="page-heading">Upload images: </h2>
			<form method="post" action="<?php print $_SERVER['php_self'];?>" enctype="multipart/form-data">
				<input type="file" name="fSlika">
				<input type="submit" class="btn1" name="btnSubmit" />
			</form>
			<?php
			
				if(isset($_POST['btnSubmit']))
				{
					
							
					$imeFajla=$_FILES['fSlika']['name'];
					$privremenoImeFajla=$_FILES['fSlika']['tmp_name'];
					
					$putanjaSlike="img/".$imeFajla;
					
					if(move_uploaded_file($privremenoImeFajla,$putanjaSlike))
					{												#datum se cuva u bazi kao INT	
						$upit_upis="INSERT INTO images VALUES ('', '$putanjaSlike')";
					
						$rez_upis = mysql_query($upit_upis,$k);
						
						if(!$rez_upis) {
							echo mysql_error();
						}
						else {
							echo "You have uploaded images successfully!";
						}					
						
					
					}
					
				}
				
				
			?>

			
		</div>
		
		
		
		<?php include 'footer.php'; ?>
	</body>
</html>
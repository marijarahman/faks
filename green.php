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
		<div class="clear"></div>
	</div>
	<div id="blogContainer">
		<?php
			$pdo = new PDO("mysql:host=localhost;dbname=baza1", 'root', 'password');
			$page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
			$perPage = isset($_GET['perPage']) && $_GET['perPage'] < 10 ? (int)$_GET['perPage'] : 2;
			
			$start = ($page > 1) ? ($page * $perPage) - $perPage : 0;
			 
		$query = $pdo->prepare("SELECT SQL_CALC_FOUND_ROWS title, date, body, href FROM post LIMIT {$start}, {$perPage}");
			$query->execute();
			$query = $query->fetchAll(PDO::FETCH_ASSOC);

			$total = $pdo->query("SELECT FOUND_ROWS() as total")->fetch()['total'];
			$pages = ceil($total / $perPage);
		?>
		<?php foreach ($query as $q): ?>
		<div class="blogPost">
			<div class="blogHeading">
				<h1><?php echo $q['title']; ?></h1>
				<h2><?php echo $q['date']; ?></h2>
			</div>
			<div id="blogPhoto">
				
			</div>
			<div class="blogText-blog">
				<p><?php echo substr($q['body'], 0,500); ?></p>
			</div>
			<div class="blogButton">
				<a href="<?php echo $q['href'] ?>"><input type="button" class="blogBtn" name="blogBtn" value="read full article"></a>
			</div>
		</div>
		<?php endforeach ?>
	</div>
	<div class="pagination">
		<?php for($x = 1; $x <= $pages; $x++): ?>
			<a href="?page=<?php echo $x; ?>&perPage=<?php echo $perPage; ?>" <?php if ($page === $x) {
				echo ' class="selected"';
			} ?>><?php echo $x; ?></a>
		<?php endfor ?>
	</div>
	<?php include 'footer.php'; ?>
</body>
</html>
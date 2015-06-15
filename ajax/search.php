<?php 
	include '../connect.php';

	$search = $_POST['search'];

	$upit = "SELECT body, title, date, href
			FROM post
			WHERE body LIKE '%$search%'";
	$rez = mysql_query($upit, $k);

	while ($r = mysql_fetch_array($rez)) {
		echo "<h1 class='search-result__heading'>" .$r['title'] . "</h1>";
		echo "<h2 class='search-result__date'>" .$r['date']. "</h2>";
		echo "<p class='search-result__text'>" .$r['body'] . "</p>";
		echo "<a href='" .$r['href']. "'><input type='button' class='blogBtn' value='read full article' /></a>";
		echo "<hr>";

	}
 ?>



<?php 
	$k = mysql_connect("localhost", "root", "password") or die(mysql_error());
	$b = mysql_select_db("baza1", $k) or die(mysql_error());
?>
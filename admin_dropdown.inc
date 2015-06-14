<?php
	// dynamic ddl menu
	try {
		$pdo = new PDO("mysql:host=localhost;dbname=baza1", 'root', 'password');
	}
	catch(PDOException $e){
		echo $e->getMessage();
	}
	$sql = "SELECT id, name, href FROM admin_menu ORDER BY id";
	$stmt = $pdo->prepare($sql);
	$stmt->execute();
	
?>
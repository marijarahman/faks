<?php
	// dynamic ddl menu
	try {
		$pdo = new PDO("mysql:host=localhost;dbname=baza1", 'root', '');
	}
	catch(PDOException $e){
		echo $e->getMessage();
	}
	$sql = "SELECT id, name, href FROM menu ORDER BY id";
	$stmt = $pdo->prepare($sql);
	$stmt->execute();
	
?>
<?php
	@session_start();
	$rola = $_SESSION['idU'];
	// dynamic ddl menu
	try {
		$pdo = new PDO("mysql:host=localhost;dbname=baza1", 'root', 'password');
	}
	catch(PDOException $e){
		echo $e->getMessage();
	}
	switch ($rola) {
		case '1':
			$sql = "SELECT id, name, href FROM admin_menu ORDER BY id";
			$stmt = $pdo->prepare($sql);
			$stmt->execute();
			break;
		case '2':
			$sql = "SELECT id, name, href FROM member_menu ORDER BY id";
			$stmt = $pdo->prepare($sql);
			$stmt->execute();
			break;
		default:
			$sql = "SELECT id, name, href FROM menu ORDER BY id";
			$stmt = $pdo->prepare($sql);
			$stmt->execute();
			break;
	}
	
	
?>
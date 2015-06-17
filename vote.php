<?php 
	include 'connect.php';
	if (isset($_POST['p'], $_POST['c'])) {
		$poll = $_POST['p'];
		$choice = $_POST['c'];

		$upitGlasanje = "INSERT INTO polls_answer (poll_id, choice_id)
						VALUES($poll, $choice)";
						
		$rezGlasanje = mysql_query($upitGlasanje,$k);
		
		header("Location:poll.php");
	}
	else {
		echo "Ovo je else deo";
	}
 ?>

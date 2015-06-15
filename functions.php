<?php 
@session_start();
function admin_protect() {
	if ($_SESSION['idU'] != 1) {
		header("Location:index.php");
		echo $_SESSION['idU'];
		exit();
	}
	
}

?>
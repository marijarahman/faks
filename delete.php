<?php @session_start(); ?>
<?php
include 'functions.php';
admin_protect();
include 'dropdown.inc';
include 'connect.php';

$idO = $_GET['id'];
$userO = $_GET['user'];

$upitO = "DELETE FROM korisnici WHERE id_korisnik = $idO";
$upitU = "DELETE FROM korisnik_uloga WHERE id_korisnik = $idO";
$rezO = mysql_query($upitO, $k);
$rezU = mysql_query($upitU, $k);
header("Location:user.php");
?>
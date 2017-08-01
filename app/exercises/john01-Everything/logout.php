<?php 
	session_start();

	setcookie("withdrawAmount", "", time() - (1 * 365 * 24 * 60 * 60));
	session_unset();
	header("Location: index.php");
	exit();
?>
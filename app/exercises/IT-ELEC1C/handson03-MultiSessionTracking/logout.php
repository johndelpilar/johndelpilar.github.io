<?php 
	session_start();
	
	session_destroy();
	setcookie("semestralGrade", "", time() - (1 * 365 * 24 * 60 * 60));
	
	header("Location: index.php");
	exit();
?>
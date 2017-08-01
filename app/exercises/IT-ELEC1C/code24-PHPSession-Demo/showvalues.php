<?php 
	session_start();
	
	$message = "<h1><font color='red'>Missing values.</font></h1>";
	
	if (isset($_SESSION['user']) && isset($_SESSION['message'])) {
		$message = "<h1><font color='blue'>" . $_SESSION['message'] . $_SESSION['user'] . "</font></h1>";
		
		echo $message;
		echo "<h3>Please click <a href='logout.php'>here</a> to logout.</h3>";
	
	} else {
		echo $message;
		echo "<h3><font color='red'>Invalid user. Please click <a href='index.php'>here</a> to try again.</font></h3>";
	}

?>

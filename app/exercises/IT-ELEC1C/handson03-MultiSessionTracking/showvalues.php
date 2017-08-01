<?php 
	session_start();
		
	if (isset($_COOKIE['semestralGrade']) && isset($_SESSION['remark'])) {
		$message = "<h1><font color='blue'>Your grade is " . $_COOKIE['semestralGrade'] . "."
				. "<br>You " . $_SESSION['remark'] . ".</font></h1>";
		
		echo $message;
		echo "<h3>Please click <a href='logout.php'>here</a> to logout.</h3>";
	
	} else {
		echo "<h3><font color='red'>No set values. Please click <a href='index.php'>here</a> to try again.</font></h3>";
	}

?>

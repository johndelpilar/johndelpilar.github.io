<?php 
	session_start();
	
	$prelimGrade = 0;
	$prefinalGrade = 0;
	
	define("PASSING_GRADE", 60);
	
	if (!empty($_GET['prelimGrade'])) {
		$prelimGrade = $_GET['prelimGrade'];
	}
	
	if (!empty($_GET['prefinalGrade'])) {
		$prefinalGrade = $_GET['prefinalGrade'];
	}
	
	$semestralGrade = $prelimGrade*0.5 + $prefinalGrade*0.5;
	
	setcookie("semestralGrade", $semestralGrade, time() + (1 * 365 * 24 * 60 * 60));
	$_SESSION['remark'] = ($semestralGrade >= PASSING_GRADE) ? "PASSED" : "FAILED";
	
	echo "<h1>Grade has been computed!</h1>";
	
	echo "<h2><font color='blue'>Please click <a href='showvalues.php'>here</a> to display session values.</font></h2>";
?>

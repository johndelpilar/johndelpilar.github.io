<?php 
	setcookie("accessedBefore", "Yes", time() + (3 * 365 * 24 * 60 * 60));
	setcookie("school", "University of Santo Tomas", time() + (5 * 365 * 24 * 60 * 60));
?>
<!DOCTYPE HTML> <!-- HTML 5 -->
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=Cp1252">
<title>Using Cookies</title>
</head>
    <body>
    <h1>Cookie Session Tracking Demo</h1>
    <?php
		echo "<h2>Welcome to the Cookie Web Site!</h2>";
		echo "We hope you enjoy your visit.";
		
	?>
    </body>
</html>
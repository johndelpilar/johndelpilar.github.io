<?php 
	setcookie("accessedBefore", "", time() - (3 * 365 * 24 * 60 * 60));
	setcookie("school", "", time() - (5 * 365 * 24 * 60 * 60));
	
	if (isset($_COOKIE["accessedBefore"])) {
		$access_status = $_COOKIE["accessedBefore"];
	} else {
		$access_status = "";
	}
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
		if ($access_status == "Yes") {
    		echo "<h2>Welcome <u>back</u> to the Cookie Web Site!</h2>";
			echo "We're glad you could join us again.";
    	} else {
    		echo "<h2>Welcome to the Cookie Web Site!</h2>";
			echo "We hope you enjoy your visit.";
    	}	
	?>
    </body>
</html>
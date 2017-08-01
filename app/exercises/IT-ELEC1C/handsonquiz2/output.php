<?php 
	session_start();
?>
<!DOCTYPE HTML> <!-- HTML 5 -->
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=Cp1252">
<title>Hands On Quiz</title>
</head>
    <body>
    <h2>Hands On Quiz</h2>
    <hr>

    <?php 
    	$accountType = "";
    	if (isset($_SESSION['accountType'])) {
    		if ($_SESSION['accountType'] == "current") {
    			$accountType = "current";
    		} else {
				$accountType = "savings";
    		}
    	} else {
			$accountType = "savings";
    	}
    	
    	switch ($accountType) {
    		case "savings":
    			echo "<p>Client Name: <u>" . $_COOKIE['clientName'] . "</u></p>";
    			echo "<p>Bank Account Type is <u>" . $_COOKIE['accountType'] . "</u>.</p>";
    			if ($_COOKIE['deduction'] > 0) {
    				echo "<p>Your balance is below the minimum of Php2000.00. The deduction is Php<u>" . $_COOKIE['deduction'] . ".00</u>.</p>";
    				echo "<p>You new balance is Php<u>" . $_COOKIE['newBalance'] . "</u>.</p>";
    			} else {
    				echo "<p>You do not have any deductions.</p>";
    			}
    			echo "<p>Information is on <u>Cookie</u>.</p>";
    			break;
    		case "current":
    			echo "<p>Client Name: <u>" . $_SESSION['clientName'] . "</u></p>";
    			echo "<p>Bank Account Type is <u>" . $_SESSION['accountType'] . "</u>.</p>";
    			if ($_SESSION['deduction'] > 0) {
    				echo "<p>Your balance is below the minimum of Php5000.00. The deduction is Php<u>" . $_SESSION['deduction'] . ".00</u>.</p>";
    				echo "<p>You new balance is Php<u>" . $_SESSION['newBalance'] . "</u>.</p>";
    			} else {
    				echo "<p>You do not have any deductions.</p>";
    			}
    			echo "<p>Information is on <u>Session</u>.</p>";
    			break;
    	}
    ?>
    
    <h4>&lt;&lt;<a href="index.php">GO BACK</a>&gt;&gt;</h4>
    
    </body>
</html>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Frameset//EN">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=Cp1252">
<title>Ternary or Conditional Operator Demo</title>
</head>
    <body>
    <h2>Ternary or Conditional Operator Demo</h2>
    <?php
		$isWendellMale = true;
		$message = "Wendell is indeed a " . ($isWendellMale ? "male" : "female") . ".<br>";
		echo "<p><font color='blue'>" . $message . "</font></p>";
		
		$isKrishaMale = false;
		$message = "Krisha is indeed a " . ($isKrishaMale ? "male" : "female") . ".<br>";	
		echo "<p><font color='pink'>" . $message . "</font></p>";
		
		//	another example - float comparison
		echo "<hr>";
		echo "<p>59.999999 is the same as 60? " 
				. (59.999999 == 60
				? "Yes they are the same."
				: "Absolutely not. 60 is 60.") . "</p>";
	?>
    </body>
</html>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Frameset//EN">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=Cp1252">
<title>Loops Demo</title>
</head>
    <body>
    <h2>Loops Demo</h2>
    <?php
    	$numberOfLoop = 15;
    	$counter = 1;
    	
    	echo "<p><font color='blue'>Demo Using while loop</font></p>";
    	
    	while ($counter <= $numberOfLoop) {
			echo "<p>" . $counter . "- using while loop</p>";		
			$counter++;
		}
		
		
		
		echo "<hr size='10' color='green'>";
    	echo "<p><font color='blue'>Demo Using do while loop</font></p>";
		
		//	reset counter to 1
		$counter = 1;
		do {
			echo "<p>" . $counter . "- using do while loop</p>";
			$counter++;
		} while ($counter <= $numberOfLoop);

		
		
		echo "<hr size='10' color='yellow'>";
		echo "<p><font color='blue'>Demo Using for loop</font></p>";
		
		for ($counter = 1; $counter <= $numberOfLoop; $counter++) {
			echo "<p>" . $counter . "- using for loop</p>";
		}
	?>
    </body>
</html>
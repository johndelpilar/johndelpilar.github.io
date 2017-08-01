<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Frameset//EN">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=Cp1252">
<title>SetType Function Demo</title>
</head>
    <body>
    <?php
		$testString = "3.5 seconds";
		$testDouble = 5.5;
		$testInteger = 10;
	?>
	
	<h1>PHP Data Types</h1>
	
	<p><?php echo $testString; ?> is a string.</p>
	<p><?php echo $testDouble; ?> is a double.</p>
	<p><?php echo $testInteger; ?> is a integer.</p>
	<hr>
	<p><i>Now converting to other data types.</i></p>
	
	<?php 
		//	converting string to double
		echo $testString;
		settype($testString, "double");
		echo " as a double is " . $testString . "<br>";
		
		//	converting string to integer
		echo $testString;
		settype($testString, "integer");
		echo " as an integer is " . $testString . "<br>";
		
		//	converting back to string
		settype($testString, "string");
		echo "Converting back to string results in " . $testString . "<br>";
	?>
    </body>
</html>
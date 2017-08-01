<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Frameset//EN">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=Cp1252">
<title>Sample Variable Declaration</title>
</head>
    <body>
    <!-- this is sample comment from HTML -->
    <?php
    	echo "<!-- this is sample comment from HTML -->";
    
    	// sample declaration of boolean variable
    	$isJohnSleepy = true;
    	
    	if ($isJohnSleepy) {
    		/*
    		 *	changing the variable type from
    		 *	boolean to String 
    		 */
    		$isJohnSleepy = "University of Santo Tomas";
    		echo "<h2><font color='blue'>John is sleepy in " 
				. $isJohnSleepy . "</font></h2>";
    		
    		# changing the variable to int
    		$isJohnSleepy = 406;
    		echo "<h2>This university is "
    			. $isJohnSleepy . " years old.</h2>";
    	} else {
    		echo "<h2><font color='red'>John is not sleepy</font><h2>";
    	}
		echo "<img src='images/ust3-edit.png' alt='Missing Image.' width='50%'>";
		echo "<h1>My Web Application</h1>";
		echo "<h2>Learning PHP is fun.</h2>";
		echo "<p>programmed by John Del Pilar</p>";
		echo "<hr>";
		echo "<p><i>&copy; 2017 University of Santo Tomas</i></p>";
		echo "";
		echo "";
		echo "";
	?>
    </body>
</html>
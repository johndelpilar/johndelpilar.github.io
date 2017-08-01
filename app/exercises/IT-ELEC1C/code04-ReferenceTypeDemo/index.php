<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Frameset//EN">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=Cp1252">
<title>Reference Type Demo</title>
</head>
    <body>
    <?php
		$school = "UST";
		
		/*
		 The use of the & symbol simply means that
		 the memory address used/occupied by $school will
		 then be given to $anotherSchool
		 */
		$anotherSchool = &$school;
		$anotherSchool = $school
			. " Pontifical Royal Catholic University";
		
		/*
		 if the $anotherSchool changed its value,
		 will the $school variable be affected?
		 */
		echo "<h2>Value of school: " . $school . "</h2>";
		echo "<h2>Value of anotherSchool: " . $anotherSchool . "</h2>";
		
		$school = $anotherSchool . " 1611";
		
		echo "<hr>";
		/*
		 A change in the $school value, will the value
		 of $anotherSchool change as well?
		 */
		echo "<h2>Value of school: " . $school . "</h2>";
		echo "<h2>Value of anotherSchool: " . $anotherSchool . "</h2>";
		
		echo "<hr>";
		
		echo "<p><big>Sample copy value</big><p>";
		
		$school3 = "UST";
		
		// a copy value of UST will be given instead
		$school4 = $school3;
		
		$school4 = $school3
			. " Pontifical Royal Catholic University";

		echo "<h2>Value of school3: " . $school3 . "</h2>";
		echo "<h2>Value of school4: " . $school4 . "</h2>";
		
		$schoolAddress = NULL;	// empty or nothing
		/*
		 Is it the same as declaring nothing such as $schoolAddress1;
		 */
		echo "<h3>Address is " . $schoolAddress . "</h3>";
		
		$schoolAddress = "Espana Boulevard, Manila";
		echo "<h3>Address is " . $schoolAddress . "</h3>";
		
		$schoolAddress1;
		echo "<h3>Address is " . $schoolAddress1 . "</h3>";
	?>
    </body>
</html>
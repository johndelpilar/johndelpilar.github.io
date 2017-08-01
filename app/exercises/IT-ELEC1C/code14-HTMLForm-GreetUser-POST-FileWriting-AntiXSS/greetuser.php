<!DOCTYPE HTML>	<!-- This doctype means that the document is now in HTML5 -->
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=Cp1252">
<title>Greet User Application</title>
</head>
    <body>
    <?php 
    	$name = htmlspecialchars($_POST["userName"]);
    	$school = htmlspecialchars($_POST["userSchool"]);
    	$course = htmlspecialchars($_POST["userCourse"]);
    	$yearLevel = (int) $_POST["userYearLevel"];
    	
    	echo "<h2>Hi, $name!</h2>";
    	echo "<p>You are studying in $school.</p>";
    	echo "<p>Your course is $course.</p>";
    	echo "<p>Your current year level is $yearLevel. " . 
    			"Next school year will be " . ($yearLevel + 1) . ".</p>";
    	
    	//	file writing functionality
    	$fs = fopen("student_db.csv", "a");
    	
    	//	then perform file writing using fwrite
    	fwrite($fs, $name . "," . $school . "," . $course . "," . $yearLevel . "\n");
    	
    	//	close the file after writing
    	fclose($fs);
    	
    	//	create a form button here that if selected, will go back to the form
    	echo "<hr>";
    	echo "<form action='index.php'>";
    	echo "<input type='submit' value='<< GO BACK >>'>";
    	echo "</form>";
    	
    	
    ?>
    </body>
</html>
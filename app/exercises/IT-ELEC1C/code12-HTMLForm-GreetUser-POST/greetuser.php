<!DOCTYPE HTML>	<!-- This doctype means that the document is now in HTML5 -->
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=Cp1252">
<title>Greet User Application</title>
</head>
    <body>
    <?php 
    	$name = $_POST["userName"];
    	$school = $_POST["userSchool"];
    	$course = $_POST["userCourse"];
    	$yearLevel = (int) $_POST["userYearLevel"];
    	
    	echo "<h2>Hi, $name!</h2>";
    	echo "<p>You are studying in $school.</p>";
    	echo "<p>Your course is $course.</p>";
    	echo "<p>Your current year level is $yearLevel. " . 
    			"Next school year will be " . ($yearLevel + 1) . ".</p>";
    	
    	echo "<hr>";
    	echo "<form action='index.php'>";
    	echo "<input type='submit' value='<< GO BACK >>'>";
    	echo "</form>";
    	
    	
    ?>
    </body>
</html>
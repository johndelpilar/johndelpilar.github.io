<!DOCTYPE HTML> <!-- HTML 5 -->
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=Cp1252">
<title>Class and Objects Demo</title>
</head>
    <body>
    <?php
		class Student {
			//	instance variables
			var $id = NULL;
			var $lastName = NULL;
			var $firstName = NULL;
			var $course = NULL;
			var $yearLevel = NULL;
			
			//	create a user-defined function that will print the student details
			function printInfo() {
				echo "<h2>Student Details</h2>";
				echo "<p>ID: " . $this->id . "</p>";
				echo "<p>Name: " . $this->firstName . " " . $this->lastName . "</p>";
				echo "<p>Course: " . $this->course . "</p>";
				echo "<p>Year Level: " . $this->yearLevel . "</p>";
			}
		}	
    
    	$john = new Student();
    	
    	$john->id = "2014069455";
    	$john->lastName = "Del Pilar";
    	$john->firstName = "John Anthony";
    	$john->course = "BS Information Technology";
    	$john->yearLevel = 3;
    	
    	$john->printInfo();
		
	?>
    </body>
</html>
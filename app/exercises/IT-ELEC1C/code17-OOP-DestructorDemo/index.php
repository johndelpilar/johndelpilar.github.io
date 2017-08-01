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
			var $id;			#	set to undefined
			var $lastName;		#	set to undefined
			var $firstName;		#	set to undefined
			var $course;		#	set to undefined
			var $yearLevel;		#	set to undefined
			
			//	constructor declaration
			//	the reason why we are using constructor is to perform member data initialization
			function __construct() {
				$id = NULL;
				$lastName = NULL;
				$firstName = NULL;
				$course = NULL;
				$yearLevel = NULL;
				
				echo "<p><i><b><font color='blue'>Constructor successfully executed!</font></b></i></p>";
			}
			
			//	create a user-defined function that will print the student details
			function printInfo() {
				echo "<h2>Student Details</h2>";
				echo "<p>ID: " . $this->id . "</p>";
				echo "<p>Name: " . $this->firstName . " " . $this->lastName . "</p>";
				echo "<p>Course: " . $this->course . "</p>";
				echo "<p>Year Level: " . $this->yearLevel . "</p>";
			}
			
			//	creating a destructor functions this will be automatically called once the object is unreferenced (not used anymore)
			function __destruct() {
				echo "<p><i><b><font color='red'>Destructor successfully executed!</font></b></i></p>";
			}
		}	
    
    	$john = new Student();
    	
    	$john->id = "2014069455";
    	$john->lastName = "Del Pilar";
    	$john->firstName = "John Anthony";
    	$john->course = "BS Information Technology";
    	$john->yearLevel = 3;
    	
    	$john->printInfo();
		
    	//	create here another student object
    	//	question: based on the output, how many times will the constructor execute?
    	
    	$chen = new Student();
    	 
    	$chen->id = "2014069141";
    	$chen->lastName = "Chen";
    	$chen->firstName = "Patrick";
    	$chen->course = "BS Information Technology";
    	$chen->yearLevel = 3;
    	 
    	$chen->printInfo();
    	
	?>
    </body>
</html>
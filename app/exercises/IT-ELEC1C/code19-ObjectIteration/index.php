<!DOCTYPE HTML> <!-- HTML 5 -->
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=Cp1252">
<title>Object Iteration Demo</title>
</head>
    <body>
    <h1>Object Iteration Demo</h1>
    <?php
		class Person {
			public $name = 'John Del Pilar';
			public $school = 'UST';
			protected $section = '3ITH';
			private $_5years = 'Stuff and things.';
			
			function printIteration() {
				foreach ($this as $key=>$val) {
					echo "<p>$key : $val</p>";
				}
			}
		}
		
		$objPerson = new Person();
		
		echo "<h2><font color='blue'>Listing only the public properties</font></h2>";
		foreach ($objPerson as $key=>$val) {
			echo "<p>$key : $val</p>";
		}
		
		echo "<hr>";
		echo "<h2><font color='red'>Listing all properties</font></h2>";
		$objPerson->printIteration();
		
	?>
    </body>
</html>
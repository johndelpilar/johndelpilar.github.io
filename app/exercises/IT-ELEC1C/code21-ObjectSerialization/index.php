<!DOCTYPE HTML> <!-- HTML 5 -->
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=Cp1252">
<title>Object Serialization Demo</title>
</head>
    <body>
    <h1>Object Serialization Demo</h1>
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
		$objPerson->printIteration();
		
		echo "<hr>";
		echo "<h3>Serialized Object:</h3>";
		
		$dataFileOne = serialize($objPerson);
		
		file_put_contents('personData.dat', $dataFileOne);
		
		$dataFileTwo = file_get_contents('personData.dat');
		$objPerson2 = unserialize($dataFileTwo);
		$objPerson2->printIteration();
		
	?>
    </body>
</html>
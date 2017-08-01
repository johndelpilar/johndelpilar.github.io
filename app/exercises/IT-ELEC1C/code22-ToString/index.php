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
			
			function __toString() {
				$details = "";
				
				foreach ($this as $key=>$val) {
					$details .= "$key : $val<br>";
				}
				return $details;
			}
		}
		
		$objPerson = new Person();
		
		echo $objPerson->__toString();
		
	?>
    </body>
</html>
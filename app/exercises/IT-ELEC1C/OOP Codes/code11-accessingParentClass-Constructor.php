<html>
  <head>
  <title>OOP - Accessing Parent Class</title>
  </head>
  <body>
  	<h1>Accessing Parent Class</h1>
    <?php  
      class Person {
			protected $variable;
			
			public function __construct() { 
				$this->variable = 'Parent Constructor';
			}
			
			public function message() {
				echo "<p>This is the Parent class message</p>";
			}
	  }

	  class Student extends Person {
		public function __construct() {
			//call constructor of Parent
			parent::__construct();
			echo "<h2><font color='blue'>".$this->variable."</font></h2>";
		}
		
		public function message() { //method overriding
			parent::message();
			echo "<p>This is the Child class message</p>";
		}
	  }
	  $objStudent = new Student();
	  $objStudent -> message();
    ?>  
  </body>
</html>

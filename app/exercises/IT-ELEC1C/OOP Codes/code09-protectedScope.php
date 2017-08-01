<html>
  <head>
  <title>OOP - Protected Scope</title>
  </head>
  <body>
  	<h1>Protected Scope Demo</h1>
    <?php  
      class Person {
		protected $name = 'default name';
	  }

	  class Student extends Person {
		public function testVisibility () {
			// this is allowed
			$this->name = 'Mon Zalameda';
			echo "<h2><font color='red'>".$this->name." is visible.</font></h2>";
		}
	  }
	
	  $objMonStudent = new Student();
	  $objMonStudent -> testVisibility();
	 // echo $objMonStudent ->name; //not allowed
    ?>  
    
  </body>
</html>


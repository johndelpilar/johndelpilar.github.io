<html>
  <head>
  <title>OOP</title>
  </head>
  <body>
    <?php  
      class Person {
      	var $name;
      	function __construct($name) {
      		$this->name = $name;
      		echo $this->name." is ";
      	}
      	
        function walk() {
        	echo "walking!";
        }  
      }
      $personObject = new Person("Mon Zalameda");  
      $personObject -> walk();
    ?>  
  </body>
</html>

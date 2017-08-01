<html>
  <head>
  <title>OOP</title>
  </head>
  <body>
    <?php  
	    class Person {
	    	function __construct($name) {
	    		echo $name." is ";
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

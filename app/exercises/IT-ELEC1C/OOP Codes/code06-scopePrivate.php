<html>
  <head>
  <title>OOP - Private Access Modifier</title>
  </head>
  <body>
  	<h1>OOP - Private Access Modifier</h1>
    <?php  
      class Person {
      	private $name;
      	function __construct($name) {
      		$this->name = $name;
      	}
      	
        function printName() {
        	echo $this->name;
        }  
      }
      $personObject = new Person("Mon Zalameda");  
      $personObject -> printName();
      
      //illegal access
      $personObject -> name = "Dirk Nowitzki";
    ?>  
  </body>
</html>

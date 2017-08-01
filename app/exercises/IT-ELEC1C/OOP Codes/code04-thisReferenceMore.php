<html>
  <head>
  <title>OOP - This Reference</title>
  </head>
  <body>
    <?php  
      class Person {
      	var $name;
      	function __construct($name) {
      		$this->name = $name;
      	}
      	
        function printName() {
        	echo $this->name;
        	print("<br/>");
        }  
      }
      $personObject = new Person("Mon Zalameda");  
      $personObject->printName();
      
      $anotherPerson = new Person("Dirk Nowitzki");
      $anotherPerson->printName();
    ?>  
  </body>
</html>

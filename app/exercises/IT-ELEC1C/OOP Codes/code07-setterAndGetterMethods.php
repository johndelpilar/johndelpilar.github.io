<html>
  <head>
  <title>OOP - Setter and Getter Methods</title>
  </head>
  <body>
  	<h1>OOP - Private Access Modifier</h1>
    <?php  
      class Person {
      	private $name;
      	function setName($name) {
      		$this->name = $name;
      	}
      	
        function getName() {
        	return $this->name;
        }  
      }
      $personObject = new Person();
      $personObject->setName("Mon Zalameda");
      echo "Name is ".$personObject->getName();
    ?>  
  </body>
</html>

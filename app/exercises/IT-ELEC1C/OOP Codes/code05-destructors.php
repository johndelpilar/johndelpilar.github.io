<html>
  <head>
  <title>OOP - Destructors Demo</title>
  </head>
  <body>
    <?php  
      class Person {
      	var $name;
      	function __construct($name) {
      		$this->name = $name;
      		echo $this->name." is created. <br/>";
      	}
      	
      	function __destruct() {
      		echo "<font color='red'>".$this->name." is destroyed.</font>";
      	}  
      }
      $personObject = new Person("Mon Zalameda");
    ?>  
  </body>
</html>

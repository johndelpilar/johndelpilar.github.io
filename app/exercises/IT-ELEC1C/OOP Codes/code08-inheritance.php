<html>
  <head>
  <title>OOP - Inheritance</title>
  </head>
  <body>
  	<h1>Inheritance Demo</h1>
    <?php  
      class Person {
      	public $name = 'Mon Zalameda';
      	
      	function printName() {
      		echo "<h2><font color='yellow'>"
      			.$this->name."</font></h2>";
      	}  
      }
      
      class Student extends Person {
      	function lovesPHP() {
      		echo "<h2><font color='red'>".$this->name
      			." likes PHP.</font></h2>";
      	}
      }
      
      $objMonZee = new Student();  
      echo "<h2><font color='blue'>"
      	.$objMonZee->name."</font></h2>";
      $objMonZee->printName();
      $objMonZee->lovesPHP();
    ?>  
  </body>
</html>


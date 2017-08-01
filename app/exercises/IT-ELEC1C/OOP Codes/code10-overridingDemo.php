<html>
  <head>
  <title>OOP - Overriding Demo</title>
  </head>
  <body>
  	<h1>Overriding Demo</h1>
    <?php  
      class Person {
      	function methodDomain() {
      		echo 
      			"<h2><font color='red'>called from Person class.</font></h2>";
      	}  
      }
      
      class Student extends Person {
      	function methodDomain() { //method overriding
      		echo "<h2><font color='blue'>called from Student class.</font></h2>";
      	}
      }

      $objPerson = new Person();
      $objStudent = new Student();  
    
      $objPerson->methodDomain();
      $objStudent->methodDomain();
    ?>  
  </body>
</html>


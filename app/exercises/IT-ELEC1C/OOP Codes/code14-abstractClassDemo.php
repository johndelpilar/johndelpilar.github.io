<html>
  <head>
  <title>OOP - Abstract Class</title>
  </head>
  <body>
  	<h1>Abstract Class Demo</h1>
    <?php  
	    abstract class AbstractPerson {
	    	private $name;
	    	abstract public function getName();
	    	abstract public function setName($name);
	    
	    	public function printName () {
	    		echo $this->getName();
	    	}
	    }
	    
    	class Person extends AbstractPerson {
    		public function getName (){
    			return $this -> name;
    		}
    		
    		public function setName($name) {
    			$this -> name = $name;
			}
    	}

    	$objPerson = new Person();
    	$objPerson -> setName('Mon Zalameda');
    	echo "<h2><font color='blue'>".$objPerson->getName()."</font></h2>";
    ?>  
   
  </body>
</html>

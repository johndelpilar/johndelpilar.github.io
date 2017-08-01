<html>
  <head>
  <title>OOP - Interface</title>
  </head>
  <body>
    <?php  
	    interface IPerson {
	    	function getName();
	    	function setName($name);
	    	function printName ();
	    }
	    
	    interface IMessage {
	    	public function displayMessage($message);
	    }
	    
    	class Person implements IPerson, IMessage {
    		private $name;
    		public function getName (){
    			return $this -> name;
    		}
    		
    		public function setName($name) {
    			$this -> name = $name;
			}
			
			public function printName () {
				echo $this->getName();
			}
			
			public function displayMessage($message) {
				echo "<h1><font color='red'>".$message."</font></h2>";
			}
    	}
    	$objPerson = new Person();
    	$objPerson -> setName('Mon Zalameda');
    	$objPerson -> displayMessage('This is a sample Interface demo.');
    	echo "<h2><font color='blue'>".$objPerson->getName()."</font></h2>";
    ?>  
  </body>
</html>

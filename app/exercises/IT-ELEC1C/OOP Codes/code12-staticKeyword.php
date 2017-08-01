<html>
  <head>
  <title>OOP - Static Keyword</title>
  </head>
  <body>
  	<h1>Static Keyword Demo</h1>
    <?php  
	    class Person {
	    	public static $name;
	    	public $message;
	    	
	    	public static function myPrint() {
	    		echo  "<h2><font color='blue'>"
    				.self::$name."</font></h2>";	
	    
	    	}
	    	
	    	public function printMessage() {
	    		//acccess the message varible here
	    		$this-> message = 'Jude De Pano';
	    		echo "<p>Hi ".$this->message."</p>";
			}
	    }
	    
	    Person::$name = 'Mon Zalameda';
	    Person::myPrint();
	    
	    //access the printMessage here
	    $objPerson = new Person();
	    $objPerson -> printMessage();
    ?>  
  </body>
</html>

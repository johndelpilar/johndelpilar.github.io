<html>
  <head>
  <title>OOP - Accessing Parent Class</title>
  </head>
  <body>
  	<h1>Accessing Parent Class</h1>
    <?php  
	    class Person {
	    	public static $name;
	    	
	    	public static function myPrint() {
	    		echo  "<h2><font color='blue'>".self::$name."</font></h2>";	
	    
	    	}
	    }
	    
	    Person::$name = 'Mon Zalameda';
	    Person::myPrint();
    ?>  
  </body>
</html>

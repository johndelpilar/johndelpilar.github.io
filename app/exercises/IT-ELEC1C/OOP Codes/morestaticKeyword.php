<html>
  <head>
  <title>OOP - Static Keyword</title>
  </head>
  <body>
  	<h1>Static Keyword Demo</h1>
    <?php  
	    class HardDrive {
	    	public $name;
	    	public static $counter = 0;
	    }
	    
	    $hardDrive1 = new HardDrive();
        $hardDrive1 -> name = "Hard Drive 1";
        HardDrive::$counter++;
      
        $hardDrive2 = new HardDrive();
        $hardDrive2 -> name = "Hard Drive 2";
        HardDrive::$counter++;
        
        $hardDrive3 = new HardDrive();
        $hardDrive3 -> name = "Hard Drive 3";
        HardDrive::$counter++;
        
        echo "<h2>Total Hard Drives Created: " . HardDrive::$counter . "</h2>"
    ?>  
  </body>
</html>

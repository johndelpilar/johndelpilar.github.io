<html>
  <head>
  <title>OOP</title>
  </head>
  <body>
    <?php  
    
      //USE of Constructors
      class MyClass  {  
        public $prop1 = "I'm a class property!";
          
        public function __construct() {  
          echo 'The class "', __CLASS__, '" was initiated!<br />';  
        }  
      
        public function setProperty($prop1)  {  
            $this->prop1 = $prop1;  
        }  
        
        public function getProperty()  {  
            return $this->prop1 . "<br />";  
        }  
      } 
      
      //multiple instances  
      $obj = new MyClass;  
      echo $obj->prop1;
      
      $obj->setProperty("<br/>Hello World");
      echo $obj->getProperty(); 
      
      
      $obj2 = new MyClass;
      $obj2->setProperty("<br/>I love PHP programming.");
      echo $obj2->getProperty(); 
    ?>  
  </body>
</html>

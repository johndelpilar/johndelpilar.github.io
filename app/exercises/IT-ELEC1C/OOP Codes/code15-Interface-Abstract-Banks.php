<html>
  <head>
  <title>OOP - Abstract Class</title>
  </head>
  <body>
  	<h1>Abstract Class Demo- Banks</h1>
    <?php  
	    abstract class BSP {
	    	public $depositorName;
	    	public $bankName = NULL;
	    	public $pesoAccountAmount = 0;
	    	
	    	public function greetCustomer() {
	    		echo "<h2>Welcome to " 
	    			.$this->bankName."</h2>";	
	    	} 
	    	
	    	abstract public 
	    		function openAccount($initialAmount);
	    	abstract public
	    		function deposit($additionalAmount);
	    	abstract public function withDraw($amount);
	    	abstract public function closeAccount();
	    }
	    
	    interface CreditCard {
	    	function applyCreditCard();	
	    	function purchaseItem($amount);
	    	function payItem($amount);
	    } 
	    
    	class BPI extends BSP implements CreditCard {
    		public $bankName = "Bank of the Philippine Islands";
    		
    		//override
    		public function openAccount($initialAmount) {
    			$this->depositorName = "Dirk Nowitzki";
    			$this->pesoAccountAmount = $initialAmount;
    			
    			echo "<p>Successfully opened an account for "
    				. $this->depositorName 	
    				. " with the amount of " .$initialAmount . "</p>";
    		}
    		
    		public function deposit($additionalAmount) {
    			$this->pesoAccountAmount += $additionalAmount;
    			echo "<p>Successfully deposited an additional "
    				. "amount of " .$additionalAmount . "</p>";
    			echo "<p>Total account is " 
    				. $this->pesoAccountAmount. "</p>";
    		}
    		
    		public function withDraw($amount) {
    			if ($this->pesoAccountAmount <= $amount) {
	    			$this->pesoAccountAmount -= $amount;
	    			echo "<p>Successfully withdraw an "
	    					. "amount of " .$amount . "</p>";
	    			echo "<p>Total account is "
	    					. $this->pesoAccountAmount. "</p>";
    			} else {
    				echo "<p>Invalid amount. </p>";
    			}	
    		}
    		
    		public function closeAccount() {
    			$this->pesoAccountAmount = 0;
    			echo "<p>Account successfully closed for "
    					. $this->depositorName . "</p>";
    		}
    		
    		//override all functions from CreditCard interface
    		public function applyCreditCard() {
    			echo "<p>" . $this->depositorName 
    				. " applies for a BPI Credit Card";
    		}
    		
    		public function purchaseItem($amount) {
    			echo "<p>" . $this->depositorName
    			. " purchased an amount of " . $amount;
    		}
    		
    		public function payItem($amount) {
    			echo "<p>" . $this->depositorName
    			. " pays an amount of " . $amount;
    		}
    		
    	}
	
    	$objDepositor = new BPI();
    	$objDepositor->greetCustomer();
    	$objDepositor->openAccount(5000);
    	$objDepositor->deposit(1000);
    	$objDepositor->withDraw(6000);
    	$objDepositor->closeAccount();
    	
    	//for credit card operations
    	$objDepositor -> applyCreditCard();
    	$objDepositor -> purchaseItem(500);
    	$objDepositor -> payItem(500);
    ?>
  </body>
</html>

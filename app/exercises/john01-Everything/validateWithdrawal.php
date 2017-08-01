<!DOCTYPE HTML>
<?php 
	session_start();
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=Cp1252">
<title>Everything</title>
</head>
    <body>
    	<?php 
	    	define("MIN_INITIAL_BALANCE", 100000);
	    	define("MAX_INITIAL_BALANCE", 500000);
	    	 
	    	class Person {
	    		protected $name;
	    	
	    		function __construct() {
	    			$this->name = NULL;
	    		}
	    	
	    		public function getName() {
	    			return $this->name;
	    		}
	    		public function setName($name) {
	    			$this->name = $name;
	    		}
	    	}
	    	 
	    	class Client extends Person {
	    		private $cardNum;
	    		private $isWithdrawing;
	    		private $pinNum;
	    		private $initialBalance;
	    	
	    		function __construct() {
	    			$this->cardNum = NULL;
	    			$this->isWithdrawing = NULL;
	    			$this->pinNum = NULL;
	    			$this->initialBalance = rand(MIN_INITIAL_BALANCE, MAX_INITIAL_BALANCE);
	    		}
	    	
	    		public function getCardNum() {
	    			return $this->cardNum;
	    		}
	    		public function setCardNum($cardNum) {
	    			$this->cardNum = $cardNum;
	    		}
	    	
	    		public function getIsWithdrawing() {
	    			return $this->isWithdrawing;
	    		}
	    		public function setIsWithdrawing($isWithdrawing) {
	    			$this->isWithdrawing = $isWithdrawing;
	    		}
	    	
	    		public function getPinNum() {
	    			return $this->pinNum;
	    		}
	    		public function setPinNum($pinNum) {
	    			$this->pinNum = $pinNum;
	    		}
	    	
	    		public function getInitialBalance() {
	    			return $this->initialBalance;
	    		}
	    		#	add setter iff only necessary
	    	}
	    	
	    	$client = new Client();
	    	$client = unserialize($_SESSION['clientInfo']);
	    	
	    	$totalAmount = $_POST['withdrawAmount'] * 1.02;
	    	
	    	setcookie("withdrawAmount", $_POST['withdrawAmount'], time() + (1 * 365 * 24 * 60 * 60));
	    	
	    	if ($totalAmount > $client->getInitialBalance()) {
	    		echo "<p>Total amount (withdraw amount and fee) exceeds balance.</p>";
	    		echo "<p>Click <a href='withdraw.php'>here</a> to go back.</p>";
	    	} else {
	    ?>
	    	<form action="confirmWithdrawal.php">
	    		Name: <?php echo $client->getName(); ?>
	    		<br>
	    		Card Number: <?php echo $client->getCardNum(); ?>
	    		<br>
	    		PIN Number: ****
	    		<br>
	    		Balance: &#8369; <?php echo $client->getInitialBalance(); ?>
	    		<br>
	    		<br>
	    		Withdraw Amount: &#8369; <?php echo $_POST['withdrawAmount']; ?>   
	    		<br>
	    		Withdraw Fee: &#8369; <?php echo $_POST['withdrawAmount'] * 0.02; ?>
	    		<br>
	    		Ending Balance: &#8369; <?php echo $client->getInitialBalance() - $totalAmount; ?>
	    		
	    		<br>
	    		<input type="button" value="Cancel" onclick="location.href='withdraw.php'">
	    		&nbsp;&nbsp;
	    		<input type="submit" value="Confirm Withdraw">
	    	</form>
	    <?php 
	    	}
    	?>
    </body>
</html>
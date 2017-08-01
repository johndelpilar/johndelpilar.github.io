<!DOCTYPE HTML> <!-- HTML 5 -->
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=Cp1252">
<title>Hands On Quiz</title>
</head>
    <body>
    <?php
		class Worker {
			var $hoursWorked;		
			var $dependents;

			var $grossPay;
			var $sssTax;
			var $hdmf;
			var $profIncomeTax;
			var $healthInsurance;
			var $netPay;
			
			function __construct() {
				$hoursWorked = NULL;
				$dependents = NULL;

				$grossPay = NULL;
				$sssTax = NULL;
				$hdmf = NULL;
				$profIncomeTax = NULL;
				$healthInsurance = NULL;
				$netPay = NULL;
			}
			
			private function computeGrossPay() {
				if ($this->hoursWorked > 40) {
					$this->grossPay = 500 * 40;
					$this->grossPay += 500 * ($this->hoursWorked - 40) * 1.5;
				} else {
					$this->grossPay = 500 * $this->hoursWorked;
				}
				
				return $this->grossPay;
			}
			
			private function computeTaxes() {
				$this->sssTax = $this->grossPay * 0.015;
				$this->hdmf = $this->grossPay * 0.03;
				$this->profIncomeTax = $this->grossPay * 0.10;
				$this->healthInsurance = ($this->dependents >= 3) ? 300 : 0;
				
				return $this->sssTax + $this->hdmf + $this->profIncomeTax + $this->healthInsurance;
			}
			
			function computePay() {
				$this->netPay = $this->computeGrossPay() - $this->computeTaxes();			
			}
			
			function printInfo() {
				echo "<h2>Worker Pay Details</h2>";
				echo "<p>Gross Pay = " . $this->grossPay . " pesos</p>";
				echo "<p>Social Security Tax = " . $this->sssTax . " pesos</p>";
				echo "<p>HDMF = " . $this->hdmf . " pesos</p>";
				echo "<p>Professional Income Tax = " . $this->profIncomeTax . " pesos</p>";
				echo "<p>Health Insurance = " . $this->healthInsurance . " pesos</p>";
				echo "<p>Net Take Home Pay for the Week = " . $this->netPay . " pesos</p>";
			}
			
			function writeToFile() {
				$fs = fopen("Payroll.csv", "a");
					
				fwrite($fs, $this->hoursWorked . "," . $this->grossPay . "," . $this->sssTax . ","
						. $this->hdmf . "," . $this->profIncomeTax . ","
								. $this->healthInsurance . "," . $this->netPay . "\n");
					
				fclose($fs);
			}
		}	
    	
		$worker = new Worker();
		
		$worker->hoursWorked = (int) $_GET["hoursWorked"];
		$worker->dependents = (int) $_GET["dependents"];
		$worker->computePay();
		$worker->printInfo();
		$worker->writeToFile();	
    	
		echo "<hr>";
		echo "Click <a href='index.php'>here</a> to try again";
	?>
	
    </body>
</html>




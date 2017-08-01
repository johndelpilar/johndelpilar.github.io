<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=Cp1252">
<title>Hands On 02 - Vehicle Coding</title>
</head>
	<style>
		body {
			color: whitesmoke;
			background-color: #202020;
			font-family: "Segoe UI";
			width: 90%;
			max-width: 512px;
			margin: 0 auto;
		}
		a:HOVER, a:ACTIVE, a:LINK, a:VISITED  {
			color: #00DDEE;
		}
		hr {
			border-width: 2px;
			border-style: solid;
			border-color: lightgray;
		}
	</style>
    <body>
    <h2>Hands-on 02 - Vehicle Coding</h2>
    <hr>
    <?php
    	interface LTO {
    		
    		public function checkPlateNumber();
    		
    		public function determineCodingDay();
    	}
    	
    	class LTOBusRegistration implements LTO {
    		
			private $busName = NULL;
			private $plateNum = NULL;
			private $driver = NULL;
			
			function __construct() {
				
			}
			
			public function checkPlateNumber() {
				$validPlateNum = true;
				if (!ctype_alpha(substr($this->plateNum, 0, 3))) {
					$validPlateNum = false;
				}
				if (!ctype_digit(substr($this->plateNum, 3))) {
					$validPlateNum = false;
				}
				
				return $validPlateNum;
			}
			
			public function determineCodingDay() {
				
				switch ($this->plateNum[5]) {
					case '1':
					case '2':
						$fs = fopen("coding_monday.csv", "a");
						fwrite($fs, $this->busName . "," . $this->plateNum . "," . $this->driver . "\n");
						fclose($fs);
						return "Monday";
						break;
					case '3':
					case '4':
						$fs = fopen("coding_tuesday.csv", "a");
						fwrite($fs, $this->busName . "," . $this->plateNum . "," . $this->driver . "\n");
						fclose($fs);
						return "Tuesday";
						break;
					case '5':
					case '6':
						$fs = fopen("coding_wednesday.csv", "a");
						fwrite($fs, $this->busName . "," . $this->plateNum . "," . $this->driver . "\n");
						fclose($fs);
						return "Wednesday";
						break;
					case '7':
					case '8':
						$fs = fopen("coding_thursday.csv", "a");
						fwrite($fs, $this->busName . "," . $this->plateNum . "," . $this->driver . "\n");
						fclose($fs);
						return "Thursday";
						break;
					case '9':
					case '0':
						$fs = fopen("coding_friday.csv", "a");
						fwrite($fs, $this->busName . "," . $this->plateNum . "," . $this->driver . "\n");
						fclose($fs);
						return "Friday";
						break;
				}
			}
			
			public function setBusName($busName) {
				$this->busName = $busName;
			}
			
			public function getBusName() {
				return $this->busName;
			}
			
			public function setPlateNum($plateNum) {
				$this->plateNum = $plateNum;
			}
			
			public function getPlateNum() {
				return $this->plateNum;
			}
			
			public function setDriver($driver) {
				$this->driver = $driver;
			}
			
			public function getDriver() {
				return $this->driver;
			}
			
			
    	}
    	
    	$vehicle = new LTOBusRegistration();
    	$vehicle->setBusName(htmlspecialchars($_GET["busName"]));
    	$vehicle->setPlateNum(htmlspecialchars($_GET["plateNum"]));
    	$vehicle->setDriver(htmlspecialchars($_GET["driver"]));
    		
    	if ($vehicle->checkPlateNumber()) {
    		echo "<p>The <b>" . $vehicle->getBusName() .
    		"</b> with plate number <b>" . $vehicle->getPlateNum() .
    		"</b> belongs to <b>" . $vehicle->determineCodingDay() .
    		"</b> coding. Assigned driver is <b>" . $vehicle->getDriver() . "</b>.</h3>";
    	} else {
    		echo "<h3>Plate number format is <b><font color='#FF3333'>invalid</font></b>!</p>";
    	}
    	
	?>
	
	<hr>
	<p>Click <a href='index.php'>here</a> to go back to the form.</p>
	
    <hr>
    <p style="font-size: x-small;"><i>CHEN, Patrick H.</i>
    <br><i>DEL PILAR, John Anthony P.</i>
    <br><i>3IT-H</i>
    <br><i>IT-ELEC1C</i></p>
    
    </body>
</html>
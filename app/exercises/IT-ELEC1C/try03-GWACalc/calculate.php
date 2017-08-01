<?php session_start() ?>
<!DOCTYPE HTML>
<html>
<head>
<link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
<link rel="stylesheet" href="css/font-awesome.css" type="text/css">
<meta http-equiv="Content-Type" content="text/html; charset=Cp1252">
<title>GWA Calculator</title>
<style type="text/css">
	body {
		color: whitesmoke;
		background-color: #202020;
		font-family: "Segoe UI";
		width: 90%;
		max-width: 500px;
		margin: 0 auto;
	}
	hr {
		border-width: 2px;
		border-style: solid;
		border-color: lightgray;
	}
	p {
		font-size: x-small;
	}
	th {
		padding: 0 10px;
	}
</style> 
</head>
    <body>
    <h2><i onclick="location.href='index.php'" class="fa fa-calculator" aria-hidden="true"></i> GWA Calculator</h2>
    <hr>
    <?php    
    	class Course {
    		
			private $code;
			
			private $unit;
			
			private $grade;
			
			static $courseArray = array();
			
			static $codeArray = array();
			
			static $unitArray = array();
			
			static $gradeArray = array();
			
			function __construct($code, $unit, $grade) {
				$this->code = $code;
				$this->unit = $unit;
				$this->grade = $grade;
			}
			
			public function getCode() {
				return $this->code;
			}
			
			public function getUnit() {
				return $this->unit;
			}
			
			public function getGrade() {
				return $this->grade;
			}
		
    	}
    	
    	foreach ($_GET['code'] as $code) {
    		Course::$codeArray[] = $code;
    	}
    	foreach ($_GET['unit'] as $unit) {
    		Course::$unitArray[] = $unit;
    	}
    	foreach ($_GET['grade'] as $grade) {
    		Course::$gradeArray[] = $grade;
    	}
    	
    	for ($i = 0; $i < count(Course::$codeArray); $i++) {
    		Course::$courseArray[] = new Course(Course::$codeArray[$i], Course::$unitArray[$i], Course::$gradeArray[$i]);
    	}

    	$_SESSION['codeArrayContent'] = Course::$codeArray;
    	$_SESSION['unitArrayContent'] = Course::$unitArray;
    	$_SESSION['gradeArrayContent'] = Course::$gradeArray;
    	
	?>
	<div id="calculate-main-block">
		<table align="center" class="table table-hover">
			<thead>
				<tr>
					<th>Code</th>
					<th>Unit</th>
					<th>Grade</th>
				</tr>
			</thead>
			<tbody>
				<?php 
				    $fs = fopen("gwa-calc-result.csv", "w");
				    fwrite($fs, "CODE,UNIT,GRADE\n");
				    
					$totalUnits = 0;
					$gwa = 0.0;
					foreach (Course::$courseArray as $course) {
						echo "<tr>";
						echo "<td>" . $course->getCode() . "</td>";
						echo "<td>" . $course->getUnit() . "</td>";
						echo "<td>" . $course->getGrade() . "</td>";
						echo "</tr>";
						
						fwrite($fs, $course->getCode() . "," . $course->getUnit() . "," . $course->getGrade() . "\n");
						
						$totalUnits += $course->getUnit();
						$gwa += $course->getUnit() * $course->getGrade();
					}
				?>
			<thead>
				<tr>
					<th>Total</th>
					<th><?php echo $totalUnits; ?></th>
					<th><?php echo $gwa / $totalUnits; ?></th>
					<?php 
						fwrite($fs, "TOTAL," . $totalUnits . "," . ($gwa / $totalUnits) . "\n");
						fclose($fs);
						
						$record = "logs/";
						$record .= date("Y-m-d H-i-s", time());
						$record .= ".csv";
						copy("gwa-calc-result.csv", $record);
					?>
				</tr>
			</thead>
		</table>
	</div>
	<div class="row">
		<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
			<a href="index.php"><input class="btn btn-primary btn-block" type="button" value="Back to Course Count"></a>
		</div>
		<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
			<a href="gwa-calc-result.csv" download><input class="btn btn-success btn-block" type="button" value="Download Results"></a>
		</div>
	</div>
	

    <hr>
    <p><i>DEL PILAR, John Anthony P.</i>
    <br><i>johnanthony.delpilar@gmail.com</i>
    <br><i>2014069455@ust-ics.mygbiz.com</i>
    <br><i>+63 917 670 1024</i></p>
    </body>
    
    <?php 
    	session_unset();
    	session_destroy();
    ?>
    
</html>
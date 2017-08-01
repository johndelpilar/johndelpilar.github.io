<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Frameset//EN">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=Cp1252">
<title>Hands On 01 - Array</title>
</head>
	<style>
		body {
			color: whitesmoke;
			background-color: black;
			font-family: "Montserrat Light";
			width: 40%;
			min-width: 320px;
			margin: 0 auto;
			padding-top: 240px;
		}
	</style>
    <body>
    <hr>
    <h2>Hands-on 01 - Array</h2>
    <hr>
    <?php
    	//	/*
    	define("ELEMENT_COUNT", 11);
   		$values = array();
   		
   		for ($count = 0; $count < ELEMENT_COUNT; $count++) {
   			$values[] = rand(-24, 25);
   		}
   		//	*/

    	//$values = array(5, -2, -8, 7, -3, -1, -6, 4, 9, 2, 1);
    
   		$average = 0;
   		$sum = 0;
   		$product = 1;
   		
   		for ($i = 0; $i < count($values); $i++) {
			$sum += $values[$i];
			$product *= $values[$i]; 
   		}
   		$average = $sum / count($values);
   		
   		echo "Array has <b>" . count($values) . "</b> elements.<br>";
   		echo "Array contains the following elements:<br>";
   		echo "<center>";
   		foreach ($values as $val) {
   			echo "<b>$val</b>&nbsp;&nbsp;";
   		}
   		echo "</center><hr>";
   		
   		sort($values);
   		$secondHighest = $values[1];
   		$secondLowest = $values[count($values)-2];
   		
   		echo "<table><tbody>";
   		echo "<tr><td>Average: </td><td><b>$average</b></td></tr>";
   		echo "<tr><td>Sum: </td><td><b>$sum</b></td></tr>";
   		echo "<tr><td>Product: </td><td><b>$product</b></td></tr>";
   		echo "<tr><td>Second Highest: </td><td><b>$secondHighest</b></td></tr>";
   		echo "<tr><td>Second Lowest: </td><td><b>$secondLowest</b></td></tr>";
   		echo "</table></tbody>";
   		echo "<hr>";
   		
   		echo "<small><i><b>DEL PILAR</b>, John Anthony P.</i></small>";
   		echo "<hr>";
	?>
    </body>
</html>
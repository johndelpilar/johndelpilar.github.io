<?php 
	session_start();
	
	if (!isset($_SESSION['sessionCtrMon'])) {
		$_SESSION['sessionCtrMon'] = 0;
	}
	if (!isset($_SESSION['sessionCtrTue'])) {
		$_SESSION['sessionCtrTue'] = 0;
	}
	if (!isset($_SESSION['sessionCtrWed'])) {
		$_SESSION['sessionCtrWed'] = 0;
	}
	if (!isset($_SESSION['sessionCtrThu'])) {
		$_SESSION['sessionCtrThu'] = 0;
	}
	if (!isset($_SESSION['sessionCtrFri'])) {
		$_SESSION['sessionCtrFri'] = 0;
	} 
?>
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
		hr {
			border-width: 2px;
			border-style: solid;
			border-color: lightgray;
		}
		th, td {
			padding: 0 10px;
		}
		a:HOVER, a:ACTIVE, a:LINK, a:VISITED  {
			color: #00DDEE;
		}
	</style>
    <body>
    <h2>Hands-on 02 - Vehicle Coding</h2>
    <hr>
    <fieldset>
    	<legend>Vehicle Coding Input Form</legend>
    	<form action="determineCoding.php">
    		<table align="center">
    			<tbody>
    				<tr>
    					<td>Enter Bus Name: </td>
    					<td><input type="text" name="busName" required="required"></td>
    				</tr>
    				<tr>
    					<td>Plate Number: </td>
    					<td><input type="text" name="plateNum" required="required" pattern=".{6,6}" title="6 characters"></td>
    				</tr>
    				<tr>
    					<td>Driver Assigned: </td>
    					<td><input type="text" name="driver" required="required"></td>
    				</tr>
    				<tr>
    					<td align="center"><input type="submit" value="Submit"></td>
    					<td align="center"><input type="reset"></td>
    				</tr>
    			</tbody>
    		</table>
    	</form>
    </fieldset>
    
    <hr>
	<table border="1">
		<thead>
			<tr>
				<th>Day</th>
				<th>Vehicle Count</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td>Monday</td>
				<td align="center"><?php echo $_SESSION['sessionCtrMon']; ?></td>
			</tr>
			<tr>
				<td>Tuesday</td>
				<td align="center"><?php echo $_SESSION['sessionCtrTue']; ?></td>
			</tr>
			<tr>
				<td>Wednesday</td>
				<td align="center"><?php echo $_SESSION['sessionCtrWed']; ?></td>
			</tr>
			<tr>
				<td>Thursday</td>
				<td align="center"><?php echo $_SESSION['sessionCtrThu']; ?></td>
			</tr>
			<tr>
				<td>Friday</td>
				<td align="center"><?php echo $_SESSION['sessionCtrFri']; ?></td>
			</tr>
		</tbody>
	</table>
	
	<hr>
	<p>Click <a href='reset.php'>here</a> to reset the session variables.</p>
    
    <hr>
    <p style="font-size: x-small;"><i>CHEN, Patrick H.</i>
    <br><i>DEL PILAR, John Anthony P.</i>
    <br><i>3IT-H</i>
    <br><i>IT-ELEC1C</i></p>
    </body>
</html>
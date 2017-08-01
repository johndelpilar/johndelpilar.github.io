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
		p {
			font-size: x-small;
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
    <p><i>CHEN, Patrick H.</i>
    <br><i>DEL PILAR, John Anthony P.</i>
    <br><i>3IT-H</i>
    <br><i>IT-ELEC1C</i></p>
    </body>
</html>
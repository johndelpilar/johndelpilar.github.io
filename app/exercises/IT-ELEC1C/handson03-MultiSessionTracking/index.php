<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=Cp1252">
<title>Multi-Session Tracking Demo</title>
</head>
    <body>
    <h1>Multi-Session Tracking Demo</h1>
    <fieldset>
    	<legend>Login Form</legend>
    	<form action="computegrade.php">
    		<p>Enter prelim grade: <input type="number" step="any" name="prelimGrade" size="25" required min="0" max="100"></p>
    		<p>Enter prefinal grade: <input type="number" step="any" name="prefinalGrade" size="25" required min="0" max="100"></p>
    		
    		<p>
    			<input type="submit" value="Compute" size="25">
    			&nbsp;&nbsp;&nbsp;&nbsp;
    			<input type="reset" size="25">
    		</p>
    	</form>
    </fieldset>
    </body>
</html>
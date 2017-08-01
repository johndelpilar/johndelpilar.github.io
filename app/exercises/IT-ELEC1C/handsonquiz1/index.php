<!DOCTYPE HTML> <!-- HTML 5 -->
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=Cp1252">
<title>Hands On Quiz</title>
</head>
    <body>
    <h2>Hands On Quiz</h2>
    <hr>
    <fieldset>
    	<legend>Work Hour Input Form</legend>
    	<form action="generatePay.php">
    		<p>Enter the number of hours worked this week: <input type="number" name="hoursWorked" 
    								required="required" min="1"></p>
    		<p>Enter the number of dependents: <input type="number" name="dependents" 
    								required="required" min="0"></p>
    		
    		<input type="submit" value="Generate Pay">
    		&nbsp;&nbsp;
    		<input type="reset">
    	</form>
    </fieldset>
    </body>
</html>
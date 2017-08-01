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
    	<legend>Deduction Computation Input Form</legend>
    	<form action="computeDeduction.php" method="post" onsubmit="return validate()">
    		<p>Client Name: <input type="text" name="clientName" required></p>
    		<p>Amount (in PhP): <input type="number" name="amount" id="amount" required min="0" step="0.01"></p>
    		<p>Account Type:
    			<select required name="accountType" id="accountType">
    				<option value="savings">Savings</option>
    				<option value="current">Current</option>
    			</select>
    		</p>
    		
    		<input type="submit" value="Compute Deduction">
    		&nbsp;&nbsp;
    		<input type="reset">
    	</form>
    </fieldset>
    
    <script type="text/javascript">
    	function validate() {
    		var accountType, amount;
    		accountType = document.getElementById('accountType').value;
    		amount = document.getElementById('amount').value;

    		if (accountType == "savings") {
    			if (amount < 200) {
    				alert("The amount you entered is too little. (200)");
    				return false;
    			}
    		} else if (accountType == "current") {
    			if (amount < 500) {
    				alert("The amount you entered is too little. (500)");
    				return false;
    			}
    		}
			return true;
        }
    </script>
    </body>
</html>

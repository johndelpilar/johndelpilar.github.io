<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=Cp1252">
<title>Everything</title>
</head>
    <body>
    	<form action="storeLoginInfo.php" method="post">
    		Name: <input type="text" name="name" required>
    		<br>
    		Card Number: <input type="text" name="cardNum" pattern="[0-9]{16,16}" title="Exactly 16 numbers. No spaces" required>
    		<br>
    		<input type="radio" name="isWithdrawing" value="isCheckingBalance" checked> Check balance
    		&nbsp;&nbsp;
    		<input type="radio" name="isWithdrawing" value="isWithdrawing"> Withdraw
    		<br><br>
    		
    		<input type="reset">
    		&nbsp;&nbsp;
    		<input type="submit">
    	</form>
    </body>
</html>
<!DOCTYPE HTML>
<?php 
	session_start();
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=Cp1252">
<title>Everything</title>
</head>
    <body>
    	<form action="validatePin.php" method="post">
    		<?php 
    			if (isset($_SESSION['pinAttemptCount'])) {
					if ($_SESSION['pinAttemptCount'] > 0) {
						echo "<p>Incorrect PIN!</p>";
						echo "<p>Attempt # " . $_SESSION['pinAttemptCount'] . " of 3</p><br>";				
		
						if ($_SESSION['pinAttemptCount'] >= 3) {
							session_unset();
							header("Location: index.php");
							exit();
						}
					}
    			}
    		?>
    		PIN Number: <input type="password" name="pinNum" pattern="[0-9]{4,4}" title="Exactly 4 numbers. No spaces" required>
    		<br>
    		<input type="submit">
    	</form>
    </body>
</html>
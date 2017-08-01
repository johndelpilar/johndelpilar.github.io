<!DOCTYPE HTML> <!-- HTML 5 -->
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=Cp1252">
<title>Login Form</title>
</head>
    <body>
    <h1>Welcome to PHP Session Demo</h1>
    <fieldset>
    	<legend>Login Form</legend>
    	<form action="processlogin.php" method="post">
    		<p>Enter user ID: <input type="text" name="userId" size="25" required></p>
    		<p>Enter password: <input type="password" name="userPassword" size="25" required></p>
    		
    		<p>
    			<input type="submit" value="Login" size="25">
    			&nbsp;&nbsp;&nbsp;&nbsp;
    			<input type="reset" size="25">
    		</p>
    	</form>
    </fieldset>
    </body>
</html>
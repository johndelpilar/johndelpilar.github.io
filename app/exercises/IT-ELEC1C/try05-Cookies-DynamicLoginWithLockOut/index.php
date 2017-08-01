<?php 
	if (isset($_COOKIE["username"])) {
		header("Location: welcome.php");
		exit();
	}

	define("ATTEMPT_LIMIT", 3);
	if (isset($_COOKIE["loginCtr"])) {
		if ($_COOKIE["loginCtr"] >= ATTEMPT_LIMIT) {
			header("Location: welcome.php");
			exit();
		}
	}
	
	
?>
<!DOCTYPE HTML >
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=Cp1252">
<title>Cookies-DynamicLogin - DEL PILAR</title>
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/font-awesome.min.css" type="text/css">
<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
    <body>
    <h2>Cookies - Dynamic Login</h2>
    <hr>
    <div id="index-main-block">
    	<form action="welcome.php" method="post">
    		<div class="row" align="center">
    			<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
    				<label for="username">Username: </label>
    			</div>
    			<div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
    				<input class="form-control" id="username" type="text" name="username" required>
    			</div>
    		</div>
    		<br>
    		<div class="row" align="center">
    			<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
    				<label for="password">Password: </label>
    			</div>
    			<div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
    				<input class="form-control" id="password" type="password" name="password" required>
    			</div>
    		</div>
    		<br>
    		<div class="row" align="center">
    			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
    				<input class="" id="remember" type="checkbox" name="remember"> Remember Me
    			</div>
    		</div>
    		<br>
    		<div class="row" align="center">
    			<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
    				<input class="btn btn-primary btn-block" type="submit" value="Login">
    			</div>
    			<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
    				<input class="btn btn-danger btn-block" type="reset">
    			</div>
    		</div>
    	</form>
    </div>
    <?php
		
	?>	
    </body>
</html>




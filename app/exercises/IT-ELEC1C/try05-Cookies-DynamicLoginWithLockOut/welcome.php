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
    <?php    	
    	define("USERNAME", "john_delpilar");
    	define("PASSWORD", "johnUST2018");
    	define("LOCKOUT_DURATION", 5);	//	in minutes
    	define("ATTEMPT_LIMIT", 3);
    	$isLockedOut = false;
    	
    	if (isset($_COOKIE["loginCtr"])) {

			if ($_COOKIE["loginCtr"] >= ATTEMPT_LIMIT) {
				
				echo "<h3>You have exceeded the number of login attempts.<br>";
				echo "Account is locked for " . LOCKOUT_DURATION . " minutes.</h3>";
				echo "<br>";
				echo "Click <a href='index.php'>here</a> to go back to the login page";
				echo "<hr>";
    			$isLockedOut = true;
    			
			}
    	}
    	
    	if (!$isLockedOut) {
    		if (isset($_COOKIE["username"])) {
		
				echo "<h4>Welcome back, " . $_COOKIE["username"] . "!</h4>";
				echo "<hr>";
				echo "<div id='welcome-main-block'>";
				echo "<form action='logout.php'>";
				echo "<div class='row' align='center'>";
				echo "<div class='col-xs-6 col-sm-6 col-md-6 col-lg-6'></div>";
				echo "<div class='col-xs-6 col-sm-6 col-md-6 col-lg-6'>";
				echo "<input class='btn btn-danger btn-block' type='submit' value='Logout'>";
				echo "</div>";
				echo "</div>";
				echo "</form>";
				echo "</div>";
					
			} else {
				if (htmlspecialchars($_POST["username"]) == USERNAME && htmlspecialchars($_POST["password"]) == PASSWORD) {
			
					if (isset($_POST["remember"])) {
						setcookie("username", USERNAME, time() + (1 * 365 * 24 * 60 * 60));
					}
			
					echo "<h4>Welcome, " . USERNAME . "!</h4>";
					echo "<hr>";
					echo "<div id='welcome-main-block'>";
					echo "<form action='logout.php'>";
					echo "<div class='row' align='center'>";
					echo "<div class='col-xs-6 col-sm-6 col-md-6 col-lg-6'></div>";
					echo "<div class='col-xs-6 col-sm-6 col-md-6 col-lg-6'>";
					echo "<input class='btn btn-danger btn-block' type='submit' value='Logout'>";
					echo "</div>";
					echo "</div>";
					echo "</form>";
					echo "</div>";
			
				} else {
					echo "<h4>Invalid credentials entered!</h4>";
			
					$attempts = 0;
			
					if (isset($_COOKIE["loginCtr"])) {
						$attempts = $_COOKIE["loginCtr"];
						
						setcookie("loginCtr", $_COOKIE["loginCtr"] + 1, time() + (LOCKOUT_DURATION * 60));
						echo "<h3>Attempt " . ++$attempts . " of " . ATTEMPT_LIMIT . "</h3>";
			
						if ($attempts >= ATTEMPT_LIMIT) {
							echo "<h3>You have exceeded the number of login attempts.<br>";
							echo "Account is locked for " . LOCKOUT_DURATION . " minutes.</h3>";
						}
							
					} else {
						setcookie("loginCtr", 1, time() + (LOCKOUT_DURATION * 60));
						$attempts = 1;
						echo "<h3>Attempt " . $attempts . " of " . ATTEMPT_LIMIT . "</h3>";
					}
			
			
					echo "<br>";
					echo "Click <a href='index.php'>here</a> to go back to the login page";
					echo "<hr>";
				}
			}
    	}
		
	?>	
</html>




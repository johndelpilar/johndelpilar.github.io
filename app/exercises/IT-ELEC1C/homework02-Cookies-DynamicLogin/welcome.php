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
    	class User {
    		private static $username = "john_delpilar";
    		
    		private static $password = "johnUST2018";
    		
    		public static function getUsername() {
    			return self::$username;
    		}
    		
    		public static function getPassword() {
    			return self::$password;
    		}
    	}
    
		if (isset($_COOKIE["username"])) {
			echo "<h4>Welcome back, " . $_COOKIE["username"] . "!</h4>";echo "<hr>";
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
			if (htmlspecialchars($_POST["username"]) == User::getUsername() && htmlspecialchars($_POST["password"]) == User::getPassword()) {
				
				if (isset($_POST["remember"])) {
					setcookie("username", User::getUsername(), time() + (1 * 365 * 24 * 60 * 60));
				} 

				echo "<h4>Welcome, " . User::getUsername() . "!</h4>";
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
				echo "<br>";
				echo "Click <a href='index.php'>here</a> to go back to the login page";				
				echo "<hr>";
			}
		}
	?>	
</html>




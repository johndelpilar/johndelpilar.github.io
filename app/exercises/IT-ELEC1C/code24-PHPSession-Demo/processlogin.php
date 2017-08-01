<?php 
	session_start();
	
	$userName = "";
	$userPassword = "";
	
	if (!empty($_POST['userId'])) {
		$userName = $_POST['userId'];
	}
	
	if (!empty($_POST['userPassword'])) {
		$userPassword = $_POST['userPassword'];
	}
	
	if ($userName == "johndelpilar" && $userPassword == "johnUST2018") {
		
		$_SESSION['user'] = $_POST['userId'];
		$_SESSION['message'] = "Welcome, ";
		
		echo "<h1><font color='blue'>Valid User. Please click <a href='showvalues.php'>here</a> to display session values.</font></h1>";
		
	} else {
		
		echo "<h1><font color='red'>Invalid User. Please click <a href='index.php'>here</a> to try again.</font></h1>";
		
		unset($_SESSION['user']);
		
	}

?>

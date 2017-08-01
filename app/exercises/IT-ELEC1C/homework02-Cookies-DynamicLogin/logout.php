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
    <?php
		setcookie("username", "", time() - (1 * 365 * 24 * 60 * 60));
		header("Location: index.php");
		exit();
	?>	
    </body>
</html>




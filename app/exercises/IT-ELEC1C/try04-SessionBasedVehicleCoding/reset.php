<?php 
	session_start();
?>
<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=Cp1252">
<title>Insert title here</title>
</head>
    <body>
   	<?php
		session_unset();
		session_destroy();
		header("Location: index.php");
		exit();
	?>
    </body>
</html>
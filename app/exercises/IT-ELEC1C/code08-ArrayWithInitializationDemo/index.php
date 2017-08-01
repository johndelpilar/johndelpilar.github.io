<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Frameset//EN">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=Cp1252">
<title>Array With Initialization Demo</title>
</head>
    <body>
    <h2>Array With Initialization Demo</h2>
    <?php
    	$subjects3ITH = array("IT-ELEC1C", "ICS 114", 
							"APP", "IT 204", "IT 204L",
    						"SCL 3", "ICS 133", "ICS 124");
    	
    	$subjects3ITH[] = "REC";

		echo "<h2>Subjects of 3ITH</h2>";
		echo "<p>There are<i><b> " . count($subjects3ITH) . "</b></i> subjects assigned.</p>";
		
		echo "<p>These are the following:</p>";
		
		for ($i = 0; $i < count($subjects3ITH); $i++) {
			echo "<p><b>" . $subjects3ITH[$i] . "</b></p>";
		}    	
    	
	?>
    </body>
</html>
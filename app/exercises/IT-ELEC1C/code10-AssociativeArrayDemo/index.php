<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Frameset//EN">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=Cp1252">
<title>Associative Array Demo</title>
</head>
    <body>
    <h2>Associative Array Demo</h2>
    <?php
    	$subjects3ITH = array("IT-ELEC1C", "ICS 114", 
							"APP", "IT 204", "IT 204L",
    						"SCL 3", "ICS 133", "ICS 124");
    	
    	$subjects3ITH[] = "REC";
    	
    	//	now create an array#2 that will be dependent on the first array
    	
    	$subjects3ITHProfessor = array(
    		$subjects3ITH[0]=>"Sir Raymond Christian Zalameda",
    		$subjects3ITH[1]=>"Sir Lawrence G. Decamora II",
    		$subjects3ITH[2]=>"Sir Ronald Bi&ntilde;as",
    		$subjects3ITH[3]=>"Ma'am Jerralyn T. Padua",
    		$subjects3ITH[4]=>"Ma'am Jerralyn T. Padua",
    		$subjects3ITH[5]=>"Sir Edgar Tuballo",
    		$subjects3ITH[6]=>"Sir Leonid C. Lintag",
    		$subjects3ITH[7]=>"Ma'am Mia V. Elezar",
    		$subjects3ITH[8]=>"Quennel Gio Y. Domingo"
    	);
    	
    	echo "<h2>The number of subjects is " . count($subjects3ITH) . "</h2>";
    	echo "<h2>The number of assigned professors is " . count($subjects3ITHProfessor) . "</h2>";

    	echo "<p>First subject is " . $subjects3ITH[0] . ". Assigned professor is " . $subjects3ITHProfessor[$subjects3ITH[0]] . ".</p>";
    	echo "<p>Second subject is " . $subjects3ITH[1] . ". Assigned professor is " . $subjects3ITHProfessor[$subjects3ITH[1]] . ".</p>";
    	echo "<p>Third subject is " . $subjects3ITH[2] . ". Assigned professor is " . $subjects3ITHProfessor[$subjects3ITH[2]] . ".</p>";
    	echo "<p>Fourth subject is " . $subjects3ITH[3] . ". Assigned professor is " . $subjects3ITHProfessor[$subjects3ITH[3]] . ".</p>";
      		
    	
	?>
    </body>
</html>
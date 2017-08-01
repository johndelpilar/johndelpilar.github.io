<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Frameset//EN">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=Cp1252">
<title>Array Declaration With Initialization Demo - String Index</title>
</head>
    <body>
    <h2>Array Declaration With Initialization Demo - String Index</h2>
    <?php
    	$subjects3ITH["IT-ELEC1C"] = "IT Elective I - PHP";
    	$subjects3ITH["ICS 114"] = "Computer Programming IV - Enterprise Programming";
    	$subjects3ITH["APP"] = "Art Appreciation";
    	$subjects3ITH["IT 204"] = "Network Architectures, Management and Security";
    	$subjects3ITH["IT 204L"] = "Network Architectures, Management and Security - Lab";
    	$subjects3ITH["SCL 3"] = "The Social Teachings of the Church";
    	$subjects3ITH["ICS 133"] = "Computer Security and Information Assurance";
    	$subjects3ITH["ICS 124"] = "Software Engineering II";
    	$subjects3ITH["REC"] = "Ultimate Recess";
    
	    echo "<h2>Subjects of 3ITH</h2>";
	    echo "<p>There are<i><b> " . count($subjects3ITH) . "</b></i> subjects assigned.</p>";
	    
	    echo "<p>These are the following:</p>";

	    echo "<p>" . $subjects3ITH["IT-ELEC1C"] . "</p>";
	    echo "<p>" . $subjects3ITH["ICS 114"] . "</p>";
	    echo "<p>" . $subjects3ITH["APP"] . "</p>";
	    echo "<p>" . $subjects3ITH["IT 204"] . "</p>";
	    echo "<p>" . $subjects3ITH["IT 204L"] . "</p>";
	    echo "<p>" . $subjects3ITH["SCL 3"] . "</p>";
	    echo "<p>" . $subjects3ITH["ICS 133"] . "</p>";
	    echo "<p>" . $subjects3ITH["ICS 124"] . "</p>";
	    echo "<p>" . $subjects3ITH["REC"] . "</p>";
	    
	    echo "<hr size='10' color='red'>";
	    echo "<p>Using reset(), key(), and next() function array iterators.</p>";
	    $counter = 1;
	    for (reset($subjects3ITH); $subjectKey = key($subjects3ITH); next($subjects3ITH)) {
	    	echo "<p>" . $counter++ . ". <b><i>" . $subjectKey . "</i></b> is " . $subjects3ITH[$subjectKey] . "</p>";
	    }
	    
	    echo "<hr>";
	    foreach ($subjects3ITH as $subject) {
	    	echo "<p>" . $subject . "</p>";
	    }
    
	?>
    </body>
</html>
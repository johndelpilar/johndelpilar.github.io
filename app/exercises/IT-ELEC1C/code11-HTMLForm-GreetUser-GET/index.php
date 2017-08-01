<!DOCTYPE HTML>	<!-- This doctype means that the document is now in HTML5 -->
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=Cp1252">
<title>Greet User Application</title>
</head>
    <body>
    	<h2>Greet User Application</h2>
    	<fieldset>
    		<legend>Greet Input Form</legend>
    		<form action="greetuser.php">
    			<p>Enter your name: <input type="text" name="userName" required="required"></p>
    			<p>Enter your school: <input type="text" name="userSchool" required="required"></p>
    			<p>Enter your course: <input type="text" name="userCourse" required="required"></p>
    			<p>Enter your year level: <input type="number" name="userYearLevel" required="required" min="1" max="4"></p>
    			<input type="submit" value="Greet User">
    			&nbsp;&nbsp;
    			<input type="reset">
    		</form>
    	</fieldset>
    </body>
</html>
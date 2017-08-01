<?php session_start() ?>
<!DOCTYPE HTML>
<html>
<head>
<link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
<link rel="stylesheet" href="css/font-awesome.css" type="text/css">
<script src="js/jquery-latest.min.js" type="text/javascript"></script>
<script src="js/hidden-prompt.js" type="text/javascript"></script>
<meta http-equiv="Content-Type" content="text/html; charset=Cp1252">
<title>GWA Calculator</title>
<style type="text/css">
	body {
		color: whitesmoke;
		background-color: #202020;
		font-family: "Segoe UI";
		width: 90%;
		max-width: 500px;
		margin: 0 auto;
	}
	hr {
		border-width: 2px;
		border-style: solid;
		border-color: lightgray;
	}
	p {
		font-size: x-small;
	}
	a#hidden {
		text-decoration: none;
		color: whitesmoke;
		background-color: #202020;
	}
</style>
</head>
    <body>
    <h2><i onclick="location.href='index.php'" class="fa fa-calculator" aria-hidden="true"></i> GWA Calculator</h2>
    <hr>
    <div id="index-main-block">
    	<form action="form.php">
    		<div class="row" align="center">
    			<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
    				<label for="courseCount">Course Count: </label>
    			</div>
    			<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
    				<input class="form-control" id="courseCount" type="number" name="courseCount" required min="1" max="99">
    			</div>
    		</div>
    		<br>
    		<div class="row" align="center">
    			<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
    				<input class="btn btn-primary btn-block" type="submit" value="Submit">
    			</div>
    			<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
    				<input class="btn btn-danger btn-block" type="reset">
    			</div>
    		</div>
    	</form>
    </div>
    <hr>
    <iframe id="invisible" style="display:none;"></iframe>
    <p><i>DEL PILAR, John Anthony P.</i>
    <br><i>johnanthony.delpilar@gmail.com</i>
    <br><i>2014069455@ust-ics.mygbiz.com</i>
    <br><i><a id="hidden">+</a>63 917 670 1024</i></p>
    </body>
</html>

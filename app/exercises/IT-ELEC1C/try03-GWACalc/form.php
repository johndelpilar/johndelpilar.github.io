<?php session_start() ?>
<!DOCTYPE HTML>
<html>
<head>
<link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
<link rel="stylesheet" href="css/font-awesome.css" type="text/css">
<script src="js/jquery-latest.min.js" type="text/javascript"></script>
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
	th, td {
		padding: 5px 15px;
	}
</style>
</head>
    <body>
    <h2><i onclick="location.href='index.php'" class="fa fa-calculator" aria-hidden="true"></i> GWA Calculator</h2>
    <hr>
    <div id="form-main-block">
	    <form action="calculate.php">
	    	<div align="center">
	    		<table align="center" class="table table-hover">
					<thead>
						<tr>
							<th>Code</th>
							<th>Unit</th>
							<th>Grade</th>
						</tr>
					</thead>
					<tbody id="form-grade-input-body">
						<?php 
							for ($i = 0; $i < (int) $_GET['courseCount']; $i++) {
								echo "<tr>";
								echo "<td><input class='form-control' type='text' name='code[]' required pattern='.{1,20}'></td>";
								echo "<td><input class='form-control' type='number' name='unit[]' required min='1' max='99'></td>";
								echo "<td align='center'>"; 
								echo "<select class='form-control' name='grade[]' required>";
								echo "<option>1.00</option>";
								echo "<option>1.25</option>";
								echo "<option>1.50</option>";
								echo "<option>1.75</option>";
								echo "<option>2.00</option>";
								echo "<option>2.25</option>";
								echo "<option>2.50</option>";
								echo "<option>2.75</option>";
								echo "<option>3.00</option>";
								echo "<option>5.00</option>";
								echo "</select>";
								echo "</td>";
								echo "</tr>";	
							}
						?>
					</tbody>
				</table>
	    	</div>
	    	<br>
	    	<div class="row">
	    		<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
	    			<a href="index.php"><input class="btn btn-warning btn-block" type="button" value="Back"></a>
	    		</div>
	    		<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
	    			<input class="btn btn-danger btn-block" type="reset" onclick="location.reload()">
	    		</div>
	    		<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
	    			<input id="add-row" class="btn btn-info btn-block" type="button" value="Add Row">
	    		</div>
	    		<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
	    			<input class="btn btn-primary btn-block" type="submit" value="Calculate">
	    		</div>
	    	</div>
	    </form>
    </div>
 
    <hr>
    <p><i>DEL PILAR, John Anthony P.</i>
    <br><i>johnanthony.delpilar@gmail.com</i>
    <br><i>2014069455@ust-ics.mygbiz.com</i>
    <br><i>+63 917 670 1024</i></p>
    </body>
    
    <script type="text/javascript">
		$(document).ready(function() {
			$('#add-row').click(function() {
				$('<tr></tr>').load('form-table-body.html', function() {
					$('#form-grade-input-body').append($(this));
				});
			});
		});
    </script>
</html>
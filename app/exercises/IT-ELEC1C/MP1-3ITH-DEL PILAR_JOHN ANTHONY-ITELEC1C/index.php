<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Frameset//EN">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=Cp1252">
<title>Registration Form - DEL PILAR</title>
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
    <body>
    <?php
		$studentNum = 2014069455;
		$m = 'M';	
		$lastName = "DEL PILAR";
		$firstName = "JOHN ANTHONY";
		$mi = 'P';
		$houseNum = 435;
		$street = "CRAIG EXTENSION ST.";
		$city = "SAMPALOC, MANILA";
		$phoneNum = 7439372;
		$year = "3rd Year";
		$academicYear = "2016-2017";
		$term = "2nd Semester";
		$termCode = "#01";
		$collegeCode = 26;
		$college = "IICS";
		$programCode = 02;
		$program = "INFORMATION TECHNOLOGY";
		$curriculumCode = 2; 
	?>
	
	<br>
	
	<div id="header" class="row">
		<div class="col-md-2 col-sm-2 col-xs-2">
			<p class="label">Registration Form</p>
			<br>
			<p class="label">Form No. 1</p>
		</div>
		
		<div class="col-md-8 col-sm-8 col-xs-8 center-text">
			<table align="center">
				<tbody>
					<tr>
						<td>
							<img src="images/ust-logo.png" height="75px" alt="ust logo">
						</td>
						<td>
							<h4>&nbsp;<b>UNIVERSITY OF SANTO TOMAS</b></h4>
							<h6>
								Espa&ntilde;a Blvd., Manila 1015<br>
								Tel. (632) 406.1611 <b>&sdot;</b> <a href="http://www.ust.edu.ph/">www.ust.edu.ph</a>
							</h6>
						</td>
					</tr>
				</tbody>
			</table>
		</div>
		
		<div class="col-md-2 col-sm-2 col-xs-2">
			<p class="label">Student's Copy</p>
			<p class="field"><strong>INV 16-1259633</strong></p>
			<img src="images/DEL_PILAR-pic.png" height="75px" align="right" alt="1x1 pic">
		</div>
	</div>
	
	
	
	<div id="information">
		<table>
			<tbody>
				<tr>
					<td class="label">Student No.:</td>
					<td class="field-special"><?php echo $studentNum . "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;" . $m; ?></td>
					
					<td class="label">Year:</td>
					<td class="field"><?php echo $year; ?></td>
					
					<td class="label">AY/Term:</td>
					<td class="field"><?php echo $academicYear . " " . $term . " " . $termCode; ?></td>
				</tr>
				<tr>
					<td class="label">Name:</td>
					<td class="field" colspan="3"><?php echo $lastName . "," . $firstName . " " . $mi; ?></td>
					
					<td class="label">College:</td>
					<td class="field"><?php echo $collegeCode . " " . $college; ?></td>
				</tr>
				<tr>
					<td class="label" rowspan="2">Address:</td>
					<td class="field" colspan="3" rowspan="2"><?php echo $houseNum . " " . $street . ", " . $city . "<br>" . $phoneNum; ?></td>
										
					<td class="label">Program/Major:</td>
					<td class="field"><?php echo $programCode . " " . $program; ?></td>
				</tr>
				<tr>				
					<td class="label"></td>
					<td class="field"></td>
					
					<td class="label">Curriculum Code:</td>
					<td class="field"><?php echo $curriculumCode; ?></td>
				</tr>
			</tbody>
		</table>
		<p>26-02</p>
	</div>
	
	
	
	<div id="courses">
		<table style="width: 100%;">
			<thead>
				<tr>
					<th style="width: 25%;">Course</th>
					<th style="width: 10%;">Section</th>
					<th style="width: 5%;">Lec</th>
					<th style="width: 5%;">Lab</th>
					<th style="width: 25%;">Class Schedule</th>
					<th style="width: 20%;">Room</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td>01. APP</td>
					<td>3ITH</td>
					<td class="unit-align">3.00</td>
					<td class="unit-align">.00</td>
					<td class="class-schedule">
						F &nbsp;03:00pm - 04:00pm<br>
						MW 03:00pm - 04:00pm
					</td>
					<td class="class-schedule">
						4th Flr. Rm. 48<br>
						5th Flr. Rm. 58
					</td>
				</tr>
				<tr>
					<td>02. ICS 114 &nbsp;&nbsp;&nbsp;<img src="images/sign-ics-114.png" height="40px" style="vertical-align: top;"></td>
					<td>3ITH</td>
					<td class="unit-align">3.00</td>
					<td class="unit-align">1.00</td>
					<td class="class-schedule">
						S &nbsp;03:00pm - 06:00pm<br>
						S &nbsp;01:00pm - 02:00pm
					</td>
					<td class="class-schedule">
						4th Flr. Rm. 46<br>
						3rd Flr. Rm. ICS LAB3
					</td>
				</tr>
				<tr>
					<td>03. ICS 124<img src="images/sign-ics-124.png" height="20px" style="vertical-align: top;"></td>
					<td>3ITH</td>
					<td class="unit-align">3.00</td>
					<td class="unit-align">1.00</td>
					<td class="class-schedule">
						W &nbsp;04:00pm - 05:00pm<br>
						Th 05:00pm - 07:00pm<br>
						M &nbsp;02:00pm - 03:00pm
					</td>
					<td class="class-schedule">
						5th Flr. Rm. 58<br>
						5th Flr. Rm. 56<br>
						4th Flr. Rm. 46
					</td>
				</tr>
				<tr>
					<td>04. ICS 133 <img src="images/sign-ics-133.png" height="25px" style="vertical-align: top;"></td>
					<td>3ITH</td>
					<td class="unit-align">3.00</td>
					<td class="unit-align">.00</td>
					<td class="class-schedule">
						S &nbsp;10:00am - 01:00pm
					</td>
					<td class="class-schedule">
						3rd Flr. Rm. 314
					</td>
				</tr>
				<tr>
					<td>05. IT 204</td>
					<td>3ITH</td>
					<td class="unit-align">2.00</td>
					<td class="unit-align">.00</td>
					<td class="class-schedule">
						W &nbsp;05:00pm - 07:00pm
					</td>
					<td class="class-schedule">
						5th Flr. Rm. 58
					</td>
				</tr>
				<tr>
					<td>06. IT 204L<img src="images/sign-it-204l.png" height="40px" style="vertical-align: top;"></td>
					<td>3ITH</td>
					<td class="unit-align">.00</td>
					<td class="unit-align">1.00</td>
					<td class="class-schedule">
						F &nbsp;04:00pm - 07:00pm
					</td>
					<td class="class-schedule">
						3rd Flr. Rm. ICS LAB3
					</td>
				</tr>
				<tr>
					<td>07. SCL 3<img src="images/sign-scl-3.png" height="40px" style="vertical-align: top;"></td>
					<td>3ITH</td>
					<td class="unit-align">3.00</td>
					<td class="unit-align">.00</td>
					<td class="class-schedule">
						M &nbsp;05:00pm - 07:00pm<br>
						S &nbsp;06:00pm - 07:00pm
					</td>
					<td class="class-schedule">
						5th Flr. Rm. 58<br>
						4th Flr. Rm. 46
					</td>
				</tr>
				<tr>
					<td>08. IT-ELEC1C<img src="images/sign-it-elec1c.png" height="50px" style="vertical-align: top;"></td>
					<td>3ITH</td>
					<td class="unit-align">3.00</td>
					<td class="unit-align">.00</td>
					<td class="class-schedule">
						Th 01:00pm - 04:00pm
					</td>
					<td class="class-schedule">
						5th Flr. Rm. 55
					</td>
				</tr>
				<tr>
					<td></td>
					<td></td>
					<td class="unit-align" colspan="2"><br>Total Units : 23.00</td>
					<td></td>
					<td></td>
				</tr>
			</tbody>
		</table>
	</div>
	
	<br><br><br><br><br><br>
	
	<div id="finance">
		<table style="width: 100%;">
			<thead>
				<tr>
					<th style="width: 20%">Fee Category</th>
					<th style="width: 20%;">Amount</th>
					<th style="max-width: 99%;"></th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td>MISC</td>
					<td class="amount">6,081.00</td>
					<td rowspan="4"></td>
				</tr>
				<tr>
					<td>OTHER CHARGES</td>
					<td class="amount">3,407.00</td>
				</tr>
				<tr>
					<td>OTHER FEES</td>
					<td class="amount">8,468.00</td>
				</tr>
				<tr>
					<td>TUITION</td>
					<td class="amount">35,932.00</td>
				</tr>
			</tbody>
		</table>
	</div>
	
	
	
	<div id="payment">
		<img style="margin-left: 40%;" src="images/id-sticker-issued.png" height="150px" align="" alt="id sticker issued">
		<table>
			<tbody>
				<tr>
					<td class="label">Total Fees - Vat Exempt</td>
					<td class="field">53,888.00</td>
					<td class="label"></td>
					<td class="field"></td>
					<td class="label"></td>
					<td class="field"></td>
				</tr>
				<tr>
					<td class="label">Payment Term:</td>
					<td class="field">FULL PAYMENT</td>
					<td class="label">Due Prelims:</td>
					<td class="field">.00</td>
					<td class="label"></td>
					<td class="field"></td>
				</tr>
				<tr>
					<td class="label">Initial Payment:</td>
					<td class="field"><img src="images/init-payment-circle.png" height="80px" style="position: absolute; left: 485px; top: 975px;">53,888.00</td>
					<td class="label">Due Finals:</td>
					<td class="field">.00</td>
					<td class="label"></td>
					<td class="field"></td>
				</tr>
				<tr>
					<td class="label">&nbsp;&nbsp;&nbsp;&nbsp;</td>
					<td class="field">&nbsp;&nbsp;&nbsp;&nbsp;</td>
					<td class="label">Assessed by:</td>
					<td class="field">SBS_USER15</td>
					<td class="label">Date:</td>
					<td class="field">01/06/2017</td>
				</tr>
			</tbody>
		</table>
	</div>
	
	
	<div id="agreement">
		<table style="width: 100%;">
			<tbody>
				<tr>
					<td>
						<p>
							<b>TO THE DEAN / REGISTRAR:</b><br>
							I shall abide by all existing rules and regulations of the University and those that<br>
							may be promulgated from time to time.
						</p>
						<div class="img-with-text">
							<img style="position: relative; top: 15px;" src="images/signature-date.png" height="50px" align="center" alt="signature and date">
							<p class="signature">
								&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Student's Signature / Date &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
							</p>
						</div>
					</td>
					<td>
						<b>
							Please see <a href="reverse-side.php">reverse side</a> for additional enrollment<br><br>
							procedures and policy on school charges and<br><br>
							refund of fees
						</b>
					</td>
				</tr>
			</tbody>
		</table>
		<h5><b>UST:S004-04-F003</b></h5>
	</div>
	
	
	
	<div id="vertical-text">
		<p class="rotate">BIR PERMIT NO.: 0314-126-00129CAS DATED 03.31.2014</p>
	</div>
	
	
	
	<br><br><br><br>
	
    </body>
</html>




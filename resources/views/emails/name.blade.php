<?php
$result = "";
if ($gala == "withDinner") {
    $result = "Workshop with dinner (223€)";
} else if ($gala == "onlyEvent") {
    $result = "Workshop without dinner (180€)";
} else if ($gala == "eventPlusVisit") {
    $result = "Workshop with dinner, with reservation to the guided visit of the Alhambra (223€)";
} else if ($gala == "eventPlusVisitMinusDinner") {
    $result = "Workshop without dinner, with reservation to the guided visit of the Alhambra (223€)";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta content="width=device-width, initial-scale=1.0" name="viewport">
	<meta content="ie=edge" http-equiv="X-UA-Compatible">
	<title>GATK registration email</title>
</head>
<body style=" @import url('https://fonts.googleapis.com/css?family=Lato&display=swap'); background-color: #e0e0e0; color: #333; font-family:Lato; img{ -ms-interpolation-mode:bicubic; } body{ -webkit-text-size-adjust:100%; } h2{ color:#0066CC !important; }">
	<div style="margin-left: 20px">
		<p style="font-size:20px;">Dear <b>{{ $name }},</b></p>
		<p>Thank you for submitting your pre-registration to attend the GATK Workshop 2019 in Granada, Spain. Your pre-registration has now been saved in our database.</p><br>
		<p>Please, in order to prepare an invoice we need you to provide us with your <b>tax information:</b></p><b></b>
		<div style="margin-left: 20px; align-content: center; padding: 15px; background-color:white; border-radius: 25px; background: #ffffff; padding: 20px; width: 480px;">
			<p><b>Full name</b></p>
			<p><b>NIE / CIF</b></p>
			<p><b>Organization, institution.</b></p>
			<p><b>Billing Address</b></p>
		</div>
		<p>In order to address the invoice <b>to your institution</b>, please indicate the detailed information for your billing, otherwise we will address the invoice to you.</p><!-- <p>Should you need an invoice, please inform us of the correct invoicing address, (if different from the address above and the VAT number if applicable, that information needs to be received within 24 hours). Invoices will become available online two weeks upon receipt of remittance. </p> -->
		<p>Finally, you need to make the deposit and send the proof of income to the following email:<br>
		<b>secretariatecnica-clinbioinfosspa.fps@juntadeandalucia.es</b></p><br>
		<p><i>You have chosen the following reservation in your registration:</i></p>
		<ul>
			<li><b>Full name:</b> {{ $name }}.</li>
			<li><b>Position:</b> {{ $institution }}.</li>
			<li><b>Organization, institution:</b> {{ $position }}.</li>
			<li><b>Reservation plan:</b> {{ $result }}.</li>
		</ul>
		<p>If you have checked the box of the reservation of the visit to the Alhambra, you should keep in mind that it is <b>only a reservation.</b></p>
		<p>The visit of the Alhambra <b>must be paid in the location of the course</b>, it's not possible to include the fee in the transference.</p><br>
		<div style=" margin-left: 20px; align-content: center; padding: 15px; background-color:white; border-radius: 25px; background: #ffffff; padding: 20px; width: 815px;">
			<h3>Payment via Bank transfer</h3>
			<h4>Bank Account Details</h4>
			<h4></h4>
			<p><b>Account holder:</b> Fundación Progreso y Salud</p>
			<p><b>IBAN:</b> ES1101825566790011503217</p>
			<p><b>BIC/SWIFT:</b> BBVAESMMXXX</p>
			<p><b>Bank:</b> BBVA</p>
			<p>PLEASE MENTION YOUR NAME FOLLOWED BY "GATK Workshop 2019" IN YOUR PAYMENT REFERENCE.</p>
		</div><br>
		<p>Once the payment has been registered in our system you will receive a confirmation email.</p><br>
		<p style="/* margin: 20px; */"><b>Best regards,<br>
		Clinical Bioinformatics Area team.</b></p>
		<div style="padding: 20px;background-color: #b9b9b9;color: white;align-items: center;">
			<a href="http://www.clinbioinfosspa.es" rel="noopener noreferrer" target="_blank"><img alt="cba logo" src="http://www.clinbioinfosspa.es/files/image/logo-CBA.png" style="height: 75px;"></a> <a href="https://software.broadinstitute.org/gatk/" rel="noopener noreferrer" target="_blank"><img alt="gatk logo" src="http://www.clinbioinfosspa.es/files/image/logoGATK1.png" style="height: 75px;"></a><a href="https://www.broadinstitute.org/" rel="noopener noreferrer" target="_blank"><img alt="broad logo" src="http://www.clinbioinfosspa.es/files/image/logoGATK.png" style="height: 70px;"></a>
		</div>
	</div>
</body>
</html>
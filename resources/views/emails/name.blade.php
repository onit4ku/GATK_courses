<?php
$result = "";
if ($gala == "withDinner") {
    $result = "Workshop with dinner (223€)";
} else {
    $result = "Workshop without dinner (180€)";
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta content="text/html; charset=utf-8" http-equiv="Content-Type">
	<title>GATK registration email</title>
	<style type="text/css">
	      @media only screen and (max-width: 550px), screen and (max-device-width: 550px) {
	       body[yahoo] .hide {
	         display: none!important;
	       }

	       body[yahoo] .buttonwrapper {
	         background-color: transparent!important;
	       }

	       body[yahoo] .button {
	         padding: 0px!important;
	       }

	       body[yahoo] .button a {
	         background-color: #e05443;
	         padding: 15px 15px 13px!important;
	       }

	       body[yahoo] .unsubscribe {
	         display: block;
	         margin-top: 20px;
	         padding: 10px 50px;
	         background: #2f3942;
	         border-radius: 5px;
	         text-decoration: none!important;
	         font-weight: bold;
	       }
	      }
	</style>
</head>
<body bgcolor="#F6F8F1" style="margin: 0; padding: 0; min-width: 100%;">
	<table bgcolor="#F6F8F1" border="0" cellpadding="0" cellspacing="0" width="100%">
		<tr>
			<td>
				<!--[if (gte mso 9)|(IE)]>
      <table width="600" align="center" cellpadding="0" cellspacing="0" border="0">
        <tr>
          <td>
    <![endif]-->
				<table align="center" bgcolor="#FFFFFF" border="0" cellpadding="0" cellspacing="0" class="content" style="width: 100%; max-width: 600px;" width="100%">
					<tr>
						<td bgcolor="#1B63C0" class="header" style="padding: 40px 30px 20px 30px;">
							<table align="left" border="0" cellpadding="0" cellspacing="0" width="70">
								<tr>
									<td height="70" style="padding: 0 20px 20px 0;"><img alt="" border="0" class="fix" height="70" src="http://clinbioinfosspa.es/files/image/fps-blanco.png" style="height: auto;" width="70"></td>
								</tr>
							</table><!--[if (gte mso 9)|(IE)]>
            <table width="425" align="left" cellpadding="0" cellspacing="0" border="0">
              <tr>
                <td>
          <![endif]-->
							<table align="left" border="0" cellpadding="0" cellspacing="0" class="col425" style="width: 100%; max-width: 425px;">
								<tr>
									<td height="70">
										<table border="0" cellpadding="0" cellspacing="0" width="100%">
											<tr>
												<td class="subhead" style="font-size: 15px; color: #ffffff; font-family: sans-serif; letter-spacing: 10px; padding: 0 0 0 3px;">Pre-registration Email</td>
											</tr>
											<tr>
												<td class="h1" style="color: #ffffff; font-family: sans-serif; font-size: 33px; line-height: 38px; font-weight: bold; padding: 5px 0 0 0;">Dear {{ $name }}</td>
											</tr>
										</table>
									</td>
								</tr>
							</table><!--[if (gte mso 9)|(IE)]>
                </td>
              </tr>
          </table>
          <![endif]-->
						</td>
					</tr>
					<tr>
						<td class="innerpadding borderbottom" style="padding: 30px 30px 30px 30px; border-bottom: 1px solid #f2eeed;">
							<table border="0" cellpadding="0" cellspacing="0" width="100%">
								<tr>
									<td class="h2" style="color: #153643; font-family: sans-serif; padding: 0 0 15px 0; font-size: 24px; line-height: 28px; font-weight: bold;">Your pre-registration has now been saved in our database.</td>
								</tr>
								<tr>
									<td class="bodycopy" style="color: #153643; font-family: sans-serif; font-size: 16px; line-height: 22px;">Thank you for submitting your pre-registration to attend the <b>GATK Workshop 2019</b> in Granada, Spain.</td>
								</tr>
							</table>
						</td>
					</tr>
					<tr>
						<td class="innerpadding borderbottom" style="padding: 30px 30px 30px 30px; border-bottom: 1px solid #f2eeed;">
							<table align="left" border="0" cellpadding="0" cellspacing="0" width="115">
								<tr>
									<td height="115" style="padding: 0 20px 20px 0;"><img alt="" border="0" class="fix" height="115" src="http://clinbioinfosspa.es/events/gatk/images/article1.png" style="height: auto;" width="115"></td>
								</tr>
							</table><!--[if (gte mso 9)|(IE)]>
            <table width="380" align="left" cellpadding="0" cellspacing="0" border="0">
              <tr>
                <td>
          <![endif]-->
							<table align="left" border="0" cellpadding="0" cellspacing="0" class="col380" style="width: 100%; max-width: 380px;">
								<tr>
									<td>
										<br>
										<table border="0" cellpadding="0" cellspacing="0" width="100%">
											<tr>
												<td class="bodycopy" style="color: #153643; font-family: sans-serif; font-size: 16px; line-height: 22px;">Please, in order to issue the invoice we need you to provide us with the tax information of the one finally paying (institution on behalf of the attendee or the attendee himself/herself):</td>
											</tr>
											<tr>
												<td style="padding: 20px 0 0 0;">
													<table border="0" cellpadding="0" cellspacing="0" width="100%">
														<tr>
															<td class="bodycopy" style="color: #153643; font-family: sans-serif; font-size: 16px; line-height: 22px;">
																<p><b>Full name (payer)</b></p>
																<p><b>NIE / CIF (payer)</b></p>
																<p><b>Billing Address (payer)</b></p>
																<p><b>Name of the attendee<br>
																(if it is different to the payer).</b></p>
															</td>
														</tr>
													</table>
												</td>
											</tr>
										</table>
									</td>
								</tr>
							</table><!--[if (gte mso 9)|(IE)]>
                </td>
              </tr>
          </table>
          <![endif]-->
						</td>
					</tr>
					<tr>
						<td class="innerpadding borderbottom" style="padding: 30px 30px 30px 30px; border-bottom: 1px solid #f2eeed;"><img alt="" border="0" class="fix" src="http://clinbioinfosspa.es/events/gatk/images/GRANADA-gatk.png" style="height: auto;" width="100%"></td>
					</tr>
					<tr>
						<td class="innerpadding bodycopy" style="padding: 30px 30px 30px 30px; color: #153643; font-family: sans-serif; font-size: 16px; line-height: 22px;">
							<br>
							Finally, you need to make the deposit and send the proof of income to the following email:<br>
							<b>secretariatecnica-clinbioinfosspa.fps@juntadeandalucia.es</b>
							<p></p>
							<p><i>You have chosen the following reservation in your registration:</i></p>
							<ul>
								<li><b>Full name:</b> {{ $name }}.</li>
								<li><b>Position:</b> {{ $institution }}.</li>
								<li><b>Organization, institution:</b> {{ $position }}.</li>
								<li><b>Reservation plan:</b> {{ $result }}.</li>
								<li><b>Dietary requirements:</b> {{ $alhambra }}.</li>
								<li><b>Guided tour reservation:</b> {{ $dietary }}.</li>
							</ul>
							<p>If you have checked the box of the reservation of the visit to the Alhambra, you should keep in mind that it is <b>only a reservation.</b></p>
							<p>The cost of the guided tour <b>will be approximately 30€</b>. Since a minimum number of people is required, <i>the payment will be done by bank transfer once the tour is confirmed by the organization</i></p><br/>
							<h3>Payment via Bank transfer</h3>
							<h4>Bank Account Details</h4>
							<p><b>Account holder:</b> Fundación Progreso y Salud</p>
							<p><b>IBAN:</b> ES11 0182 5566 79 0011503217</p>
							<p><b>BIC/SWIFT:</b> BBVAESMMXXX</p>
							<p><b>Bank:</b> BBVA</p>
							<p>PLEASE MENTION YOUR NAME FOLLOWED BY "GATK Workshop 2019" IN YOUR PAYMENT REFERENCE.</p><br>
						</td>
					</tr>
					<tr>
						<td bgcolor="#44525F" class="footer" style="padding: 20px 30px 15px 30px;">
							<table border="0" cellpadding="0" cellspacing="0" width="100%">
								<tr>
									<td align="center" class="footercopy" style="font-family: sans-serif; font-size: 14px; color: #ffffff;">
										&reg; <a href="http://www.clinbioinfosspa.es/" style="text-decoration: none; color: #ffffff">Clinical Bioinformatics Area</a>, <a href="http://www.juntadeandalucia.es/fundacionprogresoysalud/es/home" style="text-decoration: none; color: #ffffff">FPS</a> © <a href="https://github.com/onit4ku/" style="text-decoration: none; color: #ffffff">Rubén García Serrano</a>, 2019
									</td>
								</tr>
								<tr>
									<td align="center" style="padding: 20px 0 0 0;">
										<table border="0" cellpadding="0" cellspacing="0">
											<tr>
												<td style="text-align: center; padding: 0 10px 0 10px;" width="37">
													<a href="https://www.broadinstitute.org/"><img alt="Broad Institute" border="0" height="37" src="http://clinbioinfosspa.es/files/image/broad-icon.png" style="height: auto;" width="37"></a>
												</td>
												<td style="text-align: center; padding: 0 10px 0 10px;" width="37">
													<a href="https://software.broadinstitute.org/gatk/events/"><img alt="Facebook" border="0" height="37" src="https://avatars2.githubusercontent.com/u/32406064" style="height: auto;" width="37"></a>
												</td>
												<td style="text-align: center; padding: 0 10px 0 10px;" width="37">
													<a href="http://www.clinbioinfosspa.es/"><img alt="CBA" border="0" height="37" src="http://clinbioinfosspa.es/files/image/fps-blanco.png" style="height: auto;" width="37"></a>
												</td>
												<td style="text-align: center; padding: 0 10px 0 10px;" width="37">
													<a href="https://twitter.com/ClinicalBioinfo"><img alt="Twitter" border="0" height="37" src="http://clinbioinfosspa.es/events/gatk/images/twitter.png" style="height: auto;" width="37"></a>
												</td>
											</tr>
										</table>
									</td>
								</tr>
							</table>
						</td>
					</tr>
				</table><!--[if (gte mso 9)|(IE)]>
          </td>
        </tr>
    </table>
    <![endif]-->
			</td>
		</tr>
	</table>
</body>
</html>
<?php
$result = "";
if ($gala == "withDinner") {
    $result = "Curso con cena (223€)";
} else {
    $result = "Curso sin cena (180€)";
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Nuevo registro</title>
	<meta charset="UTF-8">
	<meta content="width=device-width, initial-scale=1.0" name="viewport">
	<meta content="ie=edge" http-equiv="X-UA-Compatible">
</head>
<body style=" @import url('https://fonts.googleapis.com/css?family=Lato&display=swap'); background-color: #e0e0e0; color: #333; font-family:Lato; img{ -ms-interpolation-mode:bicubic; } body{ -webkit-text-size-adjust:100%; } h2{ color:#0066CC !important; } margin: 0; padding: 0; min-width: 100%;">
	<div style="margin-left: 20px">
		<p style="font-size:20px;">Registro en el formulario <b>GATK 2019, Granada.</b></p>
		<p>El usuario con nombre <b>{{ $name }}</b> se ha registrado en el formulario, sus datos de registro son los siguientes:</p><br>
		<p>Sus datos son los siguientes:</p>
		<div style="margin-left: 20px;align-content: center;padding: 15px;background-color:white;border-radius: 25px;background: #ffffff;padding: 20px;width: 587px;">
			<p>Nombre completo: <b>{{ $name }}</b></p>
			<p>Email: <b>{{ $email }}</b></p>
			<p>Institución de la que procede: <b>{{ $position }}</b>.</p>
			<p>Posición: <b>{{ $institution }}</b>.</p>
			<p>Tipo de plan: <b>{{ $result }}</b>.</p>
			<p>Dietas especiales: <b>{{ $alhambra }}</b>.</p>
			<p>Reserva de la visita guiada: <b>{{ $dietary }}</b>.</p>
		</div><br>
		<p style="/* margin: 20px; */"><b>Saludos,<br>
		Rubén.</b></p>
		<div style="padding: 20px;background-color: #b9b9b9;color: white;align-items: center;">
			<a href="http://www.clinbioinfosspa.es" rel="noopener noreferrer" target="_blank"><img alt="cba logo" src="http://www.clinbioinfosspa.es/files/image/logo-CBA.png" style="height: 75px;"></a> <a href="https://software.broadinstitute.org/gatk/" rel="noopener noreferrer" target="_blank"><img alt="gatk logo" src="http://www.clinbioinfosspa.es/files/image/logoGATK1.png" style="height: 75px;"></a><a href="https://www.broadinstitute.org/" rel="noopener noreferrer" target="_blank"><img alt="broad logo" src="http://www.clinbioinfosspa.es/files/image/logoGATK.png" style="height: 70px;"></a>
		</div>
	</div>
</body>
</html>
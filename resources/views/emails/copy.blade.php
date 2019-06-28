<?php
$result = "";
if ($gala == "withDinner") {
    $result = "Curso con cena (223€)";
} else if ($gala == "onlyEvent") {
    $result = "Curso sin cena (180€)";
} else if ($gala == "eventPlusVisit") {
    $result = "Curso con cena, con reserva a la visita guiada de la Alhambra (223€)";
} else if ($gala == "eventPlusVisitMinusDinner") {
    $result = "Curso sin cena, con reserva a la visita guiada de la Alhambra (223€)";
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
<body style=" @import url('https://fonts.googleapis.com/css?family=Lato&display=swap'); background-color: #e0e0e0; color: #333; font-family:Lato; img{ -ms-interpolation-mode:bicubic; } body{ -webkit-text-size-adjust:100%; } h2{ color:#0066CC !important; }">
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
		</div><br>
		<p>Saludos,</p>
		<div style="padding: 4px;background-color: #b9b9b9;color: white;/* margin-left: 0; */">
			<p style="margin: 20px;"><b>Rubén García Serrano<br>
			Clinical Bioinformatics Area team.</b></p><a href="http://www.clinbioinfosspa.es"><img alt="cba logo" src="http://www.clinbioinfosspa.es/files/image/logo-CBA.png" style=" height: 100px;"></a>
		</div>
	</div>
</body>
</html>
<?php
$result = "";
if ($gala == "withDinner") {
    $result = "Curso con cena (223€)";
} else if ($gala == "onlyEvent") {
    $result = "Curso sin cena (180€)";
} else if ($gala == "eventPlusVisit") {
    $result = "Curso con cena, mas visita nocturna guiada a la Alhambra (253€)";
}
?>

<div>
    <p>Registro en el formulario <b>GATK 2019, Granada.</b></p>
    <p>El usuario con nombre <b>{{ $name }}</b> se ha registrado en el formulario, sus datos de registro son los siguientes: </p>
    <p>Email: <b>{{ $email }}</b></p>
    <p>Institución de la que procede: <b>{{ $institution }}</b>.</p>
    <p>Posición: <b>{{ $position }}</b>.</p>
    <p>Tipo de plan: <b>{{ $result }}</b>.</p>
    <br>
  <p>Saludos,</p>
    <p>Rubén.</p>
</div>

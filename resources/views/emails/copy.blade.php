<?php
$result = "";
if ($gala == "withDinner") {
    $result = "con cena de gala (150€)";
} else if ($gala == "onlyEvent") {
    $result = "sin cena de gala (100€)";
} else if ($gala == "eventPlusVisit") {
    $result = "evento con cena, mas visita guiada a la Alhambra (200€)";
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

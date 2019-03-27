<?php

  $result = "";
  if ($gala == "withDinner") {
    $result = "con gala";
  } 
  else{
    $result = "sin gala";
  }
  
?>

<div>
    <p>Registro en el formulario <b>GATK 2019.</b></p>
    <p>El usuario con nombre <b>{{ $name }}</b> se ha registrado en el formulario, sus datos de registro son los siguientes: </p>
    <p>Email: <b>{{ $email }}</b></p>
    <p>Institución de la que procede: <b>{{ $institution }}</b>.</p>
    <p>Posición: <b>{{ $position }}</b>.</p>
    <p>Registro con Gala o sin ella: <b>{{ $result }}</b>.</p>
    <br>
  <p>Saludos,</p>
    <p>Rubén.</p>
</div>

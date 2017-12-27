<?php

  $nombre = $_POST["nombre"];
  $apellidos = $_POST["apellidos"];
  $email = $_POST["email"];
  $asunto = $_POST["asunto"];
  $mensaje = $_POST["mensaje"];
  $para = "angelpbweb@hotmail.com";

  $mensaje = "
    Nombre del remitente: ".$nombre."
    Apellidos del remitente: ".$apellidos."
    correo: ".$email."
    mensaje: ".$mensaje."
  ";

  if(mail($para,$asunto,utf8_decode($mensaje)))
    echo "<script type='text/javascript'>alert('Tu mensaje ha sido enviado exitosamente');</script>";

    echo "<script type='text/javascript'>window.location.href='index.html';</script>";

 ?>

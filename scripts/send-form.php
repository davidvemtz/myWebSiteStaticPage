<?php
$nombre_usuario=$_POST['name'];
$email_usuario=$_POST['email'];
$consulta_usuario=$_POST['message'];
// Creo 3 variables que me toman lo que se envía por POST de cada valor del formulario

$destino="davidvemtz@gmail.com";

$asunto="Consulta enviada desde www.davidvemtz.com.ar";

$mensaje="Tu Nombre es: ".$nombre_usuario."\r\n";
$mensaje.="Tu Email es: ".$email_usuario."\r\n";
$mensaje.="Consulta: ".$consulta_usuario."\r\n";

$remitente="From: algo@jonylif.com.ar";

mail($destino, $asunto, $mensaje, $remitente);


header("Location:../index.php?i=ok");
// SI EL FORMULARIO SE ENVIO CORRECTAMENTE, PONEME EN LA URL DESPUES DEL INDEX.PHP UN SIGNO DE PREGUNTA, UNA LETRA I, Y UN IGUAL OK
?>

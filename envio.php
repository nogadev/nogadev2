<?php

$nombre =   isset( $_POST['sendername'] ) ? $_POST['sendername'] : '';
$asunto =   isset( $_POST['sendersubject'] ) ? $_POST['sendersubject'] : '';
$email  =   isset( $_POST['emailaddress'] ) ? $_POST['emailaddress'] : '';
$mensaje =  isset( $_POST['sendermessage'] ) ? $_POST['sendermessage'] : '';
$contenido = '
						<html>
						<head>
							<title>NOGADEV</title>
						</head>
						<body>
							 <h1>Haz recibido un mensaje através de la página NOGADEV</h1>
							 <h3>'.$nombre. ' te ha enviado el siguiente mensaje:</h3>
							 <p>'.$mensaje. ' <p>

							 <br><br><h3> Su email para que lo contactes es: '.$email.'</h3>
							 <hr>
							 <p> Enviado el' . date ('d/m/Y');
						
					'</body>
						</html>';


// Configuración de los encabezados
$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= "Content-type: text/html; charset=UTF-8\r\n";

// Enviar correo
$envio = mail('danielalilianagarro@gmail.com', $asunto, $contenido, $headers);


if (mail($envio, $asunto, utf8_decode($mensaje), $headers))
echo "<script type='text/javascript'>alert('Tu mensaje ha sido enviado exitosamente');</script>";
echo "<script type='text/javascript'>window.location.href='';</script>";
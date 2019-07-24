<?php

$nombre =   isset( $_POST['name'] ) ? $_POST['name'] : '';
$asunto =   isset( $_POST['asunto'] ) ? $_POST['asunto'] : '';
$email  =   isset( $_POST['email'] ) ? $_POST['email'] : '';
$mensaje =  isset( $_POST['mensaje'] ) ? $_POST['mensaje'] : '';
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
$envio = mail('fedenogara@gmail.com', $asunto, $contenido, $headers);


if($envio) {
$miresultado = '<h4>El correo ha sido enviado! Gracias por ponerse en contacto con nosotros.</h4>';
} else{

$miresultado = '<h4>No se envío el correo.</h4>';

}

echo $miresultado;
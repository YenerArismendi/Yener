<?php 
// Varios destinatarios
$para  = 'Papercut@papercut.com' . ', '; // atención a la coma
//$para .= 'wez@example.com';

// título
$título = 'Gracias por registrarte';

//aleatorio

$codigo =   rand(1000,9999);

// mensaje
$mensaje = '
<html>
<head>
    <meta charset = UTF8 />
  <title>Recordatorio de cumpleaños para Agosto</title>
</head>
<body>
  <p>Tu codigo de verificación es: </p>
  <p>'.$codigo.'</p>
</body>
</html>
';

// Para enviar un correo HTML, debe establecerse la cabecera Content-type
$cabeceras  = 'MIME-Version: 1.0' . "\r\n";
$cabeceras .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

// Cabeceras adicionales
/*$cabeceras .= 'To: Mary <mary@example.com>, Kelly <kelly@example.com>' . "\r\n";
$cabeceras .= 'From: Recordatorio <cumples@example.com>' . "\r\n";
$cabeceras .= 'Cc: birthdayarchive@example.com' . "\r\n";
$cabeceras .= 'Bcc: birthdaycheck@example.com' . "\r\n";*/

// Enviarlo
if(mail($para, $título, $mensaje, $cabeceras)){
    echo "correo eviado exitosamente";
}else{
    echo "intenta nuevamente";
}


?>


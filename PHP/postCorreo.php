<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $correo = $_POST['correo'];
    $nombre = $_POST['nombre'];
    $mensaje = $_POST['mensaje'];

    $to = "marcoscardonasanchez@gmail.com";
    $subject = "Mensaje de contacto";
    $message = "Nombre: $nombre\n";
    $message .= "Correo electrónico: $correo\n";
    $message .= "Mensaje:\n$mensaje\n";

    $headers = "From: $correo\r\n";
    $headers .= "Reply-To: $correo\r\n";

if (mail($to, $subject, $message, $headers)) {
        echo "El correo fue enviado exitosamente.";
} else {
        echo "Error al enviar el correo.";
}
} else {
    echo "Acceso denegado.";
}
?>
<a href="index.html">Volver a inicio</a>
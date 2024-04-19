<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recoge los datos del formulario
    $nombre = $_POST['nombre'];
    $correo = $_POST['correo'];
    $mensaje = $_POST['mensaje'];

    // Dirección de correo a la que quieres que se envíen los mensajes
    $destinatario = "lemanzanares81@gmail.com";

    // Asunto del correo
    $asunto = "Nuevo mensaje de contacto de $nombre";

    // Cuerpo del correo
    $cuerpo = "Nombre: $nombre\n";
    $cuerpo .= "Correo: $correo\n";
    $cuerpo .= "Mensaje:\n$mensaje";

    // Cabeceras del correo
    $cabeceras = "From: $correo\r\n";
    $cabeceras .= "Reply-To: $correo\r\n";

    // Envía el correo
    if (mail($destinatario, $asunto, $cuerpo, $cabeceras)) {
        echo "El mensaje ha sido enviado correctamente.";
    } else {
        echo "Hubo un error al enviar el mensaje. Por favor, inténtalo de nuevo más tarde.";
    }
}
?>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST["nombre"];
    $email = $_POST["email"];
    $mensaje = $_POST["mensaje"];

    $destinatario = "sandoval.brian.cb37@gmail.com";
    $asunto = "Mensaje de contacto de $nombre";

    $mensaje_email = "Nombre: $nombre\n";
    $mensaje_email .= "Email: $email\n";
    $mensaje_email .= "Mensaje:\n$mensaje";

    // Envía el email
    if (mail($destinatario, $asunto, $mensaje_email)) {
        echo "El mensaje se ha enviado correctamente.";
    } else {
        echo "Ha ocurrido un error al enviar el mensaje.";
    }
}
?>

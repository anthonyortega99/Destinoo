<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recoge los datos del formulario
    $nombre = $_POST['nombre'];
    $email = $_POST['email'];
    $asunto = $_POST['asunto'];
    $mensaje = $_POST['mensaje'];

    // Dirección de correo electrónico donde quieres recibir el formulario
    $destinatario = 'ortegaanthony919@gmail.com';

    // Construye el cuerpo del mensaje
    $contenido = "Nombre: $nombre\n";
    $contenido .= "Correo electrónico: $email\n";
    $contenido .= "Asunto: $asunto\n\n";
    $contenido .= "Mensaje:\n$mensaje\n";

    // Encabezados del correo
    $headers = "From: $email\n";
    $headers .= "Reply-To: $email\n";

    // Envía el correo
    $mail = mail($destinatario, $asunto, $contenido, $headers);

    // Verifica si el correo se envió correctamente
    if ($mail) {
        echo '<script>alert("¡Mensaje enviado correctamente!");</script>';
    } else {
        echo '<script>alert("Hubo un problema al enviar el mensaje. Por favor, intenta de nuevo más tarde.");</script>';
    }

    // Redirecciona de vuelta a la página anterior
    echo '<script>window.location.href = document.referrer;</script>';
} else {
    // Si alguien intenta acceder directamente a este archivo sin enviar datos por POST
    echo '<script>alert("Acceso no autorizado.");</script>';
    echo '<script>window.history.go(-1);</script>';
}
?>

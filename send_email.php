<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $servicio = $_POST['servicio'];
    $nombre = $_POST['nombre'];
    $email = $_POST['email'];
    $telefono = $_POST['telefono'];
    $fecha = $_POST['fecha'];
    $comentarios = $_POST['comentarios'];

    $to = "ortegaanthony919@gmail.com";
    $subject = "Nueva Compra de Servicio - $servicio";
    $message = "
    Servicio: $servicio\n
    Nombre Completo: $nombre\n
    Correo Electrónico: $email\n
    Número de Teléfono: $telefono\n
    Fecha para el Servicio: $fecha\n
    Comentarios Adicionales: $comentarios
    ";

    $headers = "From: $email";

    if (mail($to, $subject, $message, $headers)) {
        echo "¡Compra realizada con éxito!";
    } else {
        echo "Error al enviar el correo. Inténtalo nuevamente.";
    }
} else {
    echo "Método de solicitud no válido.";
}
?>

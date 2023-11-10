<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST["nombre"];
    $email = $_POST["email"];
    $telefono = $_POST["telefono"];
    $mensaje = $_POST["mensaje"];

    echo "Gracias por enviar tu solicitud, $nombre. Nos pondremos en contacto contigo pronto.";
}
?>

<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

  // Obtener los datos del formulario
  $nombre = $_POST['nombre'];
  $email = $_POST['email'];
  $mensaje = $_POST['mensaje'];

  // Validar los datos
  if (empty($nombre) || empty($email) || empty($mensaje)) {
    echo "Por favor complete todos los campos";
    exit;
  }

  // Configurar el correo electrónico
  $destinatario = "destinatario@example.com";
  $asunto = "Mensaje de contacto desde el sitio web";
  $cuerpo = "Nombre: $nombre\nEmail: $email\nMensaje:\n$mensaje";

  // Enviar el correo electrónico
  if (mail($destinatario, $asunto, $cuerpo)) {
    echo "Gracias por su mensaje, le responderemos a la brevedad";
  } else {
    echo "Lo siento, ha habido un error al enviar el mensaje. Por favor intente de nuevo más tarde.";
  }

} else {
  header("Location: /contacto.html");
  exit;
}
?>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Recibir los datos del formulario
  $name = $_POST["name"];
  $email = $_POST["email"];
  $comments = $_POST["comments"];

  // Configuración de correo electrónico
  $to = "vldzc92@gmail.com"; // Cambia esto con tu dirección de correo electrónico
  $subject = "Nuevo formulario de consulta médica";
  $message = "Nombre: $name\n";
  $message .= "Email: $email\n";
  $message .= "Comentarios: $comments\n";
  $headers = "From: $email";

  // Envío de correo electrónico
  if (mail($to, $subject, $message, $headers)) {
    echo "success";
  } else {
    echo "error";
  }
}
?>

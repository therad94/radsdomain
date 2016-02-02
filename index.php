<?php
$sendTo = "el.duranrafa@gmail.com";
$subject = "Mensaje de contacto";
$titulo = "Alguien se ha contactado con usted";
$name = $_POST["name"];
$email = $_POST["email"];
$comentarios = $_POST["message"];
$message = "\nAlguien se ha contactado con usted:" . "\nNombre: " . $name . "\nEmail: " . $email . "\nComentarios: " . $comentarios;
mail($sendTo, $subject, $message);
header('Location: /index.html');
?>
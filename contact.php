<?php
$to = "contato@honoratojardinagem.com.br";
$subject = "Contato Site Institucional";

// If form fields are all without the name attribute the data is not sent.
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

$headers = "From: contato@honoratojardinagem.com.br";
$body = "Nome: $name\n E-Mail: $email\n Mensagem:\n $message";

mail($to,$subject,$body,$headers);
?>
<?php
$to = "contato@honoratojardinagem.com.br";
$subject = "Contato Site Institucional";

// If form fields are all without the name attribute the data is not sent.
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];
$person = $_POST['person'];
$howdidyouknow = $_POST['howdidyouknow'];

$headers = "From: contato@honoratojardinagem.com.br";
$body = "Nome: $name\n E-Mail: $email\n Mensagem:\n $message\n Soube: $howdidyouknow\n Pessoa: $person";

mail($to,$subject,$body,$headers);
//echo "<a href='index.html' style='text-decoration:none;color:#4fdb63;font-size:xx-large;font-family:calibri;'> Mensagem Enviada! Clique aqui para retornar</a>";
echo '<script type="text/javascript">',
     'contactMsg();',
     '</script>';
?>
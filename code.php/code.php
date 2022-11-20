<?php
$to = "paulporta@outlook.com";
$subject = "Contact from the website";
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
$name = $_POST['Nombre y apellido'];
$email = $_POST['Correo electrónico'];
$comment = $_POST['Comentarios']; 


$comments = $_POST['Comentarios'];
$message = "
<html>
<head>
<title>HTML</title>
</head>
<body>
<h1>Información del formulario</h1>
<p>Nombre del usuario: $name </p> 
<p>Email: $email </p> 
<p>Comentarios: $comments </p> 
</body>
</html>";
 echo '¡Gracias!';
mail($to, $subject, $message, $headers);
?>




<?php


$email_to = "alfacincopyv@gmail.com";
$email_subject = "alfacincopyv@srv1.liipsy.com";

// $email_to   = 'alfacincopyv@gmail.com';





$nombre    = $_POST['nombre'];
$mail      = $_POST['email'];
$asunto = $_POST['asunto'];
$mensaje   = $_POST['mensaje'];



$email_message = "Detalles del formulario de contacto:\n\n";
$email_message .= "Nombre: " . $_POST['nombre'] . "\n";
$email_message .= "E-mail: " . $_POST['email'] . "\n";
$email_message .= "Asunto: " . $_POST['asunto'] . "\n";
$email_message .= "mensaje: " . $_POST['mensaje'] . "\n\n";


//  $headers = 'From: '.$email_from."\r\n".
//  'Reply-To: '.$email_from."\r\n" .
//  'X-Mailer: PHP/' . phpversion();

// // $headers = "From: alfacincopyv@gmail.com\r\n".
 
// // 'Reply-To: '.$para."\r\n" .
 
// // 'X-Mailer: PHP/' . phpversion();





// // mail($para, $asunto, utf8_decode($mensaje), $header);
// mail($email_to, , $email_message, $headers);

//  echo "Mensaje Enviado Con Exito";





$headers = 'From: alfacincopyv.com' . "\r\n" .
'Reply-To: alfacincopyv.com' . "\r\n" .
'X-Mailer: PHP/' . phpversion();
@mail($email_to, $email_subject, $email_message, $headers);

echo "El formulario se ha enviado con exito";

 header("http://alfacincopyv.com/");



// if(isset($_POST['email'])) {

// // Debes editar las próximas dos líneas de código de acuerdo con tus preferencias
// $email_to = "alfacincopyv@gmail.com";
// $email_subject = "alfacincopyv@srv1.liipsy.com";

// // Aquí se deberían validar los datos ingresados por el usuario
// if(!isset($_POST['nombre']) ||
// !isset($_POST['email']) ||
// !isset($_POST['asunto']) ||
// !isset($_POST['mensaje'])) {

// echo "<b>Ocurrió un error y el formulario no ha sido enviado. </b><br />";
// echo "Por favor, vuelva atrás y verifique la información ingresada<br />";
// die();
// }

// $email_message = "Detalles del formulario de contacto:\n\n";
// $email_message .= "Nombre: " . $_POST['nombre'] . "\n";
// $email_message .= "E-mail: " . $_POST['email'] . "\n";
// $email_message .= "Teléfono: " . $_POST['asunto'] . "\n";
// $email_message .= "Comentarios: " . $_POST['mensaje'] . "\n\n";


// // Ahora se envía el e-mail usando la función mail() de PHP
// $headers = 'From: '.$email_from."\r\n".
// 'Reply-To: '.$email_from."\r\n" .
// 'X-Mailer: PHP/' . phpversion();
// @mail($email_to, $email_subject, $email_message, $headers);

// echo "¡El formulario se ha enviado con éxito!";






?>
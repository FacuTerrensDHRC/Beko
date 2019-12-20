<?php
//include 'conexion.php';


use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'src/Exception.php';
require 'src/PHPMailer.php';
require 'src/SMTP.php';


$nombre = $_POST["name"];
$mail = $_POST["email"];
$mensaje = $_POST["message"];
$asunto = $_POST["subject"];

$body = "Nombre: ".$nombre."<br> Email: ".$mail."<br> Mensaje: ".$mensaje;



// if(!isset($_POST['name']) ||
// !isset($_POST['email']) ||
// !isset($_POST['subject']) ||
// !isset($_POST['message'])) {

// $email_message = "Detalles del formulario de contacto:\n\n";
// $email_message .= "Nombre: " . $_POST['name'] . "\n";
// $email_message .= "E-mail: " . $_POST['email'] . "\n";
// $email_message .= "Teléfono: " . $_POST['subject'] . "\n";
// $email_message .= "Comentarios: " . $_POST['message'] . "\n\n";

$mail = new PHPMailer(true);

try {
    //Server settings
    $mail->SMTPDebug = 0;                      // Enable verbose debug output
    $mail->isSMTP();                                            // Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                    // Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
    $mail->Username   = 'soporteggwp@gmail.com';                     // SMTP username
    $mail->Password   = 'facuterrens123';                               // SMTP password
    $mail->SMTPSecure = 'tls';         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` also accepted
    $mail->Port       = 587;                                    // TCP port to connect to

    //Recipients
    $mail->setFrom('soporteggwp@gmail.com', $nombre);
    $mail->addAddress('soporteggwp@gmail.com', 'SoporteGGWP');     // Add a recipient


    // Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = $asunto;
    $mail->Body    = $body;


    $mail->send();
    echo 'mensaje enviado';
    header("location: soporte.php");
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}


?>

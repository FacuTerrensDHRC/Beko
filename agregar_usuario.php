<?php
include 'conexion.php';

// if(!isset($_POST['nombre']) ||
// !isset($_POST['email']) ||
// !isset($_POST['user']) ||
// !isset($_POST['pass']) || 
// !isset($_POST['confirm_pass'])) {
$nombre = $_POST['nombre'];
$email = $_POST['email'];
$user = $_POST['user'];
$pass =  $_POST['pass'];
$confirm_pass = $_POST['confirm_pass'];

$insertar = "INSERT INTO `registro` (`id`, `name`, `user`, `pass`, `confirm_pass`, `e-mail`) VALUES (NULL, '$nombre', '$user', '$pass', '$confirm_pass', '$email')";
$crear_stacks = "INSERT INTO `stacks_player` (`id`, `user`, `oro`, `nivel`, `armadura`, `ataque`) VALUES (NULL, '$user', '0', '1', '50', '50')";
$resultado = mysqli_query($conexion, $insertar);
$stacks = mysqli_query($conexion, $crear_stacks);

if(!$resultado){
  echo "error al registrarse";
}else {
  echo "se registro";
}

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'src/Exception.php';
require 'src/PHPMailer.php';
require 'src/SMTP.php';

$body = "gracias por registrarte ".$user;



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
    $mail->setFrom('soporteggwp@gmail.com', $user);
    $mail->addAddress($email, $user);     // Add a recipient


    // Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = "Muchas Gracias!";
    $mail->Body    = $body;


    $mail->send();
    echo 'mensaje enviado';
    header("location: login0.php");
    
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
?>


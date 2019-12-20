<?php
include 'conexion.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'src/Exception.php';
require 'src/PHPMailer.php';
require 'src/SMTP.php';


$user = $_POST["user"];

$email = $_POST["email"];

$sql = "SELECT `pass` FROM `registro` WHERE `user`='$user' AND `e-mail` = '$email'";


$query = mysqli_query($conexion, $sql);

$n = mysqli_num_rows($query);

if($n == 0){
    echo "no estas en el sistema";
}else{
    $data = mysqli_fetch_array($query);

$pass = $data['pass'];

$body = "su contraseña es: ".$pass;

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
    $mail->Subject = "Tu Pass";
    $mail->Body    = $body;


    $mail->send();
    echo 'mensaje enviado';
    header("location: login0.php");
    
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
}

?>
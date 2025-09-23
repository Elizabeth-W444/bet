<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require __DIR__ . '/vendor/autoload.php';

$mail = new PHPMailer(true);

try {
    //Server settings
    $mail->isSMTP();
    $mail->Host       = 'smtp.gmail.com';
    $mail->SMTPAuth   = true;
    $mail->Username   = 'elizabeth.wairegi@strathmore.edu';   // your Gmail
    $mail->Password   = 'jaeb cgys vxxx jeyr';     // Gmail App Password (not normal password)
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    $mail->Port       = 587;

    //Recipients
    $mail->setFrom('yourgmail@gmail.com', 'Your Name');
    $mail->addAddress('recipient@example.com', 'Recipient Name');

    //Content
    $mail->isHTML(true);
    $mail->Subject = 'Test Email from PHPMailer';
    $mail->Body    = 'Hello! This is a test email sent using <b>PHPMailer</b>.';

    $mail->send();
    echo 'Message has been sent';
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
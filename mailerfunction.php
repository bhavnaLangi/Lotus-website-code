<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// $cname = 'Dhruvi Kumar';
require_once "vendor_mailer/autoload.php";

function smtp($to, $content, $subject)
{
    $mail = new PHPMailer();


    $mail->IsSMTP();
    $mail->CharSet = 'UTF-8';

    $mail->Host = "smtp.gmail.com";    // SMTP server example
    // enable SMTP authentication
    $mail->SMTPDebug = 0;                     // enables SMTP debug information (for testing)
    $mail->SMTPAuth = true;
    $mail->SMTPSecure = "tls";
    // enable SMTP authentication
    $mail->Port = 587;                    // set the SMTP port for the GMAIL server
    $mail->Username = "digihost2021@gmail.com";            // SMTP account username example
    $mail->Password = "lvrncususaqdsopy";            // SMTP account password example
    $mail->setFrom($to,'Lotus Developer');
    $mail->addAddress($to);
    $mail->isHTML(false);
    $mail->Subject = $subject;
    $mail->Body = $content;
    return $mail->send();
}

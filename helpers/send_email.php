<?php
require __DIR__ . '/../vendor/phpmailer/phpmailer/src/PHPMailer.php';
require __DIR__ . '/../vendor/phpmailer/phpmailer/src/SMTP.php';
require __DIR__ . '/../vendor/phpmailer/phpmailer/src/Exception.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;


function send_email($name, $email, $msg): bool
{
    $config = require __DIR__ . '/../../config.php';
    $mail = new PHPMailer(true);

    try {
        // Server Settings
        $mail->isSMTP();
        $mail->Host       = 'nojoodalamri.pub.sa';
        $mail->SMTPAuth   = true;
        $mail->Username   = $config['email_user'];
        $mail->Password   = $config['email_pass'];
        $mail->SMTPSecure = 'ssl';
        $mail->Port       = 465;

        // Recipients
        $mail->setFrom('admin@nojoodalamri.pub.sa', 'Website Contact Form');
        $mail->addAddress('nojood-alamri@outlook.com');

        // Content
        $mail->isHTML(true);
        $mail->Subject = 'New Message from your website contact form';
        $mail->Body = "
            <strong>Name:</strong> {$name}<br>
            <strong>Email:</strong> {$email}<br>
            <strong>Message:</strong><br>{$msg}
        ";

        $mail->send();
        return true;
    } catch (Exception $e) {
        return false;
    }
}
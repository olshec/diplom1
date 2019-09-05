<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require './vendor/autoload.php';

require_once './vendor/recaptcha/src/autoload.php';

$recaptcha = new \ReCaptcha\ReCaptcha($secret);

// require './vendor/phpmailer/phpmailer/src/Exception.php';
// require './vendor/phpmailer/phpmailer/src/PHPMailer.php';
// require './vendor/phpmailer/phpmailer/src/SMTP.php';
// Load Composer's autoloader


session_start();

//$target_file = __DIR__."/uploadedFiles/".$_FILES["file1"]["name"];
//move_uploaded_file($_FILES["file1"]["tmp_name"], $target_file);




//myData
$file_tmp=$_FILES["file1"]["tmp_name"];
$file_name=$_FILES["file1"]["name"];
$from_email = "diplom.website@yandex.ru";
$to = $_POST['email'];
$subject = $_POST['typeSelect'];
$message = $_POST['message'];

// Instantiation and passing `true` enables exceptions
$mail = new PHPMailer(true);

try {

    $mail->setFrom($from_email, 'Diplom');
    $mail->addAddress($to);    
    $mail->addAttachment($file_tmp, $file_name);        
    $mail->Subject = $subject;
    $mail->Body    = $message;
    $mail->send();
    echo 'Message has been sent';
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}


if($_SESSION["captcha_code"] == $_POST["captcha_code"]){
    $_SESSION["captcha_code"]=null;

    echo '<br> captcha right';
}
else
{
    $_SESSION["captcha_code"]=null;
    echo '<br> captcha wrong';
}
    
?>
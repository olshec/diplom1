<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require './vendor/autoload.php';


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
$from = "diplom.website@yandex.ru";
$to = $_POST['email'];
$subject = $_POST['typeSelect'];
$message = $_POST['message'];
$headers = "From:" . $from;

// Instantiation and passing `true` enables exceptions
$mail = new PHPMailer(true);

try {

    $mail->setFrom('diplom.website@yandex.ru', 'Mailer');
    $mail->addAddress($to, 'Joe User');    
    // Attachments
    $mail->addAttachment($file_tmp, $file_name);         // Add attachments
    
    // Content
    //$mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = $subject;
    $mail->Body    = $message;
    //$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
    
    $mail->send();
    echo 'Message has been sent';
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}


if($_SESSION["captcha_code"] == $_POST["captcha_code"]){
    $_SESSION["captcha_code"]=null;

    echo 'right';
}
else
{
    $_SESSION["captcha_code"]=null;
    echo 'wrong';
}
    
?>
<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require './vendor/autoload.php';

session_start();




if($_SESSION["captcha_code"] == $_POST["captcha_code"]){
    $_SESSION["captcha_code"]=null;

    
    //myData
    $file_tmp=$_FILES["file1"]["tmp_name"];
    $file_name=$_FILES["file1"]["name"];
    $from_email = "diplom.website@yandex.ru";
    $to = $_POST['email'];
    $subject = $_POST['typeSelect'];
    $message = $_POST['message'];
    
    
    // Instantiation and passing `true` enables exceptions
    $mail = new PHPMailer(true);
    $mail->CharSet = 'UTF-8';
    try {
        
        $mail->setFrom($from_email, 'Diplom');
        $mail->addAddress($to);
        $mail->addAttachment($file_tmp, $file_name);
        $mail->Subject = $subject;
        $mail->Body    = $message;
        $mail->send();
        echo 'Сообщение успешно отправлено';
    } catch (Exception $e) {
        echo "Не удалось отправить сообщение. Ошибка: {$mail->ErrorInfo}";
    }
 
    
}
else
{
    $_SESSION["captcha_code"]=null;
    echo '<br> Код введен неверно, попытайтесь еще раз.';
}
    
?>
<?php
session_start();


use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require './vendor/autoload.php';




// echo 'SESSION["captcha_code"] = '.$_SESSION["captcha_code"].'<br>';
// echo "POST[captcha_code] = ".$_POST["captcha_code"].'<br>';


if($_SESSION["captcha_code"] == $_POST["captcha_code"]){
    $_SESSION["captcha_code"]=null;
    
    //myData
    //$file_tmp=$_FILES["file1"]["tmp_name"];
    //$file_name=$_FILES["file1"]["name"];
    $from_email = "diplom.website@yandex.ru";
    $to_email = $_POST['email'];
    //$subject = $_POST['typeSelect'];
    $work_theme = $_POST['work_theme'];
    $message = $_POST['message'];
    
    
    // Instantiation and passing `true` enables exceptions
    $mail = new PHPMailer(true);
    $mail->CharSet = 'UTF-8';
    try {
        
        
        
        
        
        $mail->setFrom($from_email, 'Diplom');
        $mail->addAddress($to_email);
       // $mail->addAttachment($file_tmp, $file_name);
        $mail->Subject = 'Ваш диплом';
        $mail->Body    = 'Здравствуйте! Ваш заказ принят! Мы ответим вам в течение суток.';
        $mail->send();
        
        $mail = new PHPMailer(true);
        $mail->setFrom('new_zakaz@yandex.ru', 'Diplom');
        $mail->addAddress($from_email);
        $mail->Subject = $work_theme;
        $mail->Body    = $message;
        $mail->send();
        
        echo 'Ваш заказ принят! Мы ответим вам в течение суток.';
 
        
    } catch (Exception $e) {
        echo "Не удалось отправить сообщение. Ошибка: {$mail->ErrorInfo}";
    }
    
}
else
{
    $_SESSION["captcha_code"]=null;
    echo '<br> Код введен неверно, попытайтесь еще раз.';
}

session_destroy();
    
?>
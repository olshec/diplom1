<?php declare(strict_types=1);

session_start();

require_once  './vendor/autoload.php';
require_once  './vendor/smarty/smarty/libs/Smarty.class.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;


// echo 'SESSION["captcha_code"] = '.$_SESSION["captcha_code"].'<br>';
// echo "POST[captcha_code] = ".$_POST["captcha_code"].'<br>';

function printResultMessage(string $headText, string $message)
{
    $smarty = new Smarty();
    $smarty->assign('head_text', $headText);
    $smarty->assign('message_text', $message);
    // display it
    $smarty->display('send-message.html');
}

if(isset($_SESSION["captcha_code"]) && isset($_POST["captcha_code"]) && 
    isset($_POST['email']) && isset($_POST['work_theme']) && isset($_POST['message'])){
    if ($_SESSION["captcha_code"] == strtolower($_POST["captcha_code"])) {
        $_SESSION["captcha_code"] = null;
    
        // myData
        // $file_tmp=$_FILES["file1"]["tmp_name"];
        // $file_name=$_FILES["file1"]["name"];
        $from_email = "diplom.website@yandex.ru";
        $to_email = $_POST['email'];
        // $subject = $_POST['typeSelect'];
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
            $mail->Body = 'Здравствуйте! Ваша заявка на рассмотрении! Мы ответим вам в ближайшее время.';
            $mail->send();
    
            $mail = new PHPMailer(true);
            $mail->setFrom('new_zakaz@yandex.ru', 'Diplom');
            $mail->addAddress($from_email);
            $mail->Subject = $work_theme;
            $mail->Body = $message;
            $mail->send();
    
            printResultMessage('Ваша заявка на рассмотрении!', 'Мы ответим вам в ближайшее время.');
            //echo 'Ваш заказ принят! Мы ответим вам в течение суток.';
            
            
        } catch (Exception $e) {
            printResultMessage('Не удалось отправить сообщение.', "Ошибка: {$mail->ErrorInfo}");
            //echo "Не удалось отправить сообщение. Ошибка: {$mail->ErrorInfo}";
        }
    } else {
        $_SESSION["captcha_code"] = null;
        printResultMessage('Код введен неверно!', 'Попытайтесь еще раз.');
       // echo '<br> Код введен неверно, попытайтесь еще раз.';
    }
    
    session_destroy();
}
else {
    printResultMessage('Страница недоступна', '');
    //echo "Страница недоступна!";

    
}

?>
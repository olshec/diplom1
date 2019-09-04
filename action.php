<?php
session_start();

$target_file = __DIR__."/uploadedFiles/".$_FILES["file1"]["name"];
//$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
//$namef=$_FILES["file1"]["tmp_name"];
//$path =  realpath($namef);
//echo sys_get_temp_dir()."<br>";
//echo $path."<br>";
move_uploaded_file($_FILES["file1"]["tmp_name"], $target_file);

if($_SESSION["captcha_code"] == $_POST["captcha_code"]){
    $_SESSION["captcha_code"]=null;

    ini_set( 'display_errors', 1 );
    error_reporting( E_ALL );
    $from = "diplom.website@yandex.ru";
    $to = $_POST['email'];
    $subject = $_POST['typeSelect']['value'];
    $message = $_POST['message'];
    $headers = "From:" . $from;
    $res = mail($to,$subject,$message, $headers);
    if($res)
        echo 'Сообщение успешно отправлено!'."<br>";
    else
        echo 'Нам не удалось отправить сообщение. Попытайтесь позже.'."<br>";

    echo 'right';
}
else
{
    $_SESSION["captcha_code"]=null;
    echo 'wrong';
}
    
?>
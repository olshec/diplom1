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
    $random_alpha = md5(rand());
    $captcha_code = substr($random_alpha, 0, 6);
    $_SESSION["captcha_code"]=$captcha_code;
    echo 'right';
}
else
{
    $random_alpha = md5(rand());
    $captcha_code = substr($random_alpha, 0, 6);
    $_SESSION["captcha_code"]=$captcha_code;
    echo 'wrong';
}
    
?>
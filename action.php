<?php
session_start();
if($_SESSION["captcha_code"] == $_POST["captcha_code"])
    echo 'right';
else
    echo 'wrong';
?>
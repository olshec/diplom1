<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// require './vendor/phpmailer/phpmailer/src/Exception.php';
// require './vendor/phpmailer/phpmailer/src/PHPMailer.php';
// require './vendor/phpmailer/phpmailer/src/SMTP.php';
// Load Composer's autoloader
require './vendor/autoload.php';

session_start();

//$target_file = __DIR__."/uploadedFiles/".$_FILES["file1"]["name"];
//move_uploaded_file($_FILES["file1"]["tmp_name"], $target_file);


//$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
//$namef=$_FILES["file1"]["tmp_name"];
//$path =  realpath($namef);
//echo sys_get_temp_dir()."<br>";
//echo $path."<br>";


//myData
$from = "diplom.website@yandex.ru";
$to = $_POST['email'];
$subject = $_POST['typeSelect'];
$message = $_POST['message'];
$headers = "From:" . $from;


//Get uploaded file data using $_FILES array
$tmp_name    = $_FILES['file1']['tmp_name']; // get the temporary file name of the file on the server
$file_name        = $_FILES['file1']['name'];  // get the name of the file
$size        = $_FILES['file1']['size'];  // get size of the file for size validation
$file_type        = $_FILES['file1']['type'];  // get type of the file
$file_error       = $_FILES['file1']['error']; // get the error (if any)

//validate form field for attaching the file
if($file_error > 0)
    {
        die('Upload error or No files uploaded');
    }

// read from the uploaded file & base64_encode content
$handle = fopen($tmp_name, "r"); // set the file handle only for reading the file
$content = fread($handle, $size); // reading the file
fclose($handle); // close upon completion

$encoded_content = chunk_split(base64_encode($content));

$boundary = md5("random"); // define boundary with a md5 hashed value
    



//header
$headers = "MIME-Version: 1.0\r\n"; // Defining the MIME version
$headers .= "From:".$from."\r\n"; // Sender Email
//$headers .= "Reply-To: ".$reply_to_email."\r\n"; // Email addrress to reach back
$headers .= "Content-Type: multipart/mixed;\r\n"; // Defining Content-Type
$headers .= "boundary = $boundary\r\n"; //Defining the Boundary

//plain text
$body = "--$boundary\r\n";
$body .= "Content-Type: text/plain; charset=ISO-8859-1\r\n";
$body .= "Content-Transfer-Encoding: base64\r\n\r\n";
$body .= chunk_split(base64_encode($message));  

//attachment
$body .= "--$boundary\r\n";
$body .="Content-Type: $file_type; name=".$tmp_name."\r\n";
$body .="Content-Disposition: attachment; filename=".$tmp_name."\r\n";
$body .="Content-Transfer-Encoding: base64\r\n";
$body .="X-Attachment-Id: ".rand(1000, 99999)."\r\n\r\n";
$body .= $encoded_content; // Attaching the encoded file with

//$res = mail($to,$subject,$message, $headers);
$res = mail($to,$subject,$body, $headers);

if($res)
    echo 'Сообщение успешно отправлено!'."<br>";
else
    echo 'Нам не удалось отправить сообщение. Попытайтесь позже.'."<br>";
        
        

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
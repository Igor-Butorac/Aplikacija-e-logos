<?php

use PHPMailer\PHPMailer\PHPMailer;

if(isset($_POST['name']) && isset($_POST['email'])){

$name = $_POST['name'];
$email = $_POST['email'];
$msgname = $_POST['msgname'];
$message = $_POST['message'];

require_once "PHPMailer/PHPMailer.php";
require_once "PHPMailer/SMTP.php";
require_once "PHPMailer/Exception.php";


$mail = new PHPMailer();
$mail->CharSet = "utf-8";
$mail->isSMTP();
$mail->SMTPAuth = true; 
$mail->SMTPOptions = array(
    'ssl' => array(
    'verify_peer' => false,
    'verify_peer_name' => false,
    'allow_self_signed' => true));

$mail->Username = 'your@smtp.email';               
$mail->Password = 'your password for smtp email';                           
$mail->SMTPSecure = 'tls';                          
$mail->Host = 'smtp.gmail.com'; 
$mail->Port = 587;   

$mail->setFrom($email, $name);
$mail->addAddress('your@emai.com');


$mail->isHTML(true);

$mail->MsgName = ("$email, $msgname");
$mail->Body = ("$email, $message");


if($mail->send()) {
    $_SESSION['msgsent'] = '<p>Vaša poruka je uspješno poslana</p>';    
    header('Location: index.php?menu=3');
} else {
    echo 'Poruka nije poslana.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;   
}
exit();

}

?>
<?php
$name = trim($_POST['contact-name']);
$email = trim($_POST['contact-email']);
$company = trim($_POST['contact-company']);
$message = trim($_POST['contact-message']);

$to = 'slawomir.oruba@gmail.com';
$subject = 'Wypełniono formularz kontaktowy';
$_message .= 'Name: ' . $name . \n;
$_message .= 'Email: ' . $email . \n;
$_message .= 'Company: ' . $company . \n;
$_message .= 'Message: ' . $message . \n;

$headers = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
$headers .= 'From:  Your LunaDesign website' . "\r\n";
$msg['success'] = "\n Email has been sent successfully.";
$msg['fail'] = "\n Email has been not sent.";

if (mail($to, $subject, $_message)) {
    echo $msg['success'];
} else {
    echo $msg['fail'];
}





<?php
$name = trim($_POST['contact-name']);
$email = trim($_POST['contact-email']);
$phone = trim($_POST['contact-phone']);
$message = trim($_POST['contact-message']);

$to = 'slawomir.oruba@gmail.com';
$subject = 'Wypelniono formularz kontaktowy';
$_message .= 'Name: ' . $name . "\r\n";
$_message .= 'Email: ' . $email . "\r\n";
$_message .= 'Telefon: ' . $phone . "\r\n";
$_message .= 'Wiadomosc: ' . $message . "\r\n";

$msg['success'] = "\n Email has been sent successfully.";
$msg['fail'] = "\n Email has been not sent.";

if (mail($to, $subject, $_message)) {
    echo $msg['success'];
} else {
    echo $msg['fail'];
}





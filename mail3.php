<?php
$name = trim($_POST['contact-name']);
$email = trim($_POST['contact-email']);
$phone = trim($_POST['contact-phone']);
$message = trim($_POST['contact-message']);
if ($name == "") {
    $msg['err'] = "\n Pole nie może być puste!";
    $msg['field'] = "contact-name";
    $msg['code'] = FALSE;
    echo 'check name';
} else if ($email == "") {
    $msg['err'] = "\n Pole nie może być puste!";
    $msg['field'] = "contact-email";
    $msg['code'] = FALSE;
    echo 'check email';
} else if ($phone == "") {
    $msg['err'] = "\n Pole nie może być puste!";
    $msg['field'] = "contact-phone";
    $msg['code'] = FALSE;
} else if (filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
    $msg['err'] = "\n Please put a valid email address!";
    $msg['field'] = "contact-email";
    $msg['code'] = FALSE;
    echo 'check email';
} else if ($message == "") {
    $msg['err'] = "\n Message can not be empty!";
    $msg['field'] = "contact-message";
    $msg['code'] = FALSE;
    echo 'check message';
} else {
    echo 'prepare email';
    $to = 'slawomir.oruba@gmail.com';
    $subject = 'Wypelniono formularz kontaktowy';
    $_message = '<html><head></head><body>';
    $_message .= '<p>Imię i nazwisko: ' . $name . '</p>';
    $_message .= '<p>Email: ' . $email . '</p>';
    $_message .= '<p>Telefon: ' . $phone . '</p>';
    $_message .= '<p>Wiadomość: ' . $message . '</p>';
    $_message .= '</body></html>';

// To send HTML mail, the Content-type header must be set
    $headers  = 'MIME-Version: 1.0' . "\r\n";
    $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

// Create email headers
    $headers .= 'From: '.$email."\r\n".
        'Reply-To: '.$to."\r\n" .
        'X-Mailer: PHP/' . phpversion();

    $msg['success'] = 'Success';

    $msg['fail'] = 'Fail';
    if (mail($to, $subject, $_message)) {
        echo $msg['success'];

    } else {
        echo $msg['fail'];
    }
}




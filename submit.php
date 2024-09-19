<?php
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    $to = 'eugenenyirenda09@gmail.com'; // Replace with your email address
    $subject = 'Contact Form Submission';

    $headers = 'From: ' . $email . '\r\n' .
        'Reply-To: ' . $email . '\r\n' .
        'X-Mailer: PHP/' . phpversion();

    $body = "Name: $name\nEmail: $email\nMessage: $message";

    mail($to, $subject, $body, $headers);

    echo 'Message sent successfully!';
?>

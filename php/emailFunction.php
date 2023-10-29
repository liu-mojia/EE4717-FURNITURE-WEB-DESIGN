<?php
function sendEmail() {
    $to = 'customer@localhost';
    $subject = "Order Confirmation";
    $message = "Your order has been confirmed, thank you for shopping at Elegance Maison";
    $headers = "From: customer@localhost"."\r\n".
        'Reply-To: customer@localhost'. "\r\n".
        'X-Mailer: PHP/'. phpversion();

    mail($to, $subject, $message, $headers, '-fcustomer@localhost');
    echo("<p>A confirmation email has been sent</p>");
}
<?php
    $to      = 'dubenco@protonmail.com';
    $subject = 'Клиент ожидает заказ';
    $name = $_POST['userName'];
    $phone = $_POST['userPhone'];
    $email = $_POST['userEmail'];
    $product = $_POST['productName'];
    $message =  'Заказ получен от клиента: '.$name."<br>".
                'Его номер телефона: ' .$phone."<br>".
                'Его email: ' .$email."<br>".
                'Продукт который он заказал: ' .$product;
    $headers = 'From: dubenco@protonmail.com' . "\r\n" .
        'Reply-To: dubenco@protonmail.com' . "\r\n" .
        'X-Mailer: PHP/' . phpversion();
    
    $success = mail($to, $subject, $message, $headers);
    if (!$success) {
        $errorMessage = error_get_last()['message'];
    }else {
        echo 'Спасибо за заявку';
    }
?>
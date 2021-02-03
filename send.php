<?php
    $to      = 'dubenco@protonmail.com';
    $subject = 'Клиент ожидает заказ';
    $name = $_POST['userName'];
    $phone = $_POST['userPhone'];
    $email = $_POST['userEmail'];
    $product = $_POST['productName'];
    $message =  'Заказ получен от клиента: '.$name.
                ' Его номер телефона: ' .$phone.
                ' Его email: ' .$email.
                ' Продукт который он заказал: ' .$product;
    $headers = 'From: dubenco@protonmail.com' . "\r\n" .
        'Reply-To: dubenco@protonmail.com' . "\r\n" .
        'X-Mailer: PHP/' . phpversion();
    
    $success = mail($to, $subject, $message, $headers);
    if (!$success) {
        $errorMessage = error_get_last()['message'];
    }else {
        echo 'Спасибо за заявку';
        echo '<b> Вы можете вернуться на сайт  <a href="http://dubasss.ho.ua/" >по этой ссылке.</a></b>';
    }
?>

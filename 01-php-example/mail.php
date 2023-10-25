<?php
$title = 'Sent Email';
require 'blocks/header.php';
?>

<h6>Для работы почты  и этого кода купите сервер, нищеброды: </h6>

<code>
    <pre>
    $message = "Yourself Message from Me";
    $toUser = "rakot_stav@mail.ru";
    $fromUser = "rakot666111@gmail.com";
    $subject = 'Message Theme';

    $subject = "=?utf-8?B?" . base64_encode($subject) . "?=";
    $headers = "From: $fromUser \r \n
    Reply-to: $fromUser \r \n
    Content-type:text/plain; charset=utf-8 \r \n";

    mail($toUser, $subject, $message, $headers);
    </pre>
</code>
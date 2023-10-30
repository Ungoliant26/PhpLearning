<?php
    session_start();
    unset($_SESSION ["userName"]);
    unset($_SESSION ["email"]);
    unset($_SESSION ["subject"]);
    unset($_SESSION ["message"]);

    unset($_SESSION ["errorUserName"]);
    unset($_SESSION ["errorFrom"]);
    unset($_SESSION ["errorSubject"]);
    unset($_SESSION ["errorMessage"]);
    function redirect() {
        header("Location: contact.php");
        exit;
    }

    $userName = htmlspecialchars(trim($_POST['userName']));
    $userFrom = htmlspecialchars(trim($_POST['email']));
    $userSubject = htmlspecialchars(trim($_POST['subject']));
    $userMessage = htmlspecialchars(trim($_POST['message']));

    $_SESSION['userName'] = $userName;
    $_SESSION['email'] = $userFrom;
    $_SESSION['subject'] = $userSubject;
    $_SESSION['message'] = $userMessage;

    if(strlen($userName) <= 1 ) {
        $_SESSION["errorUserName"] = "Enter correct Username";
        redirect();
    } else if (strlen($userFrom) < 5 || !strpos($userFrom, "@")) {
        $_SESSION["errorFrom"] = "Invalid Email";
        redirect();
    } else if (strlen($userSubject) <= 5) {
        $_SESSION["errorSubject"] = "The subjects must contain at least 5 or more symbols";
        redirect();
    } else if (strlen($userMessage) <= 15) {
        $_SESSION["errorMessage"] = "The message must contain at least 15 or more symbols";
        redirect();
    } else {
        $subject = "=?utf-8?B?" . base64_encode($userSubject) . "?=";
        $headers = "From: $userFrom \r \n Reply-to: $userFrom \r \n Content-type:text/plain; charset=utf-8 \r \n";
        mail("rakot666111@gmail.com", $userSubject, $userMessage, $headers);
        $_SESSION["successEmail"] = "You have successfully sent an email";
        redirect();
    }

<?php
    require 'blocks/header.php';

    $name = $_POST['nameUser'];
    $email= $_POST['email'];
    $pass = $_POST['password'];

    if(trim($name) == '') {
        echo 'Please, enter User Name';
    }

    else if (strlen(trim($name)) <= 1) {
        echo 'Please, enter correct name';
    }

    else if (trim($email) == '' || trim($pass) == '' || trim($_POST['message']) == '') {
        echo 'Please, fill in all input fields';
    }

    else {
       /* $_POST['password'] = sha1($pass);
        echo "<h1>All Data</h1>";
        foreach ($_POST as $key => $value)
            echo "<p>$value</p>";*/

            header('Location: https://youtube.com');
            exit;
    }
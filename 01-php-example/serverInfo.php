<?php
    $title = 'Server Info';
    require_once 'blocks/header.php';
/*echo '<pre>';
print_r($_SERVER);
echo '</pre>';*/

    echo $_SERVER['HTTP_HOST'] . '<br>' . $_SERVER['REQUEST_URI'] . '<br>' . $_SERVER['HTTP_USER_AGENT'];

    if($_GET['source'] != "") {
        $link = explode("?source=", $_SERVER['REQUEST_URI']);
        $redirect = "http://" . $_SERVER['HTTP_HOST'] . $link[0];

        header('HTTP/1.1 301 Moved Permanently');
        header('Location: ' . $redirect);
        exit();
    }

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Learning MySQL</title>
</head>
<body>
<h1>MySQL Main</h1>
<?php
    $mysql = new mysqli("localhost", "root", "", "phpMySQL");
    $mysql -> query(" SET NAMES 'utf-8' ");

    function printResult($result) {
        if($result -> num_rows > 0) {
            // print_r($result -> fetch_all());
            while($row = $result -> fetch_assoc()) {
                echo "<b>ID</b>: " . $row['id'] . "** ";
                echo "NAME: " . $row['name'] . "** ";
                echo "BIO: " . $row['bio'] . '<br>'. '<br>';
            }
        }
        echo "<hr>";
    }

  /*  for($i = 0; $i <= 5; $i++) {
        $name = "Ricardo #" . $i;
        $mysql -> query("INSERT INTO `usersExample` (`name`, `bio`) VALUES('$name', 'Example text Begin') ");
    }*/

    // $mysql -> query("UPDATE `usersExample` SET `bio` = '000000' WHERE `usersExample`.`id` <> 1");
    // $mysql -> query("DELETE FROM `usersExample` WHERE `id` = 4");

    $result = $mysql -> query("SELECT * FROM `usersExample`");
    printResult($result);

    $result = $mysql -> query(" SELECT `id`, `name` FROM `usersExample`");
    printResult($result);

    $result = $mysql -> query("SELECT * FROM `usersExample` WHERE `id` > 3 ORDER BY `id` DESC");
    printResult($result);

    $result = $mysql -> query("SELECT * FROM `usersExample` LIMIT 2");
    printResult($result);

if($mysql -> connect_error) {
        echo 'Error Number: ' . $mysql -> connect_errno . '<br>';
        echo 'Error: ' . $mysql -> connect_error;
    } else {
        echo '<br> Host info: ' . $mysql -> host_info;
    }

    $mysql -> close();
?>
</body>
</html>


<?php
session_start();
$title = 'Contacts';
require_once 'blocks/header.php';
?>
    <h1 class="mt-5">Contact</h1>

    <div class="text-success"><?=$_SESSION["successEmail"]?></div>

    <form action="checkContact.php" method="post">
        <input type="text" name="userName" value="<?=$_SESSION['userName']?>" placeholder="Enter your name" class="form-control">
            <div class="text-danger"><?= $_SESSION["errorUserName"] ?></div><br>
        <input type="email" name="email" value="<?=$_SESSION['email']?>" placeholder="Enter Email" class="form-control">
            <div class="text-danger"><?= $_SESSION["errorFrom"] ?></div><br>
        <input type="text" name="subject" value="<?=$_SESSION['subject']?>" placeholder="Message theme" class="form-control">
            <div class="text-danger"><?= $_SESSION["errorSubject"] ?></div><br>
        <textarea name="message" value="<?=$_SESSION['message']?>" placeholder="Your message" class="form-control"></textarea>
            <div class="text-danger"><?= $_SESSION["errorMessage"] ?></div><br>
        <button type="submit" class="btn btn-success">Send Info</button>
    </form>

<?php
require 'blocks/footer.php';
?>
<?php
    $title = 'About Us';
    require 'blocks/header.php';
?>
<div class="container mt-2">
    <h1>About Us</h1>

    <form action="post.php" method="post" >
        <input type="text" name="nameUser" placeholder="Enter your name" class="form-control" value="Kirill"><br>
        <input type="email" name="email" placeholder="Enter Email" class="form-control" value="example@gmail.com"><br>
        <input type="password" name="password" placeholder="Enter Password" class="form-control" value="12345"><br>
        <textarea name="message" placeholder="Enter your comments" class="form-control" text="Some text">Some text</textarea><br>
        <input type="submit" value="Sent info" class="btn btn-success">
    </form>
</div>


<?php
    require 'blocks/footer.php';
?>
<?php
include 'backend/database.php';
include 'backend/register/register_server.php';
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="frontend/register.css">
    <title>Register</title>
</head>

<body>
    <div id="Return-btn">
        <a href="log-in.php">LOGIN</a>
    </div>
    <div>
    <?php
    include 'backend/register/register_errors.php';
    ?>
    </div>
    <div>
    <?php
    if (isset($_POST['create'])) {
        if (count($errors) == 0) {
            echo '<div class="done">';
            echo '<p>Your account was made!</p>';
            echo '<p>Welcome ' . $username . '!</p>';
            echo '</div>';
        }
    }
    ?>
    </div>
    <div class="register">
        <form class="form-reg" action="register.php" method="post">
            <input type="text" placeholder="Your username" name="username">
            <input type="text" placeholder="Your email" name="email">
            <input type="password" placeholder="Your password" name="password">
            <input type="password" placeholder="Confirm password" name="password_two">
            <button type="submit" name="create">Sign up !</button>
        </form>

    </div>
</body>
</html>
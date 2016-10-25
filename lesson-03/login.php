<?php

    session_start();

    if( isset($_POST['username']) && $_POST['username'] == 'student' &&
        isset($_POST['password']) && $_POST['password'] == 'phpakademija'
    ) {
        $_SESSION['is_logged_in'] = true;
    }

?>

<!DOCTYPE html>
<html lang="hr">
<head>
    <meta charset="UTF-8">
    <title>Login example</title>
    <style>
        input, textarea { display: block; }
    </style>
</head>
<body>
    <?php if(isset($_SESSION['is_logged_in']) && $_SESSION['is_logged_in']): ?>

        <p>Welcome admin, you are now logged in.</p>

        <p>Some secret admin only content goes here :]</p>

    <?php else: ?>

        <form method="post">

            <label for="username">Username</label>
            <input type="text" id="username" name="username" required />

            <label for="password">Password</label>
            <input type="text" id="password" name="password" required />

            <label for="remember-me">Remember me</label>
            <input id="remember-me" name="remember-me" type="checkbox" />

            <button type="submit">Login</button>

        </form>

    <?php endif ?>

</body>
</html>

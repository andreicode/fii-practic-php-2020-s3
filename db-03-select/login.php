<?php
session_start();


if (isset($_SESSION['auth'])) {
    header('Location: dashboard.php');
}

?>

<html>
    <head><title>Dashboard</title></head>
    <body>
        <form action="login-user.php" method="POST">
            <input type="text" name="email"/>
            <input type="password" name="password"/>
            <button type="submit">Login</button>
        </form>
    </body>
</html>
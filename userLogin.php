<?php
session_start();
include('config/dbconnection.php');

if (isset($_SESSION['auth'])) {
    header('Location: patientRegistration.php');
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Login</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link rel="stylesheet" href="assets/css/new-style.css">
</head>
<body oncontextmenu="return false;">
    <div class="container">
        <div class="heading">
            <h2>User Login</h2>
        </div>
        <div class="form">
            <form action="logincode.php" method="POST" id="loginForm">
                <label for="username">Username</label>
                <input type="text" id="username" name="username" placeholder="Enter your username" required>
                <span class="error" id="error_username"></span>

                <label for="password">Password</label>
                <input type="password" id="password" name="password" placeholder="Enter your password" required>
                <span class="error" id="error_password"></span>

                <button type="submit" name="login"><strong>Login</strong></button>

                <p><a href="userRegistration.php">Don't have an account? Sign Up here.</a></p>
            </form>
        </div>
    </div>
</body>
</html>

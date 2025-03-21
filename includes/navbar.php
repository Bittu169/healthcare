<?php

if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/navbar.css">   
    <link href="images/logo.png" rel="icon">
    <title>Patient Registration</title>
</head>
<body>
    <nav class="navbar">
        <div class="logo">
            <img src="images/logo.png" alt="Hospital Logo">
            <h1>Burdwan Medical College</h1>
        </div>
        <ul class="nav-links">
            <li><a href="home.php">Home</a></li>
            <li><a href="about.php">About Us</a></li>
            <li><a href="userRegistration.php">Registration Desk</a></li>
            <li><a href="viewDetails.php">View Registration Details</a></li>
            <li><a href="logout.php">Logout</a></li>
        </ul>
        <div class="logout">
            <?php if (isset($_SESSION['user_logged_in']) && $_SESSION['user_logged_in'] == true): ?>
                <a href="logout.php" class="logout-btn">Logout</a>
            <?php endif; ?>
        </div>
    </nav>
</body>
</html>


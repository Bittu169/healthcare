<?php
session_start();
include('config/dbconnection.php');

// Check if the form has been submitted
if (isset($_POST['register'])) {
    $username = trim($_POST['username']);
    $email = trim($_POST['email']);
    $contact = trim($_POST['contact']);
    $password = trim($_POST['password']);
    $cpassword = trim($_POST['cpassword']);

    // Basic validation
    if (empty($username) || empty($email) || empty($contact) || empty($password) || empty($cpassword)) {
        $_SESSION['status'] = "All fields are required!";
        header('Location: userRegistration.php');
        exit();
    }

    // Validate contact number (must be numeric and 10 digits)
    if (!preg_match("/^[0-9]{10}$/", $contact)) {
        $_SESSION['status'] = "Invalid contact number! Must be 10 digits.";
        header('Location: userRegistration.php');
        exit();
    }

    // Check if passwords match
    if ($password !== $cpassword) {
        $_SESSION['status'] = "Passwords do not match!";
        header('Location: userRegistration.php');
        exit();
    }

    // Validate email format
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $_SESSION['status'] = "Invalid email format!";
        header('Location: userRegistration.php');
        exit();
    }

    // Check if the username, email, or contact number already exists in the database
    $checkUserQuery = "SELECT * FROM users WHERE username = ? OR email = ? OR contact = ?";
    $stmt = $conn->prepare($checkUserQuery);
    $stmt->bind_param("sss", $username, $email, $contact);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $_SESSION['status'] = "Username, email, or contact number already exists!";
        header('Location: userRegistration.php');
        exit();
    }

    // Hash the password before storing it in the database
    $hashedPassword = password_hash($password, PASSWORD_BCRYPT);
    
    // Insert the new user into the database
    $insertUserQuery = "INSERT INTO users (username, email, contact, password) VALUES (?, ?, ?, ?)";
    $stmt = $conn->prepare($insertUserQuery);
    $stmt->bind_param("ssss", $username, $email, $contact, $hashedPassword);

    if ($stmt->execute()) {
        $_SESSION['status'] = "Registration successful! Please log in.";
        header('Location: userLogin.php');
        exit();
    } else {
        $_SESSION['status'] = "Registration failed! Please try again.";
        header('Location: userRegistration.php');
        exit();
    }
}
?>

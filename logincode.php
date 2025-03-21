<?php
session_start();
include('config/dbconnection.php');

if (isset($_POST['login'])) {
    $username = trim($_POST['username']);
    $password = trim($_POST['password']);
  
    if (empty($username) || empty($password)) {
        $_SESSION['status'] = "Both fields are required!";
        header('Location: userLogin.php');
        exit();
    }

    
    $query = "SELECT * FROM users WHERE username = ?";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows === 1) {
        $user = $result->fetch_assoc();
        
        if (password_verify($password, $user['password'])) {
            
            $_SESSION['auth'] = true;
            $_SESSION['username'] = $user['username'];
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['status'] = "Login successful!";
            header('Location: patientRegistration.php');
            exit();
        } else {
            $_SESSION['status'] = "Incorrect password!";
            header('Location: userLogin.php');
            exit();
        }
    } else {
        $_SESSION['status'] = "No user found with that username!";
        header('Location: userLogin.php');
        exit();
    }
}
?>

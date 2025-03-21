<?php
session_start();
include('config/dbconnection.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link rel="stylesheet" href="assets/css/new-styles.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400..700&family=Quicksand:wght@300..700&display=swap" rel="stylesheet">
   
    <link href="images/logo.png" rel="icon">
</head>
<body>
<?php
if (isset($_SESSION['status'])) {
    echo "<script>
        Swal.fire({
            icon: 'success',
            title: '" . addslashes($_SESSION['status']) . "',  
            showConfirmButton: false,
            timer: 1500
        }).then(() => {
            document.getElementById('signin').submit();  
        });
    </script>";
    unset($_SESSION['status']);
}
?>

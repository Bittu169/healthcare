<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link rel="stylesheet" href="assets/css/style.css">
    
    <link href="images/logo.png" rel="icon">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400..900&family=Quicksand:wght@300..700&display=swap" rel="stylesheet">
    
    <link href="images/logo.png" rel="icon">
    <style>
        body {
            background: linear-gradient(135deg, #2a2a72, #009ffd);
            font-family: 'Quicksand', sans-serif;
            margin: 0;
            padding: 0;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .container {
            background: white;
            padding: 40px;
            border-radius: 10px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 400px;
        }

        .heading h2 {
            text-align: center;
            font-family: 'Montserrat', sans-serif;
            color: #333;
            margin-bottom: 30px;
        }

        .form label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
            color: #333;
        }

        .form input[type="text"],
        .form input[type="password"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ddd;
            border-radius: 5px;
            font-size: 14px;
            transition: all 0.3s ease-in-out;
        }

        .form input[type="text"]:focus,
        .form input[type="password"]:focus {
            border-color: #009ffd;
            box-shadow: 0 0 8px rgba(0, 159, 253, 0.3);
        }

        .form button {
            width: 100%;
            padding: 12px;
            background-color: #009ffd;
            color: white;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
            transition: all 0.3s ease-in-out;
        }

        .form button:hover {
            background-color: #007bb5;
        }

        .error {
            color: red;
            font-size: 12px;
            margin-top: -10px;
            margin-bottom: 15px;
        }

        .form p {
            text-align: center;
            margin-top: 15px;
        }

        .form a {
            color: #009ffd;
            text-decoration: none;
        }

        .form a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<?php
session_start();
include('config/dbconnection.php');


if (!isset($_SESSION['auth']) || $_SESSION['user_type'] != 'admin') {
    header('Location: userLogin.php');
    exit();
}

// if (!isset($_SESSION['auth'])) {
//     header('Location: userLogin.php');
//     exit();
// }



$query = "SELECT * FROM patients"; 
$result = mysqli_query($conn, $query);


if (mysqli_num_rows($result) > 0) {
    $patients = mysqli_fetch_all($result, MYSQLI_ASSOC);
} else {
    $patients = [];
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Patient Details</title>
    <link rel="stylesheet" href="assets/css/view.styles.css"> 
</head>
<body>
    <div class="container">
        <h2>Patient Registration Details</h2>
        <?php if (count($patients) > 0): ?>
            <table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Contact Number</th>
                        <th>Age</th>
                        <th>Gender</th>
                        <th>State</th>
                        <th>District</th>
                        <th>City</th>
                        <th>Date of Birth</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($patients as $patient): ?>
                        <tr>
                            <td><?php echo htmlspecialchars($patient['id']); ?></td>
                            <td><?php echo htmlspecialchars($patient['name']); ?></td>
                            <td><?php echo htmlspecialchars($patient['email']); ?></td>
                            <td><?php echo htmlspecialchars($patient['number']); ?></td>
                            <td><?php echo htmlspecialchars($patient['age']); ?></td>
                            <td><?php echo htmlspecialchars($patient['gender']); ?></td>
                            <td><?php echo htmlspecialchars($patient['state']); ?></td>
                            <td><?php echo htmlspecialchars($patient['district']); ?></td>
                            <td><?php echo htmlspecialchars($patient['city']); ?></td>
                            <td><?php echo htmlspecialchars($patient['dob']); ?></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        <?php else: ?>
            <p>No patient registration details found.</p>
        <?php endif; ?>
    </div>
</body>
</html>

<?php
session_start();
include('config/dbconnection.php');
require_once('tcpdf.php'); 


if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['patientRegistration'])) {
    
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $blood_group = mysqli_real_escape_string($conn, $_POST['blood_group']);
    $age = mysqli_real_escape_string($conn, $_POST['age']);
    $gender = mysqli_real_escape_string($conn, $_POST['gender']);
    $number = mysqli_real_escape_string($conn, $_POST['number']);
    $dob = mysqli_real_escape_string($conn, $_POST['dob']);
    $address_line1 = mysqli_real_escape_string($conn, $_POST['address_line1']);
    $address_line2 = mysqli_real_escape_string($conn, $_POST['address_line2']);
    $district = mysqli_real_escape_string($conn, $_POST['district']);
    $city = mysqli_real_escape_string($conn, $_POST['city']);
    $state = mysqli_real_escape_string($conn, $_POST['state']);
    $pincode = mysqli_real_escape_string($conn, $_POST['pincode']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);

 
    $stmt = $conn->prepare("INSERT INTO patients (name, blood_group, age, gender, number, dob, address_line1, address_line2, district, city, state, pincode, email)
                            VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("sssssssssssss", $name, $blood_group, $age, $gender, $number, $dob, $address_line1, $address_line2, $district, $city, $state, $pincode, $email);

    if ($stmt->execute()) {
        $pdf = new TCPDF();
        $pdf->AddPage();
        $pdf->SetFont('helvetica', '', 8);

        
        $html = '
        <h2 align="center">Burdwan Medical College</h2>
        <h2 align="center">Patient Prescription</h2>
        <table border="1" cellpadding="5" cellspacing="0" style="width:100%; border-collapse: collapse;">
            <tr><th>Name</th><td colspan="3">' . htmlspecialchars($name) . '</td></tr>
            <tr><th>Blood Group</th><td>' . htmlspecialchars($blood_group) . '</td><th>Age</th><td>' . htmlspecialchars($age) . '</td></tr>
            <tr><th>Gender</th><td>' . htmlspecialchars($gender) . '</td><th>Contact Number</th><td>' . htmlspecialchars($number) . '</td></tr>
            <tr><th>Date of Birth</th><td colspan="3">' . htmlspecialchars($dob) . '</td></tr>
            <tr><th>Address Line 1</th><td colspan="3">' . htmlspecialchars($address_line1) . '</td></tr>
            <tr><th>Address Line 2</th><td colspan="3">' . htmlspecialchars($address_line2) . '</td></tr>
            <tr><th>District</th><td>' . htmlspecialchars($district) . '</td><th>City</th><td>' . htmlspecialchars($city) . '</td></tr>
            <tr><th>State</th><td>' . htmlspecialchars($state) . '</td><th>Pincode</th><td>' . htmlspecialchars($pincode) . '</td></tr>
            <tr><th>Email</th><td colspan="3">' . htmlspecialchars($email) . '</td></tr>
        </table>';

        $pdf->writeHTML($html, true, false, true, false, '');

        $outputPath = 'C:\\xampp\\htdocs\\healthCare\\patientDetails\\patient_prescription_' . urlencode($name) . '.pdf';

      
        $pdf->Output($outputPath, 'F');

        
        if (file_exists($outputPath)) {
            echo "PDF has been successfully generated and stored in the 'patientDetails' folder.";

            
            $pdf->Output('patient_prescription_' . urlencode($name) . '.pdf', 'I');
        } else {
            echo "An error occurred while saving the PDF.";
        }
    } else {
        echo "Error: " . $stmt->error;
    }

    
    $stmt->close();
    $conn->close();
}
?>

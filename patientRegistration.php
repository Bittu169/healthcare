<?php
session_start();
include('config/dbconnection.php');
include('includes/navbar.php');

if(!isset($_SESSION['auth'])){
    header('Location: userLogin.php');
    exit();
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">    
    <link href="images/logo.png" rel="icon">
    <title>Patient Registration Form</title>
    <link rel="stylesheet" href="assets/css/new.style.css.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href=" https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&family=Parkinsans:wght@300..800&display=swap" rel="stylesheet">
</head>
<body>
    <div class="container">
        <div class="heading">
            <h2>Patient Registration Form</h2>
        </div>
        <div class="form">
            <form action="code.php" method="post" id="form-inner">
                <table>
                    <tr>
                        <td>
                            <label for="name">Patient Name</label>
                            <input type="text" name="name" id="name" placeholder="Patient Name" required>
                        </td>
                        <td>
                            <label for="blood_group">Blood Group</label>
                            <select name="blood_group" id="blood_group" required>
                                <option value="">- Choose one -</option>
                                <option value="A+">A+</option>
                                <option value="B+">B+</option>
                                <option value="A-">A-</option>
                                <option value="B-">B-</option>
                                <option value="O+">O+</option>
                                <option value="O-">O-</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="age">Age</label>
                            <input type="number" name="age" id="age" placeholder="Patient Age" required>
                        </td>
                        <td>
                            <label for="gender">Gender</label>
                            <select name="gender" id="gender" required>
                                <option value="">-Select-</option>
                                <option value="Male">Male</option>
                                <option value="Female">Female</option>
                                <option value="Others">Others</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="number">Contact Number</label>
                            <input type="text" name="number" id="number" placeholder="Contact Details" required>
                        </td>
                        <td>
                            <label for="dob">Date of Birth</label>
                            <input type="date" name="dob" id="dob" required>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="address_line1">Address Line 1</label>
                            <input type="text" name="address_line1" id="address_line1" placeholder="Street Address Line 1" required>
                        </td>
                        <td>
                            <label for="address_line2">Address Line 2</label>
                            <input type="text" name="address_line2" id="address_line2" placeholder="Street Address Line 2">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="state">State</label>
                            <select name="state" id="state" onchange="updateDistricts()" required>
                                <option value="">-Select state-</option>
                                <option value="Andhra Pradesh">Andhra Pradesh</option>
                                <option value="Arunachal Pradesh">Arunachal Pradesh</option>
                                <option value="Assam">Assam</option>
                                <option value="Bihar">Bihar</option>
                                <option value="Chhattisgarh">Chhattisgarh</option>
                                <option value="West Bengal">West Bengal</option>
                            </select>
                        </td>
                        <td>
                            <label for="city">City</label>
                            <input type="text" name="city" id="city" placeholder="City" required>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="district">District</label>
                            <select name="district" id="district" required>
                                <option value="">-Select District-</option>
                            </select>
                        </td>
                        <td>
                            <label for="pincode">Pincode</label>
                            <input type="text" name="pincode" id="pincode" placeholder="Pincode" required>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <label for="email">Email Details</label>
                            <input type="email" name="email" id="email" placeholder="Email Id." required>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2" id="btn">
                            <button type="submit" name="patientRegistration">Submit</button>
                        </td>
                    </tr>
                </table>
            </form>
        </div>
    </div>

    <script>
        // District data for states
        const stateDistricts = {
            "Andhra Pradesh": ["Anantapur", "Chittoor", "East Godavari", "Guntur", "Krishna", "Kurnool", "Nellore", "Prakasam", "Srikakulam", "Visakhapatnam", "West Godavari", "Y.S.R."],
            "Arunachal Pradesh": ["Tawang", "West Kameng", "East Kameng", "Papum Pare", "Lower Subansiri", "Upper Subansiri", "Kurung Kumey"],
            "Assam": ["Baksa", "Barpeta", "Bongaigaon", "Cachar", "Darrang", "Dibrugarh", "Goalpara"],
            "Bihar": ["Araria", "Aurangabad", "Begusarai", "Bhagalpur", "Buxar", "Darbhanga", "Gaya"],
            "Chhattisgarh": ["Bilaspur", "Dhamtari", "Durg", "Janjgir-Champa", "Korba", "Raigarh", "Rajnandgaon"],
            "West Bengal": ["Alipurduar", "Bankura", "Birbhum", "Purba Burdwan","Paschim Burdwan", "Cooch Behar", "Dakshin Dinajpur", "Darjeeling", "Hooghly", "Howrah", "Jalpaiguri", "Jhargram", "Kursheong", "Maldah", "Murshidabad", "Nadia", "North 24 Parganas", "Purba Medinipur", "Paschim Medinipur", "Purulia", "South 24 Parganas", "Uttar Dinajpur"]
        };

        function updateDistricts() {
            const stateSelect = document.getElementById("state");
            const districtSelect = document.getElementById("district");
            const selectedState = stateSelect.value;

            // Clear current district options
            districtSelect.innerHTML = '<option value="">-Select District-</option>';

            if (selectedState && stateDistricts[selectedState]) {
                stateDistricts[selectedState].forEach(district => {
                    const option = document.createElement("option");
                    option.value = district;
                    option.textContent = district;
                    districtSelect.appendChild(option);
                });
            }
        }
        

    </script>
</body>
</html>

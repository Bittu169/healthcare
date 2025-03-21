<?php
$host = "localhost";
$username = "root";
$password = "";
$database = "health_care";

$conn = mysqli_connect("$host", "$username", "$password", "$database");

if (!$conn) {
    
    header("location:../dberror/error.php");
    
    die();
}
// else{
//    echo "Database Connected.";
// }
?>

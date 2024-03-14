<?php

$hostname = "localhost";
$username = "root";
$password = "";
$database = "pets";

// Create a database connection
$conn = new mysqli($hostname, $username, $password, $database);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $age = $_POST['age'];
    $howhear = $_POST['howhear'];

    $sql = "INSERT INTO `register` VALUES('$firstname', '$lastname', '$username', '$email', '$password')";

    if ($conn->query($sql) === TRUE) {
        echo '<script>alert("Hello and Welcome !! ")</script>';
        
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
} else {
    // Handle the case where the form has not been submitted
    echo '<script>alert("Form not submitted!")</script>';
}
     
$conn->close();


?>

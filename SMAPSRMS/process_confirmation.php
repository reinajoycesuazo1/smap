<?php
session_start();
include 'db_config.php'; // Include database configuration

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $child_name = $_POST['child_name'];
    $dob = $_POST['dob'];
    $birth_place = $_POST['birth_place'];
    $gender = $_POST['gender'];
    $father_name = $_POST['father_name'];
    $mother_name = $_POST['mother_name'];
    $address = $_POST['address'];
    $contact = $_POST['contact'];
    $godparents = $_POST['godparents'];
    $confirmation_date = $_POST['confirmation_date'];
    $confirmation_time = $_POST['confirmation_time'];
    $priest_name = $_POST['priest_name'];

    // Prepare SQL statement to insert confirmation record
    $stmt = $pdo->prepare("INSERT INTO confirmation_records (child_name, dob, birth_place, gender, father_name, mother_name, address, contact, godparents, confirmation_date, confirmation_time, priest_name) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
    
    // Execute the statement
    if ($stmt->execute([$child_name, $dob, $birth_place, $gender, $father_name, $mother_name, $address, $contact, $godparents, $confirmation_date, $confirmation_time, $priest_name])) {
        echo "<h3>Confirmation Registration Successful!</h3>";
        echo "<p>Thank you for registering the confirmation.</p>";
    } else {
        echo "<h3>Error in Registration</h3>";
        echo "<p>There was an error processing your registration. Please try again.</p>";
    }
} else {
    // Redirect to confirmation registration form if accessed directly
    header("Location: confirmationReg.php");
    exit();
}
?>

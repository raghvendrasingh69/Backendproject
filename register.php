<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name    = $_POST['name'] ?? '';
    $email   = $_POST['email'] ?? '';
    $contact = $_POST['contact'] ?? '';
    $aadhar  = $_POST['aadhar'] ?? '';
    $gender  = $_POST['gender'] ?? '';
    $state   = $_POST['state'] ?? '';

    echo "<h2>Form Submitted Successfully!</h2>";
    echo "<p><strong>Name:</strong> $name</p>";
    echo "<p><strong>Email:</strong> $email</p>";
    echo "<p><strong>Contact:</strong> $contact</p>";
    echo "<p><strong>Aadhar:</strong> $aadhar</p>";
    echo "<p><strong>Gender:</strong> $gender</p>";
    echo "<p><strong>State:</strong> $state</p>";
} else {
    echo "Invalid request. Please submit the form.";
}
?>

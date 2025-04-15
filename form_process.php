<?php
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect and sanitize form inputs
    $name = htmlspecialchars($_POST["name"]);
    $email = htmlspecialchars($_POST["email"]);
    $password = htmlspecialchars($_POST["password"]);
    $message = htmlspecialchars($_POST["message"]);

    echo "<h2>Form Submitted Successfully!</h2>";
    echo "<p><strong>Name:</strong> $name</p>";
    echo "<p><strong>Email:</strong> $email</p>";
    echo "<p><strong>Password:</strong> $password</p>";
    echo "<p><strong>Message:</strong> $message</p>";
} else {
    echo "<h3>Access Denied</h3>";
}
?>

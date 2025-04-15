<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect form data
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    // Here you could store this in a database or send an email
    // For now, we just show a thank you message

    echo "<h1>Thank you, $name!</h1>";
    echo "<p>We have received your message:</p>";
    echo "<blockquote>$message</blockquote>";
    echo "<p>We will reach out to you at <strong>$email</strong>.</p>";
} else {
    echo "<p>No form data received.</p>";
}
?>

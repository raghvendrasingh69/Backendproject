<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $rating = $_POST['rating'] ?? null;

    if ($rating) {
        echo "<h2>Thank you for your rating!</h2>";
        echo "<p>You rated this page <strong>$rating</strong> out of 5.</p>";
    } else {
        echo "<p>No rating received. Please go back and select a rating.</p>";
    }
} else {
    echo "<p>Invalid request. Please submit the form properly.</p>";
}
?>

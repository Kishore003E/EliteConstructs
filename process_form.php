<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $to = "kicha2003E@gmail.com"; // Replace with your email address
    $subject = "New Inquiry from Website";
    $message = "Name: " . $_POST["fullname"] . "\n";
    $message .= "Email: " . $_POST["email"] . "\n";
    $message .= "Query: " . $_POST["query"];

    mail($to, $subject, $message);

    // Redirect back to the form or a thank you page
    header("Location: thank_you.html");
    exit();
}
?>

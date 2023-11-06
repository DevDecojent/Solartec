<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $subject = $_POST["subject"];
    $message = $_POST["message"];

    // Define your email address where you want to receive the form submissions.
    $to = "hasnain@decojent.com";

    // Subject of the email
    $subject = "New Contact Form Submission";

    // Compose the email message
    $message = "Name: " . $name . "\n";
    $message .= "Email: " . $email . "\n";
    $message .= "Subject: " . $subject . "\n";
    $message .= "Message:\n" . $message;

    // Send the email
    mail($to, $subject, $message);

    // Redirect the user to a thank you page
    header("Location: thank-you.html");
}
?>
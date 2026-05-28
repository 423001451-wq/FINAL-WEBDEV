<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name = htmlspecialchars($_POST["name"]);
    $email = htmlspecialchars($_POST["email"]);
    $subject = htmlspecialchars($_POST["subject"]);
    $message = htmlspecialchars($_POST["message"]);

    if (empty($name) || empty($email) || empty($subject) || empty($message)) {
        echo "Error: All fields are required. <a href='index.html'>Go back</a>";
        exit;
    }

    echo "<h2>Thank you, $name!</h2>";
    echo "<p>Your message has been received:</p>";
    echo "<p><strong>Subject:</strong> $subject</p>";
    echo "<p><strong>Message:</strong> $message</p>";
}
?>
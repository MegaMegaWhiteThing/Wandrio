<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = trim($_POST['email']);
    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        // Save the email to a file (or a database)
        file_put_contents('emails.txt', $email . PHP_EOL, FILE_APPEND);
        echo "Thank you for joining us!";
    } else {
        echo "Please enter a valid email address.";
    }
} else {
    header('Location: index.html');
    exit();
}
?>
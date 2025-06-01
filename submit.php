<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = isset($_POST['name']) ? $_POST['name'] : "Anonymous";
    $email = isset($_POST['email']) ? $_POST['email'] : "Not Provided";
    $message = $_POST['message'];

    $feedbackEntry = "Name: $name\nEmail: $email\nMessage: $message\n\n";

    file_put_contents('feedback.txt', $feedbackEntry, FILE_APPEND);

    header("Location: index.html");
    exit();
}
?>

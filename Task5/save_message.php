<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- save_message.php -->
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve and sanitize user input
    $name = htmlspecialchars($_POST['name']);
    $message = htmlspecialchars($_POST['message']);

    // Prepare the message to save
    $entry = "Name: $name\nMessage: $message\n----\n";

    // Append the message to the 'messages.txt' file
    file_put_contents('messages.txt', $entry, FILE_APPEND | LOCK_EX);

    // Redirect back to guestbook after submission
    header("Location: guestbook.php");
    exit();
} else {
    // Redirect to guestbook if accessed directly
    header("Location: guestbook.php");
    exit();
}
?>

</body>
</html>
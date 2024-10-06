<!-- guestbook.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Guestbook</title>
</head>
<body>

<h2>Guestbook</h2>
<form action="save_message.php" method="POST">
    <label for="name">Name:</label>
    <input type="text" id="name" name="name" required>
    <br><br>

    <label for="message">Message:</label>
    <textarea id="message" name="message" rows="4" cols="50" required></textarea>
    <br><br>

    <input type="submit" value="Submit">
</form>

<p><a href="messages.php">View Messages</a></p>

</body>
</html>

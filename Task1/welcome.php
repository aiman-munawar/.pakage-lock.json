<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- welcome.php -->
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve username from form
    $username = htmlspecialchars($_POST['username']);
    
    // Display welcome message
    echo "<h2>Welcome, $username!</h2>";
} else {
    // Redirect to login if accessed directly
    header("Location: index.php");
    exit();
}
?>

</body>
</html>
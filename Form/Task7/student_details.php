<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- student_details.php -->
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve and sanitize user inputs
    $name = htmlspecialchars($_POST['name']);
    $roll_number = htmlspecialchars($_POST['roll_number']);
    $course = htmlspecialchars($_POST['course']);

    // Display the student details
    echo "<h2>Student Details</h2>";
    echo "<p><strong>Name:</strong> $name</p>";
    echo "<p><strong>Roll Number:</strong> $roll_number</p>";
    echo "<p><strong>Course:</strong> $course</p>";
} else {
    // Redirect to registration form if accessed directly
    header("Location: register.php");
    exit();
}
?>

</body>
</html>
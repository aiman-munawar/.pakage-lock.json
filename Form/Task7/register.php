<!-- register.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Registration</title>
</head>
<body>

<h2>Student Registration Form</h2>
<form action="student_details.php" method="POST">
    <label for="name">Name:</label>
    <input type="text" id="name" name="name" required>
    <br><br>

    <label for="roll_number">Roll Number:</label>
    <input type="text" id="roll_number" name="roll_number" required>
    <br><br>

    <label for="course">Course:</label>
    <input type="text" id="course" name="course" required>
    <br><br>

    <input type="submit" value="Register">
</form>

</body>
</html>

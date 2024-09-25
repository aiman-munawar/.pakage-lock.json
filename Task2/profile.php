<!-- profile.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile Information</title>
</head>
<body>

<h2>Profile Form</h2>
<form action="display_profile.php" method="POST">
    <label for="name">Name:</label>
    <input type="text" id="name" name="name" required>
    <br><br>
    
    <label for="email">Email:</label>
    <input type="email" id="email" name="email" required>
    <br><br>
    
    <label for="age">Age:</label>
    <input type="number" id="age" name="age" required>
    <br><br>
    
    <input type="submit" value="Submit">
</form>

</body>
</html>
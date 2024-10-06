<!-- quiz.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Quiz</title>
</head>
<body>

<h2>Simple Quiz</h2>
<form action="result.php" method="POST">

    <!-- Question 1 -->
    <p>1. What is the capital of France?</p>
    <input type="radio" id="q1a1" name="q1" value="Paris" required>
    <label for="q1a1">Paris</label><br>
    <input type="radio" id="q1a2" name="q1" value="London">
    <label for="q1a2">London</label><br>
    <input type="radio" id="q1a3" name="q1" value="Berlin">
    <label for="q1a3">Berlin</label><br><br>

    <!-- Question 2 -->
    <p>2. What is the largest planet in our solar system?</p>
    <input type="radio" id="q2a1" name="q2" value="Earth" required>
    <label for="q2a1">Earth</label><br>
    <input type="radio" id="q2a2" name="q2" value="Jupiter">
    <label for="q2a2">Jupiter</label><br>
    <input type="radio" id="q2a3" name="q2" value="Mars">
    <label for="q2a3">Mars</label><br><br>

    <!-- Question 3 -->
    <p>3. Which element has the chemical symbol 'O'?</p>
    <input type="radio" id="q3a1" name="q3" value="Oxygen" required>
    <label for="q3a1">Oxygen</label><br>
    <input type="radio" id="q3a2" name="q3" value="Gold">
    <label for="q3a2">Gold</label><br>
    <input type="radio" id="q3a3" name="q3" value="Silver">
    <label for="q3a3">Silver</label><br><br>

    <input type="submit" value="Submit Quiz">
</form>

</body>
</html>

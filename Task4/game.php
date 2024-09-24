<!-- game.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rock, Paper, Scissors</title>
</head>
<body>

<h2>Rock, Paper, Scissors</h2>
<p>Select your choice:</p>
<form action="result.php" method="POST">
    <input type="radio" id="rock" name="user_choice" value="Rock" required>
    <label for="rock">Rock</label><br>

    <input type="radio" id="paper" name="user_choice" value="Paper">
    <label for="paper">Paper</label><br>

    <input type="radio" id="scissors" name="user_choice" value="Scissors">
    <label for="scissors">Scissors</label><br><br>

    <input type="submit" value="Play">
</form>

</body>
</html>

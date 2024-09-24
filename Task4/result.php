<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- result.php -->
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // User's choice from form
    $user_choice = $_POST['user_choice'];

    // Possible choices for the computer
    $choices = array("Rock", "Paper", "Scissors");

    // Randomly select a choice for the computer
    $computer_choice = $choices[array_rand($choices)];

    // Determine the result
    function get_winner($user_choice, $computer_choice) {
        if ($user_choice == $computer_choice) {
            return "It's a tie!";
        } elseif (($user_choice == "Rock" && $computer_choice == "Scissors") ||
                  ($user_choice == "Paper" && $computer_choice == "Rock") ||
                  ($user_choice == "Scissors" && $computer_choice == "Paper")) {
            return "You win!";
        } else {
            return "You lose!";
        }
    }

    // Get the result
    $result = get_winner($user_choice, $computer_choice);

    // Display the result
    echo "<h2>Game Result</h2>";
    echo "<p><strong>Your choice:</strong> $user_choice</p>";
    echo "<p><strong>Computer's choice:</strong> $computer_choice</p>";
    echo "<h3>$result</h3>";
} else {
    // Redirect to game if accessed directly
    header("Location: game.php");
    exit();
}
?>

</body>
</html>
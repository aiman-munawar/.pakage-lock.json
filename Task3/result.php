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
    // Store correct answers
    $correct_answers = array(
        'q1' => 'Paris',
        'q2' => 'Jupiter',
        'q3' => 'Oxygen'
    );

    // Initialize score
    $score = 0;
    $total_questions = count($correct_answers);

    // Check submitted answers and calculate score
    foreach ($correct_answers as $question => $correct_answer) {
        if (isset($_POST[$question]) && $_POST[$question] == $correct_answer) {
            $score++;
        }
    }

    // Display result
    echo "<h2>Quiz Result</h2>";
    echo "<p>Your Score: $score / $total_questions</p>";

    // Provide feedback
    if ($score == $total_questions) {
        echo "<p>Excellent! You got all questions right!</p>";
    } elseif ($score > 0) {
        echo "<p>Good effort! Try again to improve your score.</p>";
    } else {
        echo "<p>Don't worry, try again!</p>";
    }
} else {
    // Redirect to quiz if accessed directly
    header("Location: quiz.php");
    exit();
}
?>

</body>
</html>
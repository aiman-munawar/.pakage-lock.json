<!DOCTYPE html>
<html>
<head>
    <title>Table</title>
</head>
<body>

<h2>Table</h2>
<form method="post">
    <label for="num">Enter a Number:</label>
    <input type="number" id="num" name="num" required>
    <br><br>

    <input type="submit" name="submit" value="Generate Table">
</form>

<?php
if (isset($_POST['submit'])) {
    $num = $_POST['num'];

    echo "<h3>Table of $num:</h3>";
    echo $num . " x 1 = " . ($num * 1) . "<br>";
    echo $num . " x 2 = " . ($num * 2) . "<br>";
    echo $num . " x 3 = " . ($num * 3) . "<br>";
    echo $num . " x 4 = " . ($num * 4) . "<br>";
    echo $num . " x 5 = " . ($num * 5) . "<br>";
    echo $num . " x 6 = " . ($num * 6) . "<br>";
    echo $num . " x 7 = " . ($num * 7) . "<br>";
    echo $num . " x 8 = " . ($num * 8) . "<br>";
    echo $num . " x 9 = " . ($num * 9) . "<br>";
    echo $num . " x 10 = " . ($num * 10) . "<br>";
}
?>

</body>
</html>

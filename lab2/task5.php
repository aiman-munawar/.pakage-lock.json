<!DOCTYPE html>
<html>
<head>
    <title>Table with Function</title>
</head>
<body>

<h2>Table Using Function</h2>
<form method="post">
    <label for="num">Enter a Number:</label>
    <input type="number" id="num" name="num" required>
    <br><br>

    <input type="submit" name="submit" value="Generate Table">
</form>

<?php
if (isset($_POST['submit'])) {
    $num = $_POST['num'];
    function printTable($num) {
        echo "<h3>Table of $num:</h3>";
        for ($i = 1; $i <= 10; $i++) {
            echo $num . " x " . $i . " = " . ($num * $i) . "<br>";
        }
    }
    printTable($num);
}
?>

</body>
</html>

<!DOCTYPE html>
<html>
<head>
    <title>Calculator</title>
</head>
<body>

<h2>Calculator</h2>
<form method="GET">
    <label for="num1">Enter First Number:</label>
    <input type="number" id="num1" name="num1" step="any" required>
    <br><br>

    <label for="num2">Enter Second Number:</label>
    <input type="number" id="num2" name="num2" step="any" required>
    <br><br>

    <label for="operator">Choose Operator:</label>
    <select id="operator" name="operator" required>
        <option value="+">Add (+)</option>
        <option value="-">Subtract (-)</option>
        <option value="*">Multiply (*)</option>
        <option value="/">Divide (/)</option>
    </select>
    <br><br>

    <input type="submit" name="submit" value="Calculate">
</form>

<?php
if (isset($_GET['submit'])) {
    $num1 = $_GET['num1'];
    $num2 = $_GET['num2'];
    $operator = $_GET['operator'];

    switch ($operator) {
        case '+':
            $result = $num1 + $num2;
            break;
        case '-':
            $result = $num1 - $num2;
            break;
        case '*':
            $result = $num1 * $num2;
            break;
        case '/':
            if ($num2 != 0) {
                $result = $num1 / $num2;
            } else {
                $result = "Error! Division by zero.";
            }
            break;
        default:
            $result = "Invalid operator!";
    }

    echo "<h3>Result: $result</h3>";
}
?>

</body>
</html>

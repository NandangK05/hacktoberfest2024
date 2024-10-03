<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $number1 = $_POST['number1'];
    $number2 = $_POST['number2'];
    $operation = $_POST['operation'];
    $result = '';

    if (is_numeric($number1) && is_numeric($number2)) {
        switch ($operation) {
            case "add":
                $result = $number1 + $number2;
                break;
            case "subtract":
                $result = $number1 - $number2;
                break;
            case "multiply":
                $result = $number1 * $number2;
                break;
            case "divide":
                if ($number2 != 0) {
                    $result = $number1 / $number2;
                } else {
                    $result = "Cannot divide by zero!";
                }
                break;
            default:
                $result = "Invalid operation!";
        }
    } else {
        $result = "Please enter valid numbers.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Calculator</title>
</head>
<body>
    <h1>PHP Calculator</h1>
    <form method="post" action="">
        <input type="number" name="number1" placeholder="Enter first number" required>
        <input type="number" name="number2" placeholder="Enter second number" required>
        <select name="operation">
            <option value="add">Add</option>
            <option value="subtract">Subtract</option>
            <option value="multiply">Multiply</option>
            <option value="divide">Divide</option>
        </select>
        <button type="submit">Calculate</button>
    </form>
    <?php
    if (isset($result)) {
        echo "<h2>Result: $result</h2>";
    }
    ?>
</body>
</html>

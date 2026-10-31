<?php
$result = null;
$error = "";
$a = "";
$b = "";
$op = "+";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $a = trim($_POST["a"] ?? "");
    $b = trim($_POST["b"] ?? "");
    $op = $_POST["op"] ?? "+";

    if (!is_numeric($a) || !is_numeric($b)) {
        $error = "Please type two numbers.";
    } else {
        switch ($op) {
            case "+":
                $result = $a + $b;
                break;
            case "-":
                $result = $a - $b;
                break;
            case "*":
                $result = $a * $b;
                break;
            case "/":
                if ($b == 0) {
                    $error = "You cannot divide by zero.";
                } else {
                    $result = $a / $b;
                }
                break;
            default:
                $error = "Unknown operation.";
        }
    }
}

// Symbols to show on the page
$symbols = ["+" => "+", "-" => "−", "*" => "×", "/" => "÷"];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Calculator</title>
</head>
<body>
    <h1>Simple calculator</h1>

    <form method="post">
        <input type="text" name="a" value="<?php echo htmlspecialchars($a); ?>">
        <select name="op">
            <?php foreach ($symbols as $value => $label): ?>
                <option value="<?php echo $value; ?>" <?php if ($op === $value) echo "selected"; ?>>
                    <?php echo $label; ?>
                </option>
            <?php endforeach; ?>
        </select>
        <input type="text" name="b" value="<?php echo htmlspecialchars($b); ?>">
        <button type="submit">=</button>
    </form>

    <?php if ($error !== ""): ?>
        <p style="color: red;"><?php echo htmlspecialchars($error); ?></p>
    <?php elseif ($result !== null): ?>
        <h2>Answer: <?php echo round($result, 4); ?></h2>
    <?php endif; ?>
</body>
</html>

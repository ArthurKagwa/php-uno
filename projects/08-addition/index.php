<?php
$result = null;
$error = "";
$a = "";
$b = "";

// Only run this part after the form is submitted
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $a = trim($_POST["a"] ?? "");
    $b = trim($_POST["b"] ?? "");

    if ($a === "" || $b === "") {
        $error = "Please fill in both numbers.";
    } elseif (!is_numeric($a) || !is_numeric($b)) {
        $error = "Please type numbers only.";
    } else {
        $result = $a + $b;
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Two Numbers</title>
</head>
<body>
    <h1>Add two numbers</h1>

    <form method="post">
        <input type="text" name="a" placeholder="First number"
               value="<?php echo htmlspecialchars($a); ?>">
        +
        <input type="text" name="b" placeholder="Second number"
               value="<?php echo htmlspecialchars($b); ?>">
        <button type="submit">Add</button>
    </form>

    <?php if ($error !== ""): ?>
        <p style="color: red;"><?php echo htmlspecialchars($error); ?></p>
    <?php elseif ($result !== null): ?>
        <h2>
            <?php echo htmlspecialchars($a) . " + " . htmlspecialchars($b) . " = " . $result; ?>
        </h2>
    <?php endif; ?>
</body>
</html>

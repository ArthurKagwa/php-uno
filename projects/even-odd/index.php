<?php
$message = "";
$number = "";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $number = trim($_POST["number"] ?? "");

    // Only whole numbers can be even or odd
    if (filter_var($number, FILTER_VALIDATE_INT) === false) {
        $message = "Please type a whole number, like 7 or 12.";
    } elseif ($number % 2 === 0) {
        $message = "$number is EVEN.";
    } else {
        $message = "$number is ODD.";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Even or Odd</title>
</head>
<body>
    <h1>Even or odd?</h1>

    <form method="post">
        <input type="text" name="number" placeholder="Type a number"
               value="<?php echo htmlspecialchars($number); ?>">
        <button type="submit">Check</button>
    </form>

    <?php if ($message !== ""): ?>
        <h2><?php echo htmlspecialchars($message); ?></h2>
    <?php endif; ?>
</body>
</html>

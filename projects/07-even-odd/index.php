<?php
// Change this number, save, and refresh the page
$number = 7;

// % gives the remainder after dividing
if ($number % 2 == 0) {
    $answer = "EVEN";
} else {
    $answer = "ODD";
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
    <p><?php echo "$number is $answer."; ?></p>

    <?php if ($number > 100): ?>
        <p>That's a big number!</p>
    <?php endif; ?>
</body>
</html>

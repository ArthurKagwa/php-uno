<?php
$firstName = "Arthur";
$lastName = "Asasira";

// The dot (.) joins pieces of text together
$fullName = $firstName . " " . $lastName;

$price = 1500;
$quantity = 3;
$total = $price * $quantity;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Text &amp; Maths</title>
</head>
<body>
    <h1>Hello, <?php echo $fullName; ?>!</h1>

    <h2>Shopping</h2>
    <p><?php echo $quantity . " pens at " . $price . " each = " . $total; ?></p>

    <h2>Maths with 10 and 3</h2>
    <p>10 + 3 = <?php echo 10 + 3; ?></p>
    <p>10 - 3 = <?php echo 10 - 3; ?></p>
    <p>10 * 3 = <?php echo 10 * 3; ?></p>
    <p>10 / 3 = <?php echo round(10 / 3, 2); ?></p>
    <p>10 % 3 = <?php echo 10 % 3; ?> (the remainder)</p>
</body>
</html>

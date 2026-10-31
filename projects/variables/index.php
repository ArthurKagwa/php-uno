<?php
// Variables start with a $ sign
$name = "Arthur";
$age = 23;
$city = "Kampala";
$likesCoding = true;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variables &amp; echo</title>
</head>
<body>
    <h1>About me</h1>
    <?php
    echo "<p>My name is $name.</p>";
    echo "<p>I am " . $age . " years old.</p>";
    echo "<p>I live in $city.</p>";

    if ($likesCoding) {
        echo "<p>I like coding!</p>";
    }

    $nextYear = $age + 1;
    echo "<p>Next year I will be $nextYear.</p>";
    ?>
</body>
</html>

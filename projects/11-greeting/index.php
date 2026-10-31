<?php
// GET values show up in the URL, e.g. ?name=Arthur
$name = trim($_GET["name"] ?? "");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Greeting</title>
</head>
<body>
    <h1>Greeting form</h1>

    <form method="get">
        <input type="text" name="name" placeholder="Your name"
               value="<?php echo htmlspecialchars($name); ?>">
        <button type="submit">Greet me</button>
    </form>

    <?php if ($name !== ""): ?>
        <?php
        $hour = (int) date("G");
        if ($hour < 12) {
            $greeting = "Good morning";
        } elseif ($hour < 17) {
            $greeting = "Good afternoon";
        } else {
            $greeting = "Good evening";
        }
        ?>
        <h2><?php echo $greeting . ", " . htmlspecialchars($name) . "!"; ?></h2>
    <?php endif; ?>
</body>
</html>

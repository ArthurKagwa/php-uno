<?php
// Read ?n= from the URL, default to 7
$n = filter_var($_GET["n"] ?? 7, FILTER_VALIDATE_INT);
if ($n === false) {
    $n = 7;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Multiplication Table</title>
</head>
<body>
    <h1>Times table for <?php echo $n; ?></h1>

    <form method="get">
        <input type="number" name="n" value="<?php echo $n; ?>">
        <button type="submit">Show</button>
    </form>

    <table border="1" cellpadding="6">
        <?php for ($i = 1; $i <= 12; $i++): ?>
            <tr>
                <td><?php echo "$n × $i"; ?></td>
                <td><?php echo $n * $i; ?></td>
            </tr>
        <?php endfor; ?>
    </table>
</body>
</html>

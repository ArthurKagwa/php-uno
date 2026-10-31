<?php
// Which times table to show
$n = 7;
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

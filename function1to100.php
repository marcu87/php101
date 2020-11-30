<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>1 to 100</title>
</head>
<body>

<?php
range (0, 100); {
    foreach (range(0, 100) as $número) {
        echo $número;
        echo '<br>';
    }
}
?>

</body>
</html>
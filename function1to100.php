<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>1 to 100</title>
</head>
<body>

<?php

function rangeOfNumbers()
{
    foreach (range(0, 100) as $number) {
        echo $number;
        echo '</br>';
    }
}

// rangeOfNumbers();

/**
 * $i++ is the same as $i = $i + 1
 */
function rangeOfNumbers2()
{
    for ($i = 0; $i <= 100; $i++) {
        echo $i . '<br />';
    }
}

// rangeOfNumbers2();


function rangeOfNumbers3()
{
    $i = 1;
    while ($i > 1) {
        echo $i . '<br/>';
        $i++;
    }
}

// rangeOfNumbers3();

function rangeOfNumbers4()
{
    $i = 0;
    do {
        echo $i;
        $i++;
    } while ($i <= 100);
}

rangeOfNumbers4();

?>

</body>
</html>
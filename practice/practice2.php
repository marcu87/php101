<?php

$phrase = 'What Goes Up Must Come Down';
$words = explode(" ", $phrase);
echo $words[0];
echo "<br>";
echo $words[1];
echo "<br>";
echo $words[2];
echo "<br>";
echo $words[3];
echo "<br>";
echo $words[4];
echo "<br>";
echo $words[5];
echo "<br>";

echo "<br>";
echo "Si utilizamos el loop: FOREACH";
echo "<br>";

$words2 = explode(" ", $phrase);
foreach ($words2 as $value) {
    echo $value . '<br>';
}

echo "<br>";
echo "Si utilizamos el loop: FOR";
echo "<br>";

$words2 = explode(" ", $phrase);
for ($i=0; $i < count($words2); $i++) {
    print $words2[$i] . '<br>';
}

?> 
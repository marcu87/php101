<?php

/**
 * echo this phrase, but make it so that it is 1 word per line, like this:
 * What
 * Goes
 * Up
 * Must
 * Come
 * Down
 * 
 * tip: look up the function explode() in php.net
 */

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

?> 
<?php
$greeting = "Hello, World!";
echo $greeting ."\n";

$upperCase = strtoupper($greeting);
echo "Uppercase: $upperCase\n";

$length = strlen($greeting);
echo "Length: $length\n";

$reversedChar = strrev($greeting);
echo "Reversed: $reversedChar\n";

$course = "This is the PHP course.";
echo $greeting . " " . $course;
?>
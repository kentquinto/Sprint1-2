<?php
$X = 10;
$Y = 5;
$N = 7.5;
$M = 2.5;

echo "X = " . $X ."\n";
echo "Y = " . $Y ."\n";

echo "Sum of X and Y: " . ($X + $Y) ."\n";
echo "Difference of X and Y: " . ($X - $Y) ."\n";
echo "Product of X and Y: " . ($X * $Y) ."\n";
echo "Module of X and Y: " . ($X % $Y) ."\n";

echo "N = " . $N ."\n";
echo "M = " . $M ."\n";

echo "Sum of N and M: " . ($N + $M) ."\n";
echo "Difference of N and M: " . ($N - $M) ."\n";
echo "Product of N and M: " . ($N * $M) ."\n";
echo "Modulo of N and M: " . ($N % $M) ."\n";

$doubleX = 2 * $X;
$doubleY = 2 * $Y;
$doubleN = 2 * $N;
$doubleM = 2 * $M;

$sumAll = $X + $Y + $N + $M;
$product = $X * $Y * $N * $M;

echo "Double of X: " . $doubleX ."\n";
echo "Double of Y: " . $doubleY ."\n";
echo "Double of N: " . $doubleN ."\n";
echo "Double of M: " . $doubleM ."\n";
echo "Sum of all variables: " . $sumAll ."\n";
echo "Product of all variables: " . $product ."\n";

function calculator($number1, $number2, $operation) {
    switch($operation) {
        case "+":
            return $number1 + $number2;
        case "-":
            return $number1 - $number2;
        case "*":
            return $number1 * $number2;
        case "/":
            if ($number2 != 0) {
                return $number1 / $number2;
            } else {
                return "Error: Division by zero";
            }
        default:
            return "Error: Invalid operation";
    }
}
$result = calculator(5,5,"+");
echo "The result is: " . $result ."\n";
?>
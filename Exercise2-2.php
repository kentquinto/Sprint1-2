<?php
function calculateSum(int $score1, int $score2, int $score3){
    if ($score1 < 0 || $score1 > 9999 || $score2 < 0 || $score2 > 9999 || $score3 < 0 || $score3 > 9999) {
        return "INVALID SCORES! Must be 0-9999!!!";
    }
    return $score1 + $score2 + $score3;
}

function calculateAverage(float $sum): float | int {
    $average = $sum / 3;
    return $average;
}

function classification(float $average): string {
    if ($average < 4000) {
        return "Beginner";
    } elseif ($average < 8000) {
        return "Intermediate";
    } else {
        return "Professional";
    }
}
$sum = calculateSum(3000,5000,8000);
$average = calculateAverage($sum);
$class = classification($average);

echo "Sum: ". $sum . "\n";
echo "Average: ". $average . "\n";
echo "Classification: ". $class . "\n";
?>
<?php
function totalPrice($minutes){
    $costs = 10;
    if ($minutes > 3){
        $additionalMin = $minutes -3;
        $costs = $costs + $additionalMin * 5;
    }
    return "The total cost is " . $costs . " cents.";
}

echo totalPrice(7);
?>
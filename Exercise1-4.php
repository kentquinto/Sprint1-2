<?php
function counter (int $startingNumber, int $countTimes, int $limit = 10){
    if ($countTimes == 0) {
        echo "You cant start counting by 0!";
        return;
    }
    for ($i = $startingNumber; $i<=$limit; $i+=$countTimes){
        echo $i ."\n";
    }
    
}
counter(0,10,50);
counter(0,2);
?>
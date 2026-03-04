<?php
function counter ($startingNumber, $countTimes, $limit){
    if ($countTimes == 0) {
        echo "You cant start counting by 0!";
        return;
    }
    if ($limit === null) {
        $limit = 10;
        echo "Limit is set to 10 by default!"."\n";
    }


    for ($i = $startingNumber; $i<=$limit; $i+=$countTimes){
        echo $i ."\n";
    }
    
}
counter(0,10,50);
?>
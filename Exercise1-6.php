<?php
function isBitten() {
    $chance = rand(0,1);

    if ($chance === 1) {
        return "Charlie bit you!";
    } else {
        return "Charlie didnt bite you this time!";
    }
}
echo isBitten();
?>
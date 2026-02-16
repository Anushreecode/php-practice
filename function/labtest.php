<?php
function average($first, $second)
{
    $number_of_contributor = 3;
    return ($first + $second) / $number_of_contributor;
}

if (average(100, 120) >= 60) {
    echo "i will repay you guys tomorrow";
}else {
    echo "i will contribute my money to pay the bill";
}
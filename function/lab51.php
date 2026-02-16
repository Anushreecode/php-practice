<?php
function average($first, $second, $third)
{
    return ($first + $second + $third) / 3;
}

if (average(10, 40, 10) >= 40) {
    echo "You passed the test!";
} else {
    echo "You failed the test.";
}

?>
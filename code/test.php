<!-- create the function  in php 
calculate the averge marks of the 3 subject if average is above 60 display result as pass the exam
to calculate the sum of two number 
define array and print the second object  -->

<?php
function checkPassStatus($computer, $math, $science) {
    $average = ($computer + $math + $science) / 3;
    
    if ($average > 60) {
        return "Average: $average - Pass the exam";
    } else {
        return "Average: $average - Fail";
    }
}

function addition($first, $second) {
    return $first + $second;
}

echo checkPassStatus(70, 80, 90) . "\n";
echo  "sum is $first and $second is :" . addition(3, 6);  
?>


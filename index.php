<?php

function print_range($count_elem, $max_val, $min_val) {
    if($min_val > $max_val) {
        $max_val = $min_val + $max_val;
        $min_val = $max_val - $min_val;
        $max_val = $max_val - $min_val;
    }
    echo "<h3>Count: $count_elem</h3>";
    echo "<h3>Min: $min_val</h3>";
    echo "<h3>Max: $max_val</h3>";

    $str = "Output: ";

    for($i = 0; $i < $count_elem; $i++) {
        $str .= rand($min_val, $max_val);
        if($i != $count_elem - 1) {
            $str .= ", ";
        }
    }
    echo "<h2>$str</h2>";
}

function powNum($num1, $num2) {
    $result = 1;
    for($i = 0; $i < $num2; $i++) {
        $result *= $num1;
    }
    echo "<h1>$num1^$num2 = $result</h1>";
}

function changeOrder(&$num1, &$num2) {
    $num1 = $num1 + $num2;
    $num2 = $num1 - $num2;
    $num1 = $num1 - $num2;
}

print_range(6, 3, 10);

powNum(5, 12);

$num1 = 3;
$num2 = 13;
echo "<h3>First: $num1; Second: $num2;</h3>";
changeOrder($num1, $num2);
echo "<h3>First: $num1; Second: $num2;</h3>";
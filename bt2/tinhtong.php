<?php

function sum($x, $arr)
{
    if ($x === 1) {
        $sum = 0;
        for ($i = 0; $i < count($arr); $i++) {
            $sum += $i;
        }
        return $sum;
    }
    if ($x === 2) {
        sort($arr);
        return $arr;
    }
}


$array = array(1, 2, 3, 4, 5, 6, 10, 15, 100, -10);

print("<pre>" . print_r(sum(1, $array), true) . "</pre>");
print("<pre>" . print_r(sum(2, $array), true) . "</pre>");



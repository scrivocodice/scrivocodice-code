<?php


$num1 = '0.12345';
$num2 = 2;
$result = bcadd($num1, $num2, 5);

echo $result; // '2.12345'
var_dump(bccomp($num1, $num2) > 0); // false


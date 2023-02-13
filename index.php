<?php
require "./func" . "/func.php";

function outputHello() {
    echo "Hello World!";
}
function sum($num1, $num2) {
    $num = $num1 + $num2;
    return $num;
}


//func();
print ('good');
outputHello();
$plus = sum(10, 20);
echo $plus;

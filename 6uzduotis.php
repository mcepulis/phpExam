<?php


if (is_numeric($argv[1]) === false || is_numeric($argv[2]) === false) {
    echo "Raide ne skaicius" . PHP_EOL;
    exit(1);
}
$number = (int)$argv[1];
$number2 = (int)$argv[2];
$square = ($number * $number2)**2;
echo $argv[1] ." " . $argv[2] . "-->> Your number is " . $square . PHP_EOL;

?>
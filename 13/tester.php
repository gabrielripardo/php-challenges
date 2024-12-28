<?php
include_once('calculator.php');

function add($a, $b){
    return $a + $b;
}

function sub($a, $b){
    return $a - $b;
}

function mul($a, $b){
    return $a * $b;
}

function div($a, $b){
    return $a / $b;
}

function remainder($a, $b){
    return $a % $b;
}

function average($a, $b, $c){
    return ($a + $b + $c) / 3;
}

$numbers = [1, 1, 2, 3, 5, 8, 13];

echo '<pre>';
echo 'Add: ' . add(5, 10) . "\n";
echo calculator\add($numbers) . "\n";


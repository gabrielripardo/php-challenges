<?php
namespace Calculator;

function add($numbers){
    return array_sum($numbers);
}

function subtract($start, $numbers){
    return $start - array_sum($numbers);
}

function multiply($numbers){
    return array_product($numbers);
}

function divide($start, $numbers){
    foreach ($numbers as $number) {
        $start /= $number;
    }

    return $start;
}

function remainder($start, $numbers){
    foreach ($numbers as $number) {
        $start = $start % $number;
        if(0 == $start) {
            return $start;
        }
    }
    return $start;
}

function average($numbers){
    return array_sum($numbers) / count($numbers);
}
<?php



function show_multiples()
{
    for ($x = 1; $x <= 100; $x++) {
        if($x % 3 == 0 && $x % 5 == 0){
            echo $x." is FizzBuzz <br>";
        }else if($x % 3 == 0) {
            echo $x." is Fizz <br>";
        }
        else if($x % 5 == 0) {
            echo $x." is Buzz <br>";
        }
    }

}

show_multiples();
<?php

function check_capacity($attendees = 0, $capacity) {
    if($attendees < $capacity) {
        return "There are still tickets available for attendees: $capacity";
    }
    return "This event is sold out";
}

$events = array(
    'The Max' => [98, 60],
    'Warner Bros Cinema' => [1200, 1500],
    'Dreamworks' => [2900, 1800 ],
    81 => ["age", "old"]
);

foreach ($events as $name => $event) {

    echo $name.": ". check_capacity($event[0], $event[1]) ."\n";
}

